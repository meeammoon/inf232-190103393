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
Route::get('/person/{f_name}/{l_name}', function ($f_name, $l_name) {
    return "Person: ".$f_name." ".$l_name;
});

Route::get('/student_id/{id}', "StudentController@showName");

Route::get('/student_date/{date}', "StudentController@showBirthday");

Route::get('/student_age/{age}', "StudentController@showAge");

/*
srdtyjkddfgsjakj
fghsjdhcjn
kfjdvnlskv
*/ 