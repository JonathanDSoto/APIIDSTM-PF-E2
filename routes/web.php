<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/test', function () {
    return view('test');
});

Route::controller(CustomerController::class)->prefix('/customers')->group(function () {
    Route::get('/', 'index')->name('customers');
    Route::post('/', 'store')->name('customers.store');
    Route::get('/{id}','show')->name('customers.show');
    Route::put('/{id}','update')->name('customers.update');
    Route::delete('/{id}','destroy')->name('customers.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
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
