<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('cek', 'UserController@cek');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login-mobile', 'AuthMobileController@loginMobile');
Route::post('register-mobile', 'AuthMobileController@registerMobile');

Route::get('dictionaries', 'DictionaryController@index');

Route::resource('notes', 'NoteController');
Route::get('notes-by-user/{user_id}', 'NoteController@getNotesByUser');

Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');
Route::get('youtube-videos/{user_id}', 'YoutubeVideoController@index');
Route::get('liked-videos/{user_id}', 'YoutubeVideoController@getLikedVideos');
Route::post('like-video', 'YoutubeVideoController@likeVideo');

Route::resource('employees', 'EmployeeController');
// Route::get('employees', 'EmployeeController@index');
// Route::post('employee', 'EmployeeController@store');
