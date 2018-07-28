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

  /*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','HomeController@logout')->name('logout');
  
Auth::routes();

Route::group(['middleware' => 'language'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/luco', 'HomeController@luco')->name('luco');
    Route::get('/georgia', 'HomeController@georgia')->name('georgia');
    Route::get('/georgia_map', 'HomeController@georgia_map')->name('georgia_map');
    Route::get('/program', 'HomeController@program')->name('program');
    
    Route::get('/joiners', 'UsersController@joiners')->name('joiners');
    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/users/{user}', 'UsersController@show');
    Route::get('/profile/{user}/edit', 'UsersController@edit')->name('profile.edit');
    Route::patch('/users/{user}', 'UsersController@update');
    
    Route::get('/posts', 'PostsController@index')->name('posts');
    Route::get('/posts/{post}', 'PostsController@show');
    Route::get('/post/create', 'PostsController@create')->name('post.create');
    Route::post('/post', 'PostsController@store');
    Route::post('/posts/{post}/comments', 'CommentsController@store');
    
    Route::get('/trips', 'TripsController@index')->name('trips');
    Route::get('/trips/{trip}', 'TripsController@show');
});