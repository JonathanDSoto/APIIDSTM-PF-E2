<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::controller(CustomerController::class)->prefix('/customers')->group(function () {
        Route::get('/', 'index')->name('customers.index');
        Route::get('/{id}','show')->name('customers.show');
    });

    Route::get('/fares', function () {
        return view('fares');
    });

    Route::get('/modals', function () {
        return view('modalEditarCliente');
    });

    Route::get('/prices', function () {
        return view('prices');
    });
});
