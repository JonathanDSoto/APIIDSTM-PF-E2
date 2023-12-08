<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PayFareRequest;
use App\Http\Resources\FareCollection;
use App\Http\Resources\FareResource;
use App\Models\Fare;
use App\Models\Payment;

class FareController extends Controller
{
    public function index()
    {
        $fares = Fare::with('farePeriod')->get();

        return new FareCollection($fares);
    }

    public function show(Fare $fare)
    {
        return new FareResource($fare->loadMissing('farePeriod'));
    }

    public function pay(PayFareRequest $request)
    {
        $request['payment_status_id'] = 1;
        $request['payment_datetime'] = now();
        Payment::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Pago realizado con éxito.'
        ]);
    }
}
