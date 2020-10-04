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

Route::get ('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/index', function () {
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

Route::middleware(['auth'])->group(function() {
    Route::prefix('/users')->group(function() {
        Route::get   ('/create/{role}', 'UserController@create')->name('users.create');
        Route::post  ('/create/{role}', 'UserController@store')->name('users.store');
        Route::get   ('/{role}/{user}', 'UserController@show')->name('users.show');
        Route::get   ('/{role}/{user}/edit', 'UserController@edit')->name('users.edit');
        Route::put   ('/{role}/{user}', 'UserController@update')->name('users.update');
        Route::delete('/{role}/{user}', 'UserController@destroy')->name('users.destroy');
        Route::get   ('/', 'UserController@index')->name('users.index');
    });
});

Route::get('/salesman-create-lead', function () {
    return view('salesman-create-lead');
});

Route::post    ('/leads/{lead}/qualities', 'LeadController@store_qualities')->name("lead.qualities.store");
Route::resource('/leads', 'LeadController');

Route::resource('/setup-system', 'SetupController');

Route::resource('/budgets', 'BudgetController');

Route::resource('/negotiations', 'NegotiationController');

Route::resource('/closings', 'ClosingController');

Route::resource('/qualities', 'QualityCriteriaController');

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

Route::get('/stats', function () {
    return view('stats');
});