<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BloodGroupCollection;
use App\Http\Resources\BloodGroupResource;
use App\Models\BloodGroup;

class BloodGroupController extends Controller
{
    public function index()
    {
        return new BloodGroupCollection(BloodGroup::orderBy('name')->get());
    }

    public function show(BloodGroup $bloodGroup)
    {
        return new BloodGroupResource($bloodGroup);
    }
}
