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

Route::get('/about-us', function () {
    return view('layouts.publicHome.aboutUs');
})->name('about-us');

Route::get('/tax-services', function () {
    return view('layouts.publicHome.taxServices');
})->name('tax-services');

Route::get('/buisness-services', function () {
    return view('layouts.publicHome.buisnessServices');
})->name('buisness-services');

Route::get('/small-buisness-accounting', function () {
    return view('layouts.publicHome.smallBuisnessAccounting');
})->name('small-buisness-accounting');

Route::get('/strategic-planning', function () {
    return view('layouts.publicHome.strategicPlanning');
})->name('strategic-planning');

Route::get('/payroll', function () {
    return view('layouts.publicHome.payroll');
})->name('payroll');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('{path}',"HomeController@index")->where( 'path', '[-a-z0-9_\s]+');