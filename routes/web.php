<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CategoryController,
    FairController,
    MarketerController,
    ProductController,
    UserController
};


Route::get('/', function () {
    return view('home');
});

Route::get('/feiras', function () {
    return view('site.feiras');
})->name('feiras');

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

            Route::prefix('/categorias')->group(function() {
                Route::name('categorias.')->group(function() {
                    Route::get('/', [CategoryController::class, 'index'])->name('index');
                    Route::get('/novo', [CategoryController::class, 'create'])->name('create');
                    Route::post('/salvar', [CategoryController::class, 'store'])->name('store');
                    Route::get('/visualiza/{id}', [CategoryController::class, 'show'])->name('show');
                    Route::delete('/excluir/{id}', [CategoryController::class, 'destroy'])->name('destroy');
                    Route::get('/edita/{id}', [CategoryController::class, 'edit'])->name('edit');
                    Route::put('/atualizar/{id}', [CategoryController::class, 'update'])->name('update');
                    Route::post('/pesquisar', [CategoryController::class, 'search'])->name('search');
                });
            });

            Route::prefix('/produtos')->group(function() {
                Route::name('produtos.')->group(function() {
                    Route::get('/', [ProductController::class, 'index'])->name('index');
                    Route::get('/novo', [ProductController::class, 'create'])->name('create');
                    Route::post('/salvar', [ProductController::class, 'store'])->name('store');
                    Route::get('/visualiza/{id}', [ProductController::class, 'show'])->name('show');
                    Route::delete('/excluir/{id}', [ProductController::class, 'destroy'])->name('destroy');
                    Route::get('/edita/{id}', [ProductController::class, 'edit'])->name('edit');
                    Route::put('/atualizar/{id}', [ProductController::class, 'update'])->name('update');
                    Route::post('/pesquisar', [ProductController::class, 'search'])->name('search');
                });
            });

            Route::get('/', function () {
                return view('painel.home');
            })->name('index');
            
            Route::prefix('/usuarios')->group(function() {
                Route::name('usuarios.')->group(function() {
                    Route::get('/', [UserController::class, 'index'])->name('index');
                    Route::get('/novo', [UserController::class, 'create'])->name('create');
                    Route::post('/salvar', [UserController::class, 'store'])->name('store');
                    Route::get('/visualiza/{id}', [UserController::class, 'show'])->name('show');
                    Route::delete('/excluir/{id}', [UserController::class, 'destroy'])->name('destroy');
                    Route::get('/edita/{id}', [UserController::class, 'edit'])->name('edit');
                    Route::put('/atualizar/{id}', [UserController::class, 'update'])->name('update');
                    Route::post('/pesquisar', [UserController::class, 'search'])->name('search');
                });
            });
            
            Route::get('/perfil', function () {
                return view('painel.profile.index');
            })->name('perfil');
        });
    });
});



require __DIR__.'/auth.php';
