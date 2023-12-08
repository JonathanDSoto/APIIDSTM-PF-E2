<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FarePeriodCollection;
use App\Http\Resources\FarePeriodResource;
use App\Models\FarePeriod;

class FarePeriodController extends Controller
{
    public function index()
    {
        return new FarePeriodCollection(FarePeriod::all());
    }

    public function show(FarePeriod $farePeriod)
    {
        return new FarePeriodResource($farePeriod);
    }
}
