<?php

namespace App\Http\Controllers;

use App\Models\Fare;
use App\Models\FarePeriod;
use App\Models\Payment;
use App\Rules\FarePeriodInUse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class FareController extends Controller
{
    protected $validator;

    public function __construct()
    {
        $this->middleware('auth');
        $this->validator = [
            'name' => ['required', 'string', 'unique:fares,name', 'not_regex:/\d/', 'max:255'],
            'fare_period_id' => ['bail', 'required', 'integer', 'exists:fare_periods,id'],
            'price' => ['bail', 'required', 'numeric', 'between:50,999999999.99'],
            'description' => ['bail', 'required', 'string']
        ];
    }

    public function index()
    {
        return view('fares', [
            'fares' => Fare::all(),
            'faresCount' => Payment::all()->countBy('fare_id'),
            'farePeriods' => FarePeriod::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validator['fare_period_id'] = [
            'bail', 'required', 'integer', 'exists:fare_periods,id', new FarePeriodInUse
        ];
        $this->validate($request, $this->validator);

        Fare::create($request->all());

        return back()
            ->with('success', 'La información de la tarifa se ha guardado con éxito.');
    }

    public function update(Request $request, string $id)
    {
        $this->validator['name'] = ['required', 'string', "unique:fares,name,{$id}", 'not_regex:/\d/', 'max:255'];
        $this->validate($request, $this->validator);

        try {
            $fare = Fare::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar la tarifa solicitada.'
                ]);
        }

        $fare->update($request->all());

        return back()
            ->with('success', 'La información de la tarifa se ha actualizado con éxito.');
    }

    public function destroy(string $id)
    {
        try {
            $fare = Fare::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar la tarifa solicitada.'
                ]);
        }

        $fare->delete();

        return back()
            ->with('success', 'La información de la tarifa se ha eliminado con éxito.');
    }
}
