<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::middleware('auth')->group(function() {

    Route::resource('/todo', 'ToDoController');

    Route::put('/todos/{todo}/complete', 'ToDoController@complete')->name('todo.complete');

    Route::delete('/todos/{todo}/incomplete', 'ToDoController@incomplete')->name('todo.incomplete');

//});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
