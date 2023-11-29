<?php

namespace App\Http\Controllers;

use App\Models\Fare;
use App\Models\FarePeriod;
use App\Models\Payment;
use Illuminate\Http\Request;

class FareController extends Controller
{
    protected $validator;

    public function __construct()
    {
        $this->middleware('auth');
        $this->validator = [
            'name' => ['required', 'string', 'unique:fares,name', 'not_regex:/\d/', 'max:255'],
            'fare_period_id' => ['required', 'integer', 'exists:fare_periods,id'],
            'price' => ['required', 'numeric', 'between:0,999999999.99'],
            'description' => ['required', 'string']
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
        $this->validate($request, $this->validator);

        if (Fare::where('fare_period_id', $request->fare_period_id)->exists()) {
            return redirect()
                ->back()
                ->withErrors(['internal_error' => 'No es posible tener más tarifas en un mismo periodo de tiempo.']);
        }

        Fare::create($request->all());

        return redirect()
            ->route('fares')
            ->with('success', 'La información de la tarifa se ha guardado con éxito.');
    }

    public function update(Request $request, string $id)
    {
        $this->validator['name'] = ['required', 'string', "unique:fares,name,{$id}", 'not_regex:/\d/', 'max:255'];
        $this->validate($request, $this->validator);

        $fare = Fare::find($id);

        if ($fare) {
            $fare->update($request->all());

            return redirect()
                ->route('fares')
                ->with('success', 'La información de la tarifa se ha actualizado con éxito.');
        }

        return redirect()
                ->route('fares')
                ->withErrors(['internal_error' => 'No se ha podido encontrar la tarifa solicitada.']);
    }

    public function destroy(string $id)
    {
        $fare = Fare::find($id);

        if ($fare) {
            $fare->delete();

            return redirect()
                ->route('fares')
                ->with('success', 'La información de la tarifa se ha eliminado con éxito.');
        }

        return redirect()
                ->route('fares')
                ->withErrors(['internal_error' => 'No se ha podido encontrar la tarifa solicitada.']);
    }
}
