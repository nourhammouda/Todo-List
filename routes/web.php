<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController ;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/after_login', [App\Http\Controllers\AfterLogin::class, 'returnTasks'])->name('after_login');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[TodoListController::class, 'index'])->name('dashboard');

    Route::get('/add',[App\Http\Controllers\TodoListController::class, 'add'])->name('add');
    Route::post('/create',[App\Http\Controllers\TodoListController::class, 'create'])->name('create');
    
    Route::get('/edit/{task}', [App\Http\Controllers\TodoListController::class, 'edit'])->name('edit');
    Route::post('/update/{task}', [App\Http\Controllers\TodoListController::class, 'update'])->name('update');

    Route::post('/delete/{task}', [App\Http\Controllers\TodoListController::class, 'delete'])->name('delete');
});