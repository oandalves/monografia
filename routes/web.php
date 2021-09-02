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

Route::get('/painel', function () {
    return view('painel.home');
})->middleware(['auth'])->name('painel');

Route::get('/painel/associacoes', function () {
    return view('painel.organization.index');
})->middleware(['auth'])->name('painel.associacoes');

Route::get('/painel/feiras', function () {
    return view('painel.fair.index');
})->middleware(['auth'])->name('painel.feiras');

Route::get('/painel/certificacoes', function () {
    return view('painel.certification.index');
})->middleware(['auth'])->name('painel.certificacoes');

Route::get('/painel/feirantes', function () {
    return view('painel.marketer.index');
})->middleware(['auth'])->name('painel.feirantes');

Route::get('/painel/categorias', function () {
    return view('painel.category.index');
})->middleware(['auth'])->name('painel.categorias');

Route::get('/painel/produtos', function () {
    return view('painel.product.index');
})->middleware(['auth'])->name('painel.produtos');

Route::get('/painel/usuarios', function () {
    return view('painel.user.index');
})->middleware(['auth'])->name('painel.usuarios');

Route::get('/painel/perfil', function () {
    return view('painel.profile.index');
})->middleware(['auth'])->name('painel.perfil');

require __DIR__.'/auth.php';
