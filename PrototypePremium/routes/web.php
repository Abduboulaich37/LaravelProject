<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\SearchController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', [PromotionsController::class, 'Add'])->name('Add');

Route::Post('/insert', [PromotionsController::class, 'Insert'])->name('insert');

Route::get('/index', [PromotionsController::class, 'select'])->name('index');

//--------------------------Standard Route--------------------------------------
//Route for retrieving data 
Route::get('Edit/{id}', [PromotionsController::class, 'edit']);
//Route for updating data 
Route::post('update/{id}', [PromotionsController::class, 'update']);
//Route for deleting data 
Route::get('Delete/{id}', [PromotionsController::class, 'delete']);
//Route for searching data 
Route::get('search/{name}',[SearchController::class,'search']);
Route::get('search',[SearchController::class,'search']);
