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

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin-menu', function () {
    return view('admin-menu');
});

Route::get('/salesman-menu', function () {
    return view('salesman-menu');
});

Route::get('/supervisor-menu', function () {
    return view('supervisor-menu');
});

Route::get('/manage-users', function () {
    return view('manage-users');
});