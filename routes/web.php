<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDKaryawanController;

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



Route::get('/', [CRUDKaryawanController::class, 'index']);
Route::get('/read', [CRUDKaryawanController::class, 'read']);
Route::get('/create', [CRUDKaryawanController::class, 'create']);
Route::post('/store', [CRUDKaryawanController::class, 'store']);
Route::post('/update/{id}', [CRUDKaryawanController::class, 'update']);
Route::get('/show/{id}', [CRUDKaryawanController::class, 'show']);
