<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resources([
    'clients'=> ClientController::class,
    'invoices'=> InvoiceController::class,
    'orders'=> OrderController::class,
    'providers'=> ProviderController::class,
    'services'=> ServiceController::class,

    ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
