<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimeCheckRequest;
use App\Models\Customer;
use App\Models\TimeCheck;
use Carbon\Carbon;

class TimeCheckController extends Controller
{
    protected $customer;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('timeCheck');
    }

    public function store(TimeCheckRequest $request)
    {
        $customer = Customer::with([
            'checkingTimes' => function ($checkingTimes) {
                $checkingTimes
                    ->orderBy('check_date', 'desc')
                    ->orderBy('time_in', 'desc');
            }
        ])->where('code', $request->code)
            ->first();

        $now = now();
        $recentDay = Carbon::parse($customer->checkingTimes[0]->check_date)->day;

        if ($recentDay === $now->day && !$customer->checkingTimes[0]->time_out) {
            return back()
                ->withErrors([
                    'internal_error' => 'No es posible registrar una hora de entrada el mismo día y para el mismo cliente dos veces seguidas.'
                ]);
        }

        TimeCheck::create([
            'customer_id' => $customer->id,
            'time_in' => $now->format('H:i:s'),
            'check_date' => $now->format('Y-m-d')
        ]);

        return back()
            ->with('success', 'Hora de entrada registrada con éxito.');
    }

    public function update(TimeCheckRequest $request)
    {
        $customer = Customer::with([
            'checkingTimes' => function ($checkingTimes) {
                $checkingTimes
                    ->orderBy('check_date', 'desc')
                    ->orderBy('time_in', 'desc');
            }
        ])->where('code', $request->code)
            ->first();

        $now = now();
        $recentCheckTime = $customer->checkingTimes[0];
        $recentDay = Carbon::parse($recentCheckTime->check_date)->day;

        if ($recentDay === $now->day && !$recentCheckTime->time_out) {
            $recentCheckTime->update([
                'time_out' => $now->format('H:i:s')
            ]);

            return back()
                ->with('success', 'Hora de salida registrada con éxito.');
        }

        return back()
            ->withErrors([
                'internal_error' => 'No es posible registrar una hora de salida sin una hora de entrada de el día de hoy.'
            ]);
    }
}
