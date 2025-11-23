<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiteController;

Route::get('/', [Pages::class, "index"]);
Route::get("/guide", [Pages::class, "guide"]);

Route::get('/tool', [SiteController::class, 'tool'])->name('tool');


Route::get("/cadastro", [Pages::class, "cadastro"]);
Route::post("/cadastro", [UsuarioController::class, 'store'])->name('cadastro.store');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.do');
Route::post('/logout', function() {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/tool/painel/{id}', [SiteController::class, 'mostrar'])->name('painel.show');
