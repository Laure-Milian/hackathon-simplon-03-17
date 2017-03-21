<?php

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
    return redirect('/admin');
});

Route::get('/admin', function(){
    return view('display.admin');
});
Route::post('/admin', 'AdminController@getAdminInfo');

Route::get('/{ville}', 'AdminController@displayCentre');

// Route::get('/prof', 'ProfController@getDates');
