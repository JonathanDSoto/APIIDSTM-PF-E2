<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

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

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/fares', function () {
        return view('fares');
    });

    Route::get('/modals', function () {
        return view('modals');
    });

    Route::get('/sessions', function () {
        return view('sessions/index');
    });

    Route::get('/session', function () {
        return view('sessions/show');
    });

    Route::get('/payments', function () {
        return view('payments/index');
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
