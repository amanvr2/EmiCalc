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
    return view('home');
});

Route::get('/emi-calc', function () {
    return view('emiCalculator');
});

Route::post('/emi-calc/submit','Emicontroller@submit');



Route::get('/loan-eligibility', function () {
    return view('loaneligibility');
});

Route::post('/loan-eligibility/result','Loancontroller@loaneligibility');

Route::get('/sign-up', function () {
    return view('signup');
});

Route::post('/sign-up/insert','RegisterController@insert');   

Route::get('/log-in', function () {
    return view('login');
});

Route::post('/log-in/chat','LoginController@login');   


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/log-in/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');


