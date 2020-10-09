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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function() {
    
    Route::group (['middleware' => ['role:salesman|admin']], function () {
        Route::get   ('/leads/new', 'LeadController@new')->name('leads.new');
        Route::post  ('/leads', 'LeadController@store')->name("leads.store");
        Route::get   ('/leads/create', 'LeadController@create')->name("leads.create");
    });

    Route::group (['middleware' => ['role:salesman|supervisor|admin']], function () {
        Route::post  ('/leads/{lead}/qualities', 'LeadController@store_qualities')->name("lead.qualities.store");
        Route::get   ('/leads', 'LeadController@index')->name("leads.index");
        Route::get   ('/leads/{lead}', 'LeadController@show')->name("leads.show");
        Route::put   ('/users/{role}/{user}', 'UserController@update')->name('users.update');
        Route::post  ('/budgets', 'BudgetController@store')->name("budgets.store");
        Route::put   ('/budgets/{budget}', 'BudgetController@update')->name("budgets.update");
        Route::post  ('/negotiations', 'NegotiationController@store')->name("negotiations.store");
        Route::put   ('/negotiations/{negotiation}', 'NegotiationController@update')->name("negotiations.update");
        Route::post  ('/closings', 'ClosingController@store')->name("closings.store");
        Route::put   ('/closings/{closing}', 'ClosingController@update')->name("closings.update");
    });

    Route::group (['middleware' => ['role:admin']], function () {
        Route::get   ('/users/create/{role}', 'UserController@create')->name('users.create');
        Route::post  ('/users/create/{role}', 'UserController@store')->name('users.store');
        Route::get   ('/users/{role}/{user}', 'UserController@show')->name('users.show');
        Route::get   ('/users/{role}/{user}/edit', 'UserController@edit')->name('users.edit');
        Route::delete('/users/{role}/{user}', 'UserController@destroy')->name('users.destroy');
        Route::get   ('/users', 'UserController@index')->name('users.index');
        
        Route::delete('/leads/{lead}', 'LeadController@destroy')->name("leads.destroy");
        Route::put   ('/leads/{lead}', 'LeadController@update')->name("leads.update");
        Route::get   ('/leads/{lead}/edit', 'LeadController@edit')->name("leads.edit");

        Route::get   ('/setup', 'SetupController@index')->name("setup.index");
        Route::post  ('/setup', 'SetupController@store')->name("setup.store");
        Route::get   ('/setup/create', 'SetupController@create')->name("setup.create");
        Route::delete('/setup/{setup}', 'SetupController@destroy')->name("setup.destroy");
        Route::get   ('/setup/{setup}', 'SetupController@show')->name("setup.show");
        Route::put   ('/setup/{setup}', 'SetupController@update')->name("setup.update");
        Route::get   ('/setup/{setup}/edit', 'SetupController@edit')->name("setup.edit");

        Route::get   ('/budgets', 'BudgetController@index')->name("budgets.index");
        Route::get   ('/budgets/create', 'BudgetController@create')->name("budgets.create");
        Route::delete('/budgets/{budget}', 'BudgetController@destroy')->name("budgets.destroy");
        Route::get   ('/budgets/{budget}', 'BudgetController@show')->name("budgets.show");
        Route::get   ('/budgets/{budget}/edit', 'BudgetController@edit')->name("budgets.edit");

        Route::get   ('/negotiations', 'NegotiationController@index')->name("negotiations.index");
        Route::get   ('/negotiations/create', 'NegotiationController@create')->name("negotiations.create");
        Route::delete('/negotiations/{negotiation}', 'NegotiationController@destroy')->name("negotiations.destroy");
        Route::get   ('/negotiations/{negotiation}', 'NegotiationController@show')->name("negotiations.show");
        Route::get   ('/negotiations/{negotiation}/edit', 'NegotiationController@edit')->name("negotiations.edit");

        Route::get   ('/closings', 'ClosingController@index')->name("closings.index");
        Route::get   ('/closings/create', 'ClosingController@create')->name("closings.create");
        Route::delete('/closings/{closing}', 'ClosingController@destroy')->name("closings.destroy");
        Route::get   ('/closings/{closing}', 'ClosingController@show')->name("closings.show");
        Route::get   ('/closings/{closing}/edit', 'ClosingController@edit')->name("closings.edit");

        Route::get   ('/qualities', 'QualityCriteriaController@index')->name("qualities.index");
        Route::post  ('/qualities', 'QualityCriteriaController@store')->name("qualities.store");
        Route::get   ('/qualities/create', 'QualityCriteriaController@create')->name("qualities.create");
        Route::delete('/qualities/{quality}', 'QualityCriteriaController@destroy')->name("qualities.destroy");
        Route::get   ('/qualities/{quality}', 'QualityCriteriaController@show')->name("qualities.show");
        Route::put   ('/qualities/{quality}', 'QualityCriteriaController@update')->name("qualities.update");
        Route::get   ('/qualities/{quality}/edit', 'QualityCriteriaController@edit')->name("qualities.edit");

        Route::get   ('/stats', 'StatController@index')->name("stats.index");
        Route::post  ('/stats', 'StatController@store')->name("stats.store");
        Route::get   ('/stats/create', 'StatController@create')->name("stats.create");
        Route::delete('/stats/{stat}', 'StatController@destroy')->name("stats.destroy");
        Route::get   ('/stats/{stat}', 'StatController@show')->name("stats.show");
        Route::put   ('/stats/{stat}', 'StatController@update')->name("stats.update");
        Route::get   ('/stats/{stat}/edit', 'StatController@edit')->name("stats.edit");

        Route::get   ('/origins', 'OriginController@index')->name("origins.index");
        Route::post  ('/origins', 'OriginController@store')->name("origins.store");
        Route::get   ('/origins/create', 'OriginController@create')->name("origins.create");
        Route::delete('/origins/{origin}', 'OriginController@destroy')->name("origins.destroy");
        Route::get   ('/origins/{origin}', 'OriginController@show')->name("origins.show");
        Route::put   ('/origins/{origin}', 'OriginController@update')->name("origins.update");
        Route::get   ('/origins/{origin}/edit', 'OriginController@edit')->name("origins.edit");

        Route::get   ('/categories', 'CategoryController@index')->name("categories.index");
        Route::post  ('/categories', 'CategoryController@store')->name("categories.store");
        Route::get   ('/categories/create', 'CategoryController@create')->name("categories.create");
        Route::delete('/categories/{category}', 'CategoryController@destroy')->name("categories.destroy");
        Route::get   ('/categories/{category}', 'CategoryController@show')->name("categories.show");
        Route::put   ('/categories/{category}', 'CategoryController@update')->name("categories.update");
        Route::get   ('/categories/{category}/edit', 'CategoryController@edit')->name("categories.edit");
    });
});

