<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/tickets', [App\Http\Controllers\TicketController::class, 'index'])->name('index');
Route::get('/tickets', [App\Http\Controllers\TicketController::class, 'create'])->name('create');
Route::get('/tickets/{id}', [App\Http\Controllers\TicketController::class, 'show'])->name('ticket.show');
Route::post('/tickets/save', [App\Http\Controllers\TicketController::class, 'store'])->name('ticket.store');
