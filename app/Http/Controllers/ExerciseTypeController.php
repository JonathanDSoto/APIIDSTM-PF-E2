<?php

namespace App\Http\Controllers;

use App\Models\ExerciseType;
use App\Rules\ExerciseTypeHasInstructors;
use App\Rules\ExerciseTypeHasSessions;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExerciseTypeController extends Controller
{
    protected $validator;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('exerciseTypes.index', [
            'exerciseTypes' => ExerciseType::orderBy('name')
                ->paginate(15)
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'unique:exercise_types,name', 'max:255']
        ]);

        ExerciseType::create($request->all());

        return back()
            ->with('success', 'El nuevo tipo de ejercicio se ha guardado con éxito.');
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', "unique:exercise_types,name,{$id}", 'max:255']
        ]);

        try {
            $exerciseType = ExerciseType::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el tipo de ejercicio solicitado.'
                ]);
        }

        $exerciseType->update($request->all());

        return back()
            ->with('success', 'El nombre del tipo de ejercicio se ha actualizado con éxito');
    }

    public function destroy(string $id)
    {
        try {
            $exerciseType = ExerciseType::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el tipo de ejercicio solicitado.'
                ]);
        }

        Validator::make(['exercise_type_id' => $id], [
            'exercise_type_id' => [new ExerciseTypeHasInstructors, new ExerciseTypeHasSessions]
        ])->validate();

        $exerciseType->delete();

        return back()
            ->with('success', 'El tipo de ejercicio se ha eliminado con éxito.');
    }
}
