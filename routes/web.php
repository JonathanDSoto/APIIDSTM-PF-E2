<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/customers', function () {
        return view('customers');
    });

    Route::get('/customer', function () {
        return view('customer');
    });

    Route::get('/modals', function () {
        return view('modalEditarCliente');
    });

    Route::get('/prices', function () {
        return view('prices');
    });
});
