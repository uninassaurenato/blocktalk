<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;

// Lembrar de adicionar o use conectando a qualquer controlador adicional, e é case sensitive :^p

// Endereços

Route::get('/', [Pages::class, "index"]); // << tela inicial
Route::get("/guide", [Pages::class, "guide"]); // << tela de guia
Route::get("/tool", [Pages::class, "tool"]); // << tela da ferramenta
