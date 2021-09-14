<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FairController
};


Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth'])->group(function() {
    Route::prefix('painel')->group(function() {
        Route::name('painel.')->group(function() {
            Route::get('/', function () {
                return view('painel.home');
            })->name('index');
            
            Route::prefix('associacoes')->group(function() {
                Route::name('associacoes.')->group(function() {
                    Route::get('/', function () {
                        return view('painel.organization.index');
                    })->name('index');
                    Route::get('/novo', function () {
                        return view('painel.organization.novo');
                    })->name('novo');
                    Route::get('/editar', function () {
                        return view('painel.organization.editar');
                    })->name('editar');
                    Route::get('/visualizar', function () {
                        return view('painel.organization.visualizar');
                    })->name('visualizar');
                });
            });

            Route::get('/feiras', [FairController::class, 'index'])->name('feiras.index');
            Route::get('/feiras/novo', [FairController::class, 'create'])->name('feiras.novo');
            
            Route::get('/certificacoes', function () {
                return view('painel.certification.index');
            })->name('certificacoes');
            
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
