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
    return view('welcome');
});

//Admin Resources

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//this is to make route for the post
Route::get('/post/{id}',['as'=>'home.post','uses'=>'PostsController@post']);

Route::get('/category/{id}',['as'=>'home.category','uses'=>'CategoriesController@category']);




Route::group(['middleware'=>'admin'],function (){

    Route::get('/admin', function () {
        return view('admin.index');
    });

    Route::resource('admin/users' ,'UsersController');

    Route::resource('admin/posts' ,'PostsController');

    Route::resource('admin/categories' ,'CategoriesController');

    Route::resource('admin/media' ,'MediaController');

    Route::resource('admin/comments' ,'CommentsController');

    Route::resource('admin/comments/replies' ,'CommentRepliesController');

});

Route::group(['middleware'=>'auth'],function (){
    Route::post('comment/replay', 'CommentRepliesController@createReplay');


});

//template Resources
