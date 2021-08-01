<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/tasks')->name('tasks.')->group(function() {
    Route::get('/', [TaskController::class, 'index'])->name('index');
    Route::get('/show/{id}', [TaskController::class, 'show'])->name('show');
    Route::post('/create', [TaskController::class, 'store'])->name('store');
    Route::put('/update/{id}', [TaskController::class, 'update'])->name('update');
    Route::delete('/remove/{id}', [TaskController::class, 'destroy'])->name('destroy');
});