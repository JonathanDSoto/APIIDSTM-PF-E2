<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSessionRequest;
use App\Http\Requests\SubscribeSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use App\Models\Customer;
use App\Models\ExerciseType;
use App\Models\Instructor;
use App\Models\Session;
use App\Models\SessionDay;
use App\Models\WeekDay;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('sessions.index', [
            'sessions' => Session::with('exerciseType')
                ->orderBy('name')
                ->paginate(8)
        ]);
    }
    
    public function create()
    {
        return view('sessions.create', [
            'instructors' => Instructor::orderBy('name')->get(),
            'weekDays' => WeekDay::all(),
            'exerciseTypes' => ExerciseType::orderBy('name')->get()
        ]);
    }

    public function store(StoreSessionRequest $request)
    {
        $session = Session::create($request->only([
            'name',
            'exercise_type_id',
            'max_capacity',
            'description'
        ]));

        foreach($request->input('session_days') as $sessionDay) {
            SessionDay::create([
                'session_id' => $session->id,
                'instructor_id' => $sessionDay['instructor_id'],
                'week_day_id' => $sessionDay['week_day_id'],
                'start_hour' => $sessionDay['start_hour'],
                'end_hour' => $sessionDay['end_hour']
            ]);
        }

        return back()
            ->with('success', 'La información de la clase se ha guardado con éxito.');
    }

    public function show(string $id)
    {
        $relationships = [
            'exerciseType',
            'sessionDays' => function ($sessionDays) {
                $sessionDays->with([
                    'instructor',
                    'weekDay',
                    'participants',
                    'attendanceHistory' => function ($attendanceHistory) {
                        $attendanceHistory->orderBy('attendance_date', 'desc');
                    }
                ]);
            }
        ];

        try {
            $session = Session::with($relationships)
                ->findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar la clase solicitada.'
                ]);
        }

        return view('sessions.show', [
            'session' => $session,
            'customers' => Customer::where('is_active', true)
                ->orderBy('name')
                ->get()
        ]);
    }

    public function edit(string $id)
    {
        try {
            $session = Session::with([
                'exerciseType',
                'sessionDays' => function ($sessionDays) {
                    $sessionDays->with([
                        'instructor',
                        'weekDay'
                    ]);
                }
            ])->findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar la clase solicitada.'
                ]);
        }

        return view('sessions.edit', [
            'session' => $session,
            'instructors' => Instructor::orderBy('name')->get(),
            'weekDays' => WeekDay::all(),
            'exerciseTypes' => ExerciseType::orderBy('name')->get()
        ]);
    }

    public function update(UpdateSessionRequest $request, string $id)
    {
        try {
            $session = Session::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar la clase solicitada.'
                ]);   
        }

        $session->update($request->only([
            'name',
            'max_capacity',
            'description'
        ]));

        $sessionDays = $session->sessionDays();
        $ids = [];

        foreach($request->input('session_days') as $sessionDay) {
            // Updating session days that where modified and have id prop.
            if (isset($sessionDay['id'])) {
                // Array used lately to delete those ids that are not in it.
                array_push($ids, $sessionDay['id']);

                SessionDay::find($sessionDay['id'])
                    ->update([
                        'instructor_id' => $sessionDay['instructor_id'],
                        'week_day_id' => $sessionDay['week_day_id'],
                        'start_hour' => $sessionDay['start_hour'],
                        'end_hour' => $sessionDay['end_hour']
                    ]);

                continue;
            }

            // Creating new session days.
            $newSessionDay = $sessionDays->create([
                'instructor_id' => $sessionDay['instructor_id'],
                'week_day_id' => $sessionDay['week_day_id'],
                'start_hour' => $sessionDay['start_hour'],
                'end_hour' => $sessionDay['end_hour'],
                'current_capacity' => 0
            ]);

            array_push($ids, $newSessionDay->id);
        }

        $sessionDays->whereNotIn('id', $ids)->delete();

        return back()
            ->with('success', 'La información de la clase se ha actualizado con éxito.');
    }

    public function destroy(string $id)
    {
        try {
            $session = Session::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar la clase solicitada.'
                ]);
        }

        $session->delete();

        return back()
            ->with('success', 'La información de la clase se ha eliminado con éxito.');
    }

    public function subscribe(SubscribeSessionRequest $request)
    {
        try {
            $sessionDay = SessionDay::findOrFail($request->session_day_id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar la clase solicitada.'
                ]);
        }

        if ($sessionDay->current_capacity === $sessionDay->session->max_capacity) {
            return back()
                ->withErrors([
                    'internal_error' => 'La clase solicitada ya se encuentra llena.'
                ]);
        }

        $sessionDay
            ->participants()
            ->syncWithoutDetaching([
                $request->customer_id => [
                    'subscription_date' => now()
                ]
            ]);
        
        $sessionDay->update([
            'current_capacity' => $sessionDay->current_capacity + 1
        ]);

        return back()
            ->with('success', 'El cliente se ha suscrito a la clase correctamente.');
    }
}
