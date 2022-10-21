<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionsController;

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

Route::get('/index', [PromotionsController::class, 'select']);