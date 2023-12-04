<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscribeSessionDayRequest;
use App\Http\Resources\SessionDayCollection;
use App\Http\Resources\SessionDayResource;
use App\Models\Customer;
use App\Models\SessionDay;

class SessionDayController extends Controller
{
    public function index()
    {
        $sessionDays = SessionDay::with([
            'session',
            'instructor',
            'participants',
            'weekDay'
        ])->get();

        return new SessionDayCollection($sessionDays);
    }

    public function show(SessionDay $sessionDay)
    {
        return new SessionDayResource($sessionDay
            ->loadMissing([
                'session',
                'instructor',
                'participants',
                'weekDay'
            ]));
    }

    public function subscribe(SubscribeSessionDayRequest $request)
    {
        $customer = Customer::find($request->customer_id);
        $customer->subscribedSessions()->syncWithoutDetaching([
            $request->session_day_id => ['subscription_date' => now()]
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Subscripción a la clase registrada con éxito.'
        ]);
    }

    public function cancelSubscription(SubscribeSessionDayRequest $request)
    {
        $customer = Customer::find($request->customer_id);
        $customer->subscribedSessions()->detach($request->session_day_id);

        return response()->json([
            'status' => 'success',
            'message' => 'Subscripción a la clase removida con éxito.'
        ]);
    }
}
