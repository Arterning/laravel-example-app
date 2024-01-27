<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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


Route::get('tasks', function() {
    return view('tasks');
});



Route::get('/hello', function () { 
    echo "Php is the best programming language!";
    return 'Hello, World!'; 
});


Route::get('user/{id}', function ($id) {
    return "用户ID: " . $id;
});

Route::resource('tasks', 'App\Http\Controllers\TaskController', ['except' => ['create', 'edit']]);

