<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaymentTypeCollection;
use App\Http\Resources\PaymentTypeResource;
use App\Models\PaymentType;

class PaymentTypeController extends Controller
{
    public function index()
    {
        return new PaymentTypeCollection(PaymentType::orderBy('name')->get());
    }

    public function show(PaymentType $paymentType)
    {
        return new PaymentTypeResource($paymentType);
    }
}
