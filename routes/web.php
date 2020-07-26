<?php
// this project take from me a 2h 5m :D
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

Route::get('/', "task@Home");
Route::get('add', "task@add");
Route::get('pushNewTask', "task@pushNewTask");
Route::get('edit/{id}', "task@edit");
Route::get('update', "task@update");
Route::get('delete/{id}', "task@delete");
Route::get('later/{id}', "task@later");
Route::get('success/{id}', "task@success");
Route::get('failed/{id}', "task@failed");
Route::get('await/{id}', "task@await");
