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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/index', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
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

Route::get('/salesman-create-lead', function () {
    return view('salesman-create-lead');
});


Route::get('/create-lead', function () {
    return view('create-lead');
});

Route::get('/setup-system', function () {
    return view('setup-system');
});

Route::get('/view-lead', function () {
    return view('view-lead');
});

Route::get('/view-lead-sup', function () {
    return view('view-lead-sup');
});

Route::get('/view-lead-salesman', function () {
    return view('view-lead-salesman');
});

Route::get('/view-new-leads', function () {
    return view('view-new-leads');
});

Route::get('/lead', function () {
    return view('lead');
});

Route::get('/stats', function () {
    return view('stats');
});

Route::get('/create-user', function () {
    return view('create-user');
});