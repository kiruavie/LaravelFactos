<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index(){
        $name = "Harlem";
        $price = 123;
        $products_list = ["pc", "macbook", "telephone", "tv", "harmoire"];

if(View::exists("products.products")){
    return View::make("products.products")
    ->with("name", $name)
    ->with("price", $price);
} else {
    return "page non trouvée";
}
        // return view('products.products', ["name" => $name, "price"=>$price, "product list"=>$products_list]);
    }
}
