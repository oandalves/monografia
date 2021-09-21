<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FairController,
    MarketerController
};


Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth'])->group(function() {
    Route::prefix('/painel')->group(function() {
        Route::name('painel.')->group(function() {

            Route::prefix('/feiras')->group(function() {
                Route::name('feiras.')->group(function() {
                    Route::get('/', [FairController::class, 'index'])->name('index');
                    Route::get('/novo', [FairController::class, 'create'])->name('create');
                    Route::post('/salvar', [FairController::class, 'store'])->name('store');
                    Route::get('/visualiza/{id}', [FairController::class, 'show'])->name('show');
                    Route::delete('/excluir/{id}', [FairController::class, 'destroy'])->name('destroy');
                    Route::get('/edita/{id}', [FairController::class, 'edit'])->name('edit');
                    Route::put('/atualizar/{id}', [FairController::class, 'update'])->name('update');
                    Route::post('/pesquisar', [FairController::class, 'search'])->name('search');
                });
            });

            Route::prefix('/feirantes')->group(function() {
                Route::name('feirantes.')->group(function() {
                    Route::get('/', [MarketerController::class, 'index'])->name('index');
                    Route::get('/novo', [MarketerController::class, 'create'])->name('create');
                    Route::post('/salvar', [MarketerController::class, 'store'])->name('store');
                    Route::get('/visualiza/{id}', [MarketerController::class, 'show'])->name('show');
                    Route::delete('/excluir/{id}', [MarketerController::class, 'destroy'])->name('destroy');
                    Route::get('/edita/{id}', [MarketerController::class, 'edit'])->name('edit');
                    Route::put('/atualizar/{id}', [MarketerController::class, 'update'])->name('update');
                    Route::post('/pesquisar', [MarketerController::class, 'search'])->name('search');
                });
            });



            Route::get('/', function () {
                return view('painel.home');
            })->name('index');
                        
            
            Route::get('/feirantes', function () {
                return view('painel.marketer.index');
            })->name('feirantes');
            
            Route::get('/categorias', function () {
                return view('painel.category.index');
            })->name('.categorias');
            
            Route::get('/produtos', function () {
                return view('painel.product.index');
            })->name('produtos');
            
            Route::get('/usuarios', function () {
                return view('painel.user.index');
            })->name('usuarios');
            
            Route::get('/perfil', function () {
                return view('painel.profile.index');
            })->name('perfil');
        });
    });
});



require __DIR__.'/auth.php';
