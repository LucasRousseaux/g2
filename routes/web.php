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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/doctors', 'DoctorController');

Route::resource('/recommendations', 'RecommendationController');

Route::get('/doctor/{id}', 'DoctorController@mostrarDoctor');

Route::get('/prueba',function(){
    $users = App\Coment::all();
    foreach ($users as $user) {
        echo $user->coment;
    }
});

Route::resource('users','UserController');
