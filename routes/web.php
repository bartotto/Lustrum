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
    Route::get('/logo', 'HomeController@logo')->name('logo');
    Route::get('/destination', 'HomeController@destination')->name('destination');
    Route::get('/destination_map', 'HomeController@destination_map')->name('destination_map');
    Route::get('/program', 'HomeController@program')->name('program');
    Route::get('/tripPhoto','HomeController@tripPhoto')->name('tripPhoto');
    Route::get('/luco', 'HomeController@luco')->name('luco');
    Route::get('/joiners/{trip}', 'UsersController@joiners')->name('joiners');
    Route::get('/joiners/{user}', 'UsersController@show');
    Route::get('/budget', 'AdminController@budget')->name('budget');
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/administrator', 'AdministratorController@index')->name('administrator');
    Route::get('/administrator/{user}', 'AdministratorController@show');
    Route::get('/role/{role}', 'AdministratorController@show_for_role');
    
    Route::get('/users/{user}', 'UsersController@show');
    Route::get('/users', 'UsersController@index')->name('club');
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