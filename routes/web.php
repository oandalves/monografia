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

Route::get('/dashboard/feirantes', function () {
    return view('painel.marketer.index');
})->middleware(['auth'])->name('dashboard.marketer');

Route::get('/dashboard/categorias', function () {
    return view('painel.category.index');
})->middleware(['auth'])->name('dashboard.category');

Route::get('/dashboard/produtos', function () {
    return view('painel.product.index');
})->middleware(['auth'])->name('dashboard.product');

Route::get('/dashboard/usuarios', function () {
    return view('painel.user.index');
})->middleware(['auth'])->name('dashboard.user');

require __DIR__.'/auth.php';
