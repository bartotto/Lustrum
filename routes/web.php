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
    Route::get('/destination', 'HomeController@destination')->name('destination');
    Route::get('/preparations', 'HomeController@preparations')->name('preparations');
    Route::get('/underway', 'HomeController@underway')->name('underway');
    Route::get('/luco', 'HomeController@luco')->name('luco');
    Route::get('/joiners', 'UsersController@joiners')->name('joiners');
    Route::get('/admin', 'AdminController@index')->name('admin');
    
    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/users/{user}', 'UsersController@show');
    Route::get('/profile/{user}/edit', 'UsersController@edit')->name('profile.edit');
    Route::get('/profile/{user}/edit_partner', 'UsersController@edit_partner')->name('profile.edit_partner');
    Route::get('/strandborrel', 'UsersController@strandborrel')->name('strandborrel');    
    Route::patch('/users/{user}', 'UsersController@update');
    Route::post('/users/{user}/strandborrel', 'AdminController@update_strandborrel');
    
    Route::get('/posts', 'PostsController@index')->name('posts');
    Route::get('/posts/{post}', 'PostsController@show');
    Route::get('/post/create', 'PostsController@create')->name('post.create');
    Route::post('/post', 'PostsController@store');
    Route::post('/posts/{post}/comment', 'CommentsController@store');
    
    Route::get('/trips', 'TripsController@index')->name('trips');
    Route::get('/trips/{trip}', 'TripsController@show');
    
    Route::get('/kenya',       'HomeController@kenya')->name('kenya');
    Route::get('/lappland',    'HomeController@lappland')->name('lappland');
    Route::get('/cameroun',    'HomeController@cameroun')->name('cameroun');
    Route::get('/oman',        'HomeController@oman')->name('oman');
    Route::get('/carpathians', 'HomeController@carpathians')->name('carpathians');
    Route::get('/dalarna',     'HomeController@dalarna')->name('dalarna');
    Route::get('/georgia',     'HomeController@georgia')->name('georgia');
});