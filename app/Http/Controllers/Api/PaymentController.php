<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaymentCollection;
use App\Http\Resources\PaymentResource;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with([
            'customer',
            'fare',
            'paymentStatus',
            'paymentType'
        ])->get();

        return new PaymentCollection($payments);
    }

    public function show(Payment $payment)
    {
        return new PaymentResource($payment
            ->loadMissing(['customer', 'fare', 'paymentStatus', 'paymentType']));
    }
}
