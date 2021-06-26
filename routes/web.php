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

Route::get('/','HomeController@logout')->name('logout');

// Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.submit');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register.submit');

// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset.submit');

Auth::routes();

Route::group(['middleware' => 'language'], function () {
    Route::view('home', 'home');
    Route::view('logo', 'logo');
    Route::view('destination', 'destination');
    Route::view('destination_map', 'destination_map');
    Route::view('program', 'program');
    Route::view('photos','photos');
    Route::view('video','video');
    Route::view('luco', 'luco');
    Route::get('joiners/{trip}', 'UsersController@joiners');
    Route::get('admin', 'AdminController@index');
    Route::get('budget', 'AdminController@budget');
    Route::get('administrator', 'AdministratorController@index');
    Route::get('administrator/{user}', 'AdministratorController@show');
    Route::get('role/{role}', 'AdministratorController@show_for_role');
    
    Route::get('/users/{user}', 'UsersController@show')->name('users.show');
    Route::get('/users.index', 'UsersController@index');
    Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::get('/users/{user}/edit_partner', 'UsersController@edit_partner')->name('users.edit_partner');
    Route::get('/users/{user}/edit_other', 'UsersController@edit_other')->name('users.edit_other');
    Route::patch('/users/{user}', 'UsersController@update');
    Route::patch('/users/partner/{user}', 'UsersController@update_partner');
    Route::patch('/users/other/{user}', 'UsersController@update_other');
    
    Route::resource('posts', 'PostsController');
    Route::post('/posts/{post}/comment', 'CommentsController@store');
    Route::resource('comments', 'CommentsController');
    
    Route::get('/trips', 'TripsController@index')->name('trips');
    Route::get('/trips/{trip}', 'TripsController@show');
});