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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('painel.home');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/feiras', function () {
    return view('painel.fair.index');
})->middleware(['auth'])->name('dashboard.fair');

require __DIR__.'/auth.php';
