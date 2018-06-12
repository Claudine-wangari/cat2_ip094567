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
    return view('Claudine Wangari.home');
});

Route::get('/Students',function () {
    return view('Claudine Wangari.studentsHome');
});

Route::get('/studentA',function () {
    return view('Claudine Wangari.students');
});

Route::get('/studentB','StudentController@show');

Route::post('/studentC','StudentController@register');


Route::get('/Fees',function () {
    return view('Claudine Wangari.feesHome');
});

Route::get('/feesA',function () {
    return view('Claudine Wangari.fees');
});

Route::post('/feesE','FeesController@record');

Route::get('/feesB',function () {
    return view('Claudine Wangari.Fees1');
});

Route::get('/feesC',function () {
    return view('Claudine Wangari.1Fees');
});

Route::any('/search','FeesController@showOne');

Route::get('/feesD','FeesController@showAll');






// Route::get('/Fees',function () {
//     return view('Claudine Wangari.fees');
// });
