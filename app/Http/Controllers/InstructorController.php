<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\ExerciseType;
use App\Models\Instructor;
use App\Rules\InstructorHasSessions;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
            'email' => ['bail', 'email', 'unique:instructors,email', 'nullable', 'max:255'],
            'blood_group_id' => ['bail', 'required', 'integer', 'exists:blood_groups,id'],
            'is_active' => ['bail', 'required', 'integer', Rule::in([0, 1])],
            'instructor_qualifications' => ['bail', 'required', 'array'],
            'instructor_qualifications.*' => ['bail', 'required', 'integer', 'exists:exercise_types,id']
        ];
    }

    public function index()
    {
        $instructors = Instructor::with(['exerciseTypes', 'bloodGroup'])
            ->orderBy('name')
            ->paginate(15);

        return view('instructors.index', [
            'instructors' => $instructors,
            'bloodGroups' => BloodGroup::orderBy('name')->get(),
            'exerciseTypes' => ExerciseType::orderBy('name')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request['instructor_qualifications'] = json_decode($request->instructor_qualifications);
        $this->validate($request, $this->validator);

        $instructor = Instructor::create($request->all());
        $instructor
            ->exerciseTypes()
            ->attach($request->instructor_qualifications);

        return back()
            ->with('success', 'La información del instructor se ha guardado con éxito.');
    }

    public function show(string $id)
    {
        $relationships = [
            'sessionDays.weekDay',
            'sessionDays.session',
            'exerciseTypes',
            'bloodGroup'
        ];

        try {
            $instructor = Instructor::with($relationships)->findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return to_route('instructors')
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el instructor solicitado.'
                ]);
        }

        return view('instructors.show', [
            'instructor' => $instructor,
            'bloodGroups' => BloodGroup::orderBy('name')->get(),
            'exerciseTypes' => ExerciseType::orderBy('name')->get()
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request['instructor_qualifications'] = json_decode($request->instructor_qualifications);

        $this->validator['phone'] = ['required', 'integer', "unique:instructors,phone,{$id}", 'digits:10'];
        $this->validator['email'] = ['bail', 'email', "unique:instructors,email,{$id}", 'nullable', 'max:255'];

        $this->validate($request, $this->validator);

        try {
            $instructor = Instructor::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el instructor solicitado.'
                ]);
        }

        $instructor->update($request->all());
        $instructor
            ->exerciseTypes()
            ->sync($request->instructor_qualifications);

        return back()
            ->with('success', 'La información del instructor se ha actualizado con éxito.');
    }

    public function destroy(string $id)
    {
        try {
            $instructor = Instructor::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el instructor solicitado.'
                ]);
        }

        Validator::make(['instructor_id' => $id], [
            'instructor_id' => [new InstructorHasSessions]
        ])->validate();

        $instructor->delete();

        return back()
            ->with('success', 'La información del instructor se ha eliminado con éxito.');
    }
}
