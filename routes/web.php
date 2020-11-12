<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ResidentsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web
 routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function (){
    return view('welcome');
});

Route::get('cards/create', [CardsController::class,'create']);
Route::get('cards/{id}', [CardsController::class,'show'] )->where('id','[0-9]+');
Route::get('cards/{id}/edit', [CardsController::class,'edit'])->where('id','[0-9]+');
Route::get('cards', [CardsController::class,'index']);





Route::get('residents/create',[ResidentsController::class,'create']);
Route::get('residents/{id}', [ResidentsController::class,'show'])->where('id','[0-9]+');
Route::get('residents/{id}/edit', [ResidentsController::class,'edit'])->where('id','[0-9]+');
Route::get('residents',[ResidentsController::class,'index']);
