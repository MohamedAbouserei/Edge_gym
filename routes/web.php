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
    return view('backend.header');
});

Auth::routes();
Route::get('/', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@home')->name('panel');
Route::group(['middleware' => 'auth'], function() {
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::resource('admin/news', 'NewsController');
    Route::resource('admin/offer', 'OfferController');
    Route::resource('admin/aboutus', 'AboutusController');
    Route::resource('admin/reservation', 'ReservationController');
    Route::resource('admin/program', 'ProgramController');
    Route::resource('admin/productpic', 'ProductpicController');
    Route::resource('admin/product', 'ProductController');
    Route::get('admin/dashboaradmin', 'DashboardController@index2');
    Route::get('admin/dashboarceo', 'DashboardController@index');
    Route::resource('admin/user', 'UserController');
    Route::get('admin', 'DashboardController@index');

});
Route::get('productinfo/{id}','HomeController@productinfo');
Route::get('showcategory','HomeController@showcatpro');
Route::get('/searchproduct','HomeController@searchproduct');


//Route::group(['middleware' => 'ceo'], function() {

//});
