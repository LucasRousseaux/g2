<?php
use App\Recommendation;

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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/doctors', 'DoctorController');

Route::resource('/recommendations', 'RecommendationController');

Route::get('/prueba',function(){
  $recommendation = DB::table('doctors')->where('user_id', '=', 5 )->get();

  dd($recommendation);

});

// Route::resource('/search/{specialty},{location}', 'SearchController');

Route::get('/search', 'SearchController@index');

Route::resource('users','UserController');

Route::resource('patients','PatientController');
