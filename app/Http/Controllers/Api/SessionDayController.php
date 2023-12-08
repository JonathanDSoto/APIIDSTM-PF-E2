<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscribeSessionDayRequest;
use App\Http\Resources\SessionDayCollection;
use App\Http\Resources\SessionDayResource;
use App\Models\Customer;
use App\Models\Session;
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
        $sessionDay = SessionDay::find($request->session_day_id);
        $maxCapacity = Session::find($sessionDay->session_id)->max_capacity;

        if ($sessionDay->current_capacity === $maxCapacity) { 
            return response()->json([
                'status' => 'failed',
                'errors' => [
                    'internal_error' => [
                        'Error al inscribirse. Todos los espacios de la clase ya están ocupados.'
                    ]
                ]
            ]);
        }

        $customer = Customer::find($request->customer_id);

        if (
            SessionDay::whereHas('participants', function ($participants) use ($customer, $sessionDay) {
                $participants
                    ->where('customer_id', $customer->id)
                    ->where('session_day_id', $sessionDay->id);
            })->exists()
        ) {
            return response()->json([
                'status' => 'failed',
                'errors' => [
                    'internal_error' => [
                        'Error al inscribirse. Ya se está inscrito a esta clase.'
                    ]
                ]
            ]);
        }

        $customer->subscribedSessions()->syncWithoutDetaching([
            $request->session_day_id => ['subscription_date' => now()]
        ]);

        $sessionDay->update([
            'current_capacity' => $sessionDay->current_capacity + 1
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Suscripción a la clase registrada con éxito.'
        ]);
    }

    public function cancelSubscription(SubscribeSessionDayRequest $request)
    {
        $customer = Customer::find($request->customer_id);
        $subscriptionCanceled = $customer->subscribedSessions()
            ->detach($request->session_day_id);

        if ($subscriptionCanceled) {
            $sessionDay = SessionDay::find($request->session_day_id);
            $sessionDay->update([
                'current_capacity' => $sessionDay->current_capacity - 1
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Suscripción a la clase removida con éxito.'
        ]);
    }
}
