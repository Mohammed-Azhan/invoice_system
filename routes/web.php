<?php

use App\Http\Controllers\invoiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\buddyController;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\inController;

Route::get('/', function () {
    return view('Gen_invoice');
});



Route::post('get', [inController::class, 'test']);
Route::post('generate', [inController::class, 'index']);
Route::get('a', [inController::class, 'View']);
