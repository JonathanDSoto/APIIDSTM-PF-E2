<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\ExerciseType;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InstructorController extends Controller
{
    protected $validator;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->validator = [
            'name' => ['required', 'string', 'not_regex:/\d/', 'max:255'],
            'phone' => ['required', 'integer', 'unique:instructors,phone', 'digits:10'],
            'emergency_phone' => ['required', 'integer', 'different:phone', 'digits:10'],
            'email' => ['email', 'unique:instructors,email', 'nullable', 'max:255'],
            'blood_group_id' => ['required', 'integer', 'exists:blood_groups,id'],
            'is_active' => ['integer', Rule::in([0, 1])],
            'instructor_qualifications' => ['required', 'array'],
            'instructor_qualifications.*' => ['required', 'integer', 'exists:exercise_types,id']
        ];
    }

    public function index()
    {
        return view('instructors.index', [
            'instructors' => Instructor::orderBy('name')->paginate(15),
            'bloodGroups' => BloodGroup::orderBy('name')->get(),
            'exerciseTypes' => ExerciseType::orderBy('name')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request['instructor_qualifications'] = json_decode($request->instructor_qualifications);
        $this->validate($request, $this->validator);

        $instructor = Instructor::create($request->only([
            'name',
            'phone',
            'emergency_phone',
            'email',
            'blood_group_id'
        ]));
        $instructor
            ->exerciseTypes()
            ->attach($request->instructor_qualifications);

        return back()
            ->with('success', 'La información del instructor se ha guardado con éxito.');
    }

    public function show(string $id)
    {
        try {
            $instructor = Instructor::with([
                'sessions.sessionDays.weekDay',
                'exerciseTypes',
                'bloodGroup'
            ])->findOrFail($id);

            return view('instructors.show', [
                'instructor' => $instructor,
                'bloodGroups' => BloodGroup::orderBy('name')->get(),
                'exerciseTypes' => ExerciseType::orderBy('name')->get()
            ]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return to_route('instructors')
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el instructor solicitado.'
                ]);
        }
    }

    public function update(Request $request, string $id)
    {
        $request['instructor_qualifications'] = json_decode($request->instructor_qualifications);

        $this->validator['is_active'] = ['required', 'integer', Rule::in([0, 1])];
        $this->validator['phone'] = ['required', 'integer', "unique:instructors,phone,{$id}", 'digits:10'];
        $this->validator['email'] = ['email', "unique:instructors,email,{$id}", 'nullable', 'max:255'];

        $this->validate($request, $this->validator);

        try {
            $instructor = Instructor::findOrFail($id);
            $instructor->update($request->all());
            $instructor
                ->exerciseTypes()
                ->sync($request->instructor_qualifications);

            return back()
                ->with('success', 'La información del instructor se ha actualizado con éxito.');
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el instructor solicitado.'
                ]);
        }
    }

    public function destroy(string $id)
    {
        try {
            $instructor = Instructor::findOrFail($id);
            $instructor->delete();

            return back()
                ->with('success', 'La información del instructor se ha eliminado con éxito.');
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el instructor solicitado.'
                ]);
        }
    }
}
