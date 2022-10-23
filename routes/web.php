<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/try', function() {
    Artisan::call('make:model nada');
});

Route::get('one', function () {
    return view('onepage');
});

Route::get('verify', function () {
    return view('VerifyCats');
});

Route::get('addCat','App\Http\Controllers\HomeController@AddCat')->name('addCat');

Route::get('LoadData/{category}','App\Http\Controllers\HomeController@LoadData')->name('LoadData');


Route::get('add', function () {
    return view('AddCategory');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('one', function () {
    return view('onepage');
});


Route::get('category_show/{category}','App\Http\Controllers\HomeController@index')->name('category');