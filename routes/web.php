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



Auth::routes();



// Route::group(['middleware'=>'web'],function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/', [
        'uses'=>'HomeController@index',
        'as'=>'welcome'
        ]);

// });

Route::group(['middleware'=>['admin']],function(){
    Route::resource('/admin/users','AdminUsersController');
    Route::resource('/admin/posts','AdminPostsController');

    Route::get('admin',[
        'uses'=>'AdminUsersController@dashboard',
        'as'=>'admin.index'
    ]);

    Route::get('admin/users',[
        'uses'=>'AdminUsersController@index',
        'as'=>'admin.users'
    ]);

    Route::get('admin/users/edit/{id}',[
        'as'=>'admin.users.edit',
        'uses'=>'AdminUsersController@edit'
    ]);

    Route::get('admin/users/edit/{id}',[
        'as'=>'admin.users.edit',
        'uses'=>'AdminUsersController@updatePhoto'
    ]);

    Route::get('admin/users/create',[
        'as'=>'admin.users.create',
        'uses'=>'AdminUsersController@create'
    ]);

    // ADMIN POSTS//
    Route::get('admin/posts',[
        'as'=>'admin.posts',
        'uses'=>'AdminPostsController@index'
    ]);

    Route::get('admin/posts/create',[
        'as'=>'admin.posts.create',
        'uses'=>'AdminPostsController@create'
    ]);

    Route::get('admin/posts/{id}/edit',[
        'as'=>'admin.posts.edit',
        'uses'=>'AdminPostsController@edit'
    ]);
});







