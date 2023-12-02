<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExerciseTypeController;
use App\Http\Controllers\FareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentTypeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::controller(HomeController::class)->prefix('/')->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(CustomerController::class)->prefix('/customers')->group(function () {
    Route::get('/', 'index')->name('customers');
    Route::post('/', 'store')->name('customers.store');
    Route::get('/{id}', 'show')->name('customers.show');
    Route::put('/{id}', 'update')->name('customers.update');
    Route::delete('/{id}', 'destroy')->name('customers.delete');
});

Route::controller(InstructorController::class)->prefix('/instructors')->group(function () {
    Route::get('/', 'index')->name('instructors');
    Route::post('/', 'store')->name('instructors.store');
    Route::get('/{id}', 'show')->name('instructors.show');
    Route::put('/{id}', 'update')->name('instructors.update');
    Route::delete('/{id}', 'destroy')->name('instructors.delete');
});

Route::controller(FareController::class)->prefix('/fares')->group(function () {
    Route::get('/', 'index')->name('fares');
    Route::post('/', 'store')->name('fares.store');
    Route::put('/{id}', 'update')->name('fares.update');
    Route::delete('/{id}', 'destroy')->name('fares.delete');
});

Route::controller(PaymentController::class)->prefix('/payments')->group(function () {
    Route::get('/', 'index')->name('payments');
    Route::post('/', 'store')->name('payments.store');
    Route::patch('/{id}', 'update')->name('payments.update');
    Route::patch('/pay/{id}', 'pay')->name('payments.pay');
    Route::patch('/cancel/{id}', 'cancel')->name('payments.cancel');
});

Route::controller(ExerciseTypeController::class)->prefix('/exercise-types')->group(function () {
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

Route::middleware('auth')->group(function () {
    Route::get('/modals', function () {
        return view('modals');
    });

    Route::get('/sessions', function () {
        return view('sessions/index');
    });

    Route::get('/session', function () {
        return view('sessions/show');
    });

    Route::get('/payment', function () {
        return view('payments/show');
    });

    Route::get('/checker', function () {
        return view('checker');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
});
