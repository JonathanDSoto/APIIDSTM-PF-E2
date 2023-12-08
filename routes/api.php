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
    Route::post('sync-account', [AuthController::class, 'syncAccount'])->name('api.auth.sync-account');
    Route::post('login', [AuthController::class, 'login'])->name('api.auth.login');
    Route::post('sign-up', [AuthController::class, 'SignUp'])->name('api.auth.sign-up');

    Route::post('session-days/subscribe', [SessionDayController::class, 'subscribe'])->name('api.session-days.subscribe');
    Route::delete('session-days/cancel-subscription', [SessionDayController::class, 'cancelSubscription'])->name('api.session-days.cancel-subscription');

    Route::post('fares/pay', [FareController::class, 'pay'])->name('api.fares.pay');

    Route::apiResource('customers', CustomerController::class, [
        'as' => 'api'
    ])->only(['show', 'update']);
    Route::apiResource('sessions', SessionController::class, [
        'as' => 'api'
    ])->only(['index', 'show']);
    Route::apiResource('fares', FareController::class, [
        'as' => 'api'
    ])->only(['index', 'show']);
    Route::apiResource('blood-groups', BloodGroupController::class, [
        'as' => 'api'
    ])->only(['index', 'show']);
    Route::apiResource('payments', PaymentController::class, [
        'as' => 'api'
    ])->only(['index', 'show']);
    Route::apiResource('payment-types', PaymentTypeController::class, [
        'as' => 'api'
    ])->only(['index', 'show']);
    Route::apiResource('fare-periods', FarePeriodController::class, [
        'as' => 'api'
    ])->only(['index', 'show']);
    Route::apiResource('session-days', SessionDayController::class, [
        'as' => 'api'
    ])->only(['index', 'show']);
});
