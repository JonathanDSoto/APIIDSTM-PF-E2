<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\SessionDay;
use DateInterval;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $active = Customer::where('is_active', true)->count();
        $inactive = Customer::where('is_active', false)->count();

        return view('home', [
            'customers' => [
                'active' => $active,
                'inactive' => $inactive
            ],
            'totalSessions' => SessionDay::count(),
            'popularInstructors' => DB::table('view_popular_instructors')->get(),
            'popularExerciseSessions' => DB::table('view_popular_exercise_sessions')->get(),
            'paymentsPerFares' => DB::table('view_payments_per_fares')->get(),
            'earnings' => [
                'currentMonth' => DB::table('view_current_month_earnings')->first()->earnings,
                'lastMonth' => DB::table('view_last_month_earnings')->first()->earnings,
                'currentYear' => DB::table('view_current_year_earnings')->first()->earnings,
                'lastYear' => DB::table('view_last_year_earnings')->first()->earnings
            ]
        ]);
    }
}
