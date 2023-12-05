<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('paymentTypes.index', [
            'paymentTypes' => PaymentType::orderBy('name')->get()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'unique:payment_types,name', 'max:255']
        ]);

        PaymentType::create($request->all());

        return back()
            ->with('success', 'El nuevo tipo de pago se ha guardado con éxito.');
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', "unique:payment_types,name,{$id}", 'max:255']
        ]);

        try {
            $paymentType = PaymentType::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el tipo de pago solicitado.'
                ]);
        }

        $paymentType->update($request->all());

        return back()
            ->with('success', 'El nombre del tipo de pago se ha actualizado con éxito.');
    }

    public function destroy(string $id)
    {
        try {
            $paymentType = PaymentType::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el tipo de pago solicitado.'
                ]);
        }

        $paymentType->delete();

        return back()
            ->with('success', 'El tipo de pago se ha eliminado con éxito.');
    }
}
