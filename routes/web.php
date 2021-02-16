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

// Route::get('/', function () {
//     $threads=App\Thread::latest()->paginate(5);
//     return view('welcome',compact('threads'));
// });

Route::get('/thread', 'ThreadController@index');

Auth::routes();

Route::get('/', 'HomeController@index');


Route::post('/thread/mark-as-solution', 'ThreadController@markAsSolution')->name('markAsSolution');
Route::resource('/thread', 'ThreadController');
Route::get('/threads/search', 'ThreadController@searchMe')->name('my_search');



Route::resource('comment', 'CommentController', ['only' => ['update', 'destroy']]);

Route::post('comment/create/{thread}', 'CommentController@addThreadComment')->name('threadcomment.store');

Route::post('reply/create/{comment}', 'CommentController@addReplyComment')->name('replycomment.store');


Route::post('comment/like', 'LikeController@toggleLike')->name('toggleLike');

Route::get('/user/profile/{user}', 'UserProfileController@index')->name('user_profile')->middleware('auth');
Route::get('/user/profile/{user}/edit', 'UserProfileController@editUser')->name('user_profile_edit')->middleware('auth');

// Route::get('/markAsRead',function(){
//     auth()->user()->unreadNotifications->markAsRead();
// });

Route::resource('/tag', 'TagController');

// Route::group(['middleware' => ['admin']], function () {
//     Route::get('/home', 'HomeController@index');
// });

Route::resource('/admin', 'AdminController');
