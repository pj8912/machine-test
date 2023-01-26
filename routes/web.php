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
    return view('first');
});


// Route::post('/firstform','App\Http\Controllers\GetDetailsController@submitFirstForm');
Route::middleware(['web'])->post('/firstform', 'App\Http\Controllers\GetDetailsController@submitFirstForm')->name('firstform.submit');

Route::get('/second', function(){
	return view('second');
});
Route::get('/third', function(){
	return view('third');
});

Route::middleware(['web'])->post('/secondform', 'App\Http\Controllers\GetDetailsController@submitSecondForm')->name('secondform.submit');

// Route::post('/secondform', 'App\Http\Controllers\GetDetailsController@submitSecondForm')->name('secondform.submit');


// Route::post('/thirdform', 'App\Http\Controllers\GetDetailsController@submitThirdform')->name('thirdform.submit');

Route::middleware(['web'])->post('/thirdform', 'App\Http\Controllers\GetDetailsController@submitThirdform')->name('thirdform.submit');




Route::get('/thankyou',function(){
    view('thankyou');
});
