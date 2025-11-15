<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;

Route::get('/', [Pages::class, "index"]);
Route::get("/guide", [Pages::class, "guide"]);
Route::get("/tool", [Pages::class, "tool"]);
