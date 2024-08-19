<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ... ";
    $author = "Developed by: Evelyn Zapata";
    return view('home.about')->with("title", $data1)
    ->with("subtitle", $data2)
    ->with("description", $description)
    ->with("author", $author);
})->name("home.about");
// Activity 1: 
// The route for the about section should not contain data definitions.
// Instead, it should link to a controller where that data is defined.
// Also, the variables data1 and data2 should be replaced with more meaningful names.

// Activity 2:
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");