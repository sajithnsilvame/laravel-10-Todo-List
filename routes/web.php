<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Home 
Route::get('/', [HomeController::class, 'index']);

//Todo
Route::get('/todo-list', [TodoController::class, 'todo']);
Route::post('/add-task', [TodoController::class, 'add_task']);
Route::get('/edit-task/{id}', [TodoController::class, 'edit_task']);
Route::post('/update-task/{id}', [TodoController::class, 'update_task']);
Route::get('/remove-task/{id}', [TodoController::class, 'remove_task']);
Route::get('/cancel', [TodoController::class, 'cancel']);
Route::get('/mark-as-completed/{id}', [TodoController::class, 'mark_as_completed']);



