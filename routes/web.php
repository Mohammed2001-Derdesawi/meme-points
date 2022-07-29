<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Point\PointController;

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

Route::get('/',[PointController::class,'index'])->name('points.index');
Route::post('/points',[PointController::class,'calculate'])->name('points.create');
