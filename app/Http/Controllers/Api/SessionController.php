<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SessionCollection;
use App\Http\Resources\SessionResource;
use App\Models\Session;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::with([
            'exerciseType',
            'sessionDays.instructor',
            'sessionDays.weekDay'
        ])->orderBy('name')
            ->get();

        return new SessionCollection($sessions);
    }

    public function show(Session $session)
    {
        return new SessionResource($session
            ->loadMissing([
                'exerciseType',
                'sessionDays.instructor',
                'sessionDays.weekDay'
            ]));
    }
}
