<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
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
            'phone' => ['required', 'string', 'unique:instructors,phone', 'max:50'],
            'emergency_phone' => ['required', 'string', 'different:phone', 'max:50'],
            'email' => ['email', 'unique:instructors,email', 'nullable', 'max:255'],
            'blood_group_id' => ['required', 'integer', 'exists:blood_groups,id'],
            'is_active' => ['integer', Rule::in([0, 1])],
            'instructor_qualifications' => ['required', 'array'],
            'instructor_qualifications.*' => ['required', 'integer', 'exists:exercise_types,id']
        ];
    }

    public function index()
    {
        $instructors = Instructor::with("exerciseTypes")->simplePaginate(15);

        return view('instructors.index', [
            'instructors' => $instructors
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validator);

        $instructor = Instructor::create($request->all());
        $instructor->exerciseTypes()->attach($request->instructor_qualifications);

        return redirect()
            ->route('instructors')
            ->with('success', 'La información del instructor se ha guardado con éxito.');
    }

    public function show(string $id)
    {
        $instructor = Instructor::find($id);

        return view('instructors.show', ['instructor' => $instructor]);
    }

    public function update(Request $request, string $id)
    {
        $this->validator['is_active'] = ['required', 'integer', Rule::in([0, 1])];
        $this->validate($request, $this->validator);

        $instructor = Instructor::find($id);

        if ($instructor) {
            $instructor->update($request->all());
            $instructor->exerciseTypes()->sync($request->exercise_types);

            return redirect()
                ->route('instructors.show', ['id' => $id])
                ->with('success', 'La información del instructor se ha actualizado con éxito.');
        }
    }

    public function destroy(string $id)
    {
        $instructor = Instructor::find($id);

        if ($instructor) {
            $instructor->delete();

            return redirect()
                ->route('instructors')
                ->with('success', 'La información del instructor se ha eliminado con éxito.');
        }
    }
}
