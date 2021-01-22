<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [StudentController::class, 'index']);
Route::get('/create', [StudentController::class, 'create']);
Route::post('/', [StudentController::class, 'store']);
Route::get('/edit/{student}', [StudentController::class, 'edit']);
Route::match(['put', 'patch'], '/update/{student}', [StudentController::class, 'update']);
Route::delete('/{student}', [StudentController::class, 'destroy']);
