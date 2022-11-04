<?php

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
Route::get('/home', function () {
    return "view('index', ";
});
Route::get('/pippo', function () {
    return "pippo";
});
Route::get('/paperino', function () {
    return "paperino";
});
Route::get('/login', function () {
    return view('login');
});
