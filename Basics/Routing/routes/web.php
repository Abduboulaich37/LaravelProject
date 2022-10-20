<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// first 
Route::get('/hello', function () {
    return 'Hello World';
});


// second
Route::get('/hola/{id}', function ($id) {
    return $id;
});

// third
Route::get('/hola/{id}/{name}', function ($id,$name) {
    return "$id<br>$name";
});



