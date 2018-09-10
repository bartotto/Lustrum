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
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Auth::routes();

Route::group(['middleware' => 'language'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/tamada', 'HomeController@tamada')->name('tamada');
    Route::get('/destination', 'HomeController@destination')->name('destination');
    Route::get('/destination_map', 'HomeController@destination_map')->name('destination_map');
    Route::get('/program', 'HomeController@program')->name('program');
    Route::get('/tripPhoto','HomeController@tripPhoto')->name('tripPhoto');
    Route::get('/luco', 'HomeController@luco')->name('luco');
    Route::get('/joiners', 'UsersController@joiners')->name('joiners');
    Route::get('/budget', 'AdminController@budget')->name('budget');
    Route::get('/admin', 'AdminController@index')->name('admin');
    
    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/users/{user}', 'UsersController@show');
    Route::get('/profile/{user}/edit', 'UsersController@edit')->name('profile.edit');
    Route::get('/profile/{user}/edit_partner', 'UsersController@edit_partner')->name('profile.edit_partner');
    Route::get('/profile/{user}/edit_other', 'UsersController@edit_other')->name('profile.edit_other');
    Route::patch('/users/{user}', 'UsersController@update');
    
    Route::resource('posts', 'PostsController');
    Route::post('/posts/{post}/comment', 'CommentsController@store');
    Route::resource('comments', 'CommentsController');
    
    Route::get('/trips', 'TripsController@index')->name('trips');
    Route::get('/trips/{trip}', 'TripsController@show');
    });