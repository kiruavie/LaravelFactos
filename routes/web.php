<?php

<<<<<<< HEAD
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "home"])->name("home");

Route::get('/products/{id}', [ProductController::class, "index"])->name("products");

Route::get("/about", [AboutController::class, "about"])->name("about");
=======
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{id}', function($id){
    // echo 'Salut ' . $name . ' I have ' . $age . ' years old';
    return view("hello", ["user_id" => $id]);
});

Route::get("/about", function(){
    return view("about");
});
>>>>>>> 3920a34536051152583bcad9adcb479eb8ea96d3
