<?php

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