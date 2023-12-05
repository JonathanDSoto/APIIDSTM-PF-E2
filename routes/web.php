<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExerciseTypeController;
use App\Http\Controllers\FareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\TimeCheckController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/', HomeController::class)->name('home');

Route::controller(CustomerController::class)->prefix('customers')->group(function () {
    Route::get('/', 'index')->name('customers');
    Route::post('/', 'store')->name('customers.store');
    Route::get('/{id}', 'show')->name('customers.show');
    Route::get('/{id}/payments', 'showPayments')->name('customers.show_payments');
    Route::get('/{id}/attendances', 'showAttendances')->name('customers.show_attendances');
    Route::put('/{id}', 'update')->name('customers.update');
    Route::delete('/{id}', 'destroy')->name('customers.delete');
});

Route::controller(InstructorController::class)->prefix('instructors')->group(function () {
    Route::get('/', 'index')->name('instructors');
    Route::post('/', 'store')->name('instructors.store');
    Route::get('/{id}', 'show')->name('instructors.show');
    Route::put('/{id}', 'update')->name('instructors.update');
    Route::delete('/{id}', 'destroy')->name('instructors.delete');
});

Route::controller(SessionController::class)->prefix('sessions')->group(function () {
    Route::get('/', 'index')->name('sessions');
    Route::get('/{id}', 'show')->name('sessions.show');
});

Route::controller(FareController::class)->prefix('fares')->group(function () {
    Route::get('/', 'index')->name('fares');
    Route::post('/', 'store')->name('fares.store');
    Route::put('/{id}', 'update')->name('fares.update');
    Route::delete('/{id}', 'destroy')->name('fares.delete');
});

Route::controller(PaymentController::class)->prefix('payments')->group(function () {
    Route::get('/', 'index')->name('payments');
    Route::post('/', 'store')->name('payments.store');
    Route::patch('/{id}', 'update')->name('payments.update');
    Route::patch('/{id}/pay', 'pay')->name('payments.pay');
    Route::patch('/{id}/cancel', 'cancel')->name('payments.cancel');
});

Route::controller(ExerciseTypeController::class)->prefix('exercise-types')->group(function () {
    Route::get('/', 'index')->name('exercise_types');
    Route::post('/', 'store')->name('exercise_types.store');
    Route::put('/{id}', 'update')->name('exercise_types.update');
    Route::delete('/{id}', 'destroy')->name('exercise_types.delete');
});

Route::controller(PaymentTypeController::class)->prefix('payment-types')->group(function () {
    Route::get('/', 'index')->name('payment_types');
    Route::post('/', 'store')->name('payment_types.store');
    Route::put('/{id}', 'update')->name('payment_types.update');
    Route::delete('/{id}', 'destroy')->name('payment_types.delete');
});

Route::controller(TimeCheckController::class)->prefix('time-check')->group(function() {
    Route::get('/', 'index')->name('time_check');
    Route::post('/', 'store')->name('time_check.store');
    Route::patch('/', 'update')->name('time_check.update');
});
