<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::get('begin', [StudentsController::class, 'begin']);
Route::post('enter-grades', [StudentsController::class, 'enterAttempts']);
Route::post('compute-grades', [StudentsController::class, 'computeGrade']);
