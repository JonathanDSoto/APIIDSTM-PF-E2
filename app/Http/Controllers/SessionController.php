<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreSessionRequest;
// use App\Http\Requests\UpdateSessionRequest;
use App\Models\ExerciseType;
use App\Models\Instructor;
use App\Models\Session;
use App\Models\WeekDay;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {

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
            'session' => $session
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

    public function update(Request $request, string $id)
    {

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
}
