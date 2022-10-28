<?php

use Illuminate\Support\Facades\Route;

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

     Route::get('/', 
 'App\Http\Controllers\HomeController@index')->name("home.index");
    Route::get('/about', 
    'App\Http\Controllers\HomeController@about')->name("home.about");
    Route::get('/gallery', 
    'App\Http\Controllers\HomeController@gallery')->name("home.gallery");
    Route::get('/login', 'AuthController@login')->name('auth.login');
    Route::get('/signup', function(){
        return view('auth.signup');
    });
    Route::get('/post', 
    'App\Http\Controllers\PostController@index')->name("posts.index");
     Route::get('/post/{id}', 
    'App\Http\Controllers\PostController@info')->name("posts.info");

    Route::middleware('admin')->group(function () {    
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    route::get('/admin/post',
   'App\Http\Controllers\Admin\AdminPostController@index')->name('admin.post.index');
   Route::post('/admin/post/display', 
   'App\Http\Controllers\Admin\AdminPostController@display')->name("admin.post.display");
   Route::delete('/admin/post/{id}/delete', 
   'App\Http\Controllers\Admin\AdminPostController@delete')->name("admin.post.delete");
   Route::get('/admin/posts/{id}/edit', 
   'App\Http\Controllers\Admin\AdminPostController@edit')->name("admin.post.edit");
Route::put('/admin/posts/{id}/update', 
'App\Http\Controllers\Admin\AdminPostController@update')->name("admin.post.update");
});

Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.add');
Route::post('/reply/store', 'App\Http\Controllers\CommentController@replyStore')->name('reply.add');



    
 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
