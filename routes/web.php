<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/me', function(){
//     return "Hello, this is me!";
// });

// Route::get('/john', function(){
//     return response("John Doe");
// });

Route::get('/me',[DemoController::class,'me']);
// Route::get('/greet',[DemoController::class,'generalGreet']);
Route::get('/greet/{name?}/{title?}',[DemoController::class,'greet']);
Route::get('/products/print',[DemoController::class,'printProduct']);
Route::get('/person',[DemoController::class,'person']);


// homepage
Route::get("/",[HomeController::class,'homepage']);
// Route::post("/",[HomeController::class,'homepage']);

// Route::match(['get','post'],'/',[HomeController::class,'homepage']);

Route::post("/",[HomeController::class,'homepagePost']);

// Route::view("/","demo.index");