<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "home"])->name("home");

Route::get('/products/{id}', [ProductController::class, "index"])->name("products");

Route::get("/about", [AboutController::class, "about"])->name("about");