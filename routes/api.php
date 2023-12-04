<?php

use App\Http\Controllers\Api\BloodGroupController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\FareController;
use App\Http\Controllers\Api\FarePeriodController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\PaymentTypeController;
use App\Http\Controllers\Api\SessionController;
use App\Http\Controllers\Api\SessionDayController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('sync-account', [AuthController::class, 'syncAccount']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('sign-up', [AuthController::class, 'SignUp']);

    Route::post('session-days/subscribe', [SessionDayController::class, 'subscribe']);
    Route::delete('session-days/cancel-subscription', [SessionDayController::class, 'cancelSubscription']);

    Route::post('fares/pay', [FareController::class, 'pay']);

    Route::apiResource('customers', CustomerController::class)->only(['show', 'update']);
    Route::apiResource('sessions', SessionController::class)->only(['index', 'show']);
    Route::apiResource('fares', FareController::class)->only(['index', 'show']);
    Route::apiResource('blood-groups', BloodGroupController::class)->only(['index', 'show']);
    Route::apiResource('payments', PaymentController::class)->only(['index', 'show']);
    Route::apiResource('payment-types', PaymentTypeController::class)->only(['index', 'show']);
    Route::apiResource('fare-periods', FarePeriodController::class)->only(['index', 'show']);
    Route::apiResource('session-days', SessionDayController::class)->only(['index', 'show']);
});
