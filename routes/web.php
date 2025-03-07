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



Route::group(['middleware'=>'web'],function(){

     Route::get('/home',[
         'as'=>'home',
         'uses'=>'HomeController@index'
     ]);

    Route::get('/',[
        'as'=>'/',
        'uses'=>'PostsController@index'
    ]);

    Route::get('/posts/{id}',[
        'as'=>'posts.index',
        'uses'=>'PostsController@show'
    ]);

    Route::get('/posts/category/{id}',[
        'as'=>'posts.category.show',
        'uses'=>'PostsCategoryController@show'
    ]);

    //CONTACT US PAGE//
    Route::get('/contact',[
        'as'=>'contact',
        'uses'=>'HomeController@contact'
    ]);

    Route::post('/contact',[
        'as'=>'contact',
        'uses'=>'HomeController@store'
    ]);


});

Route::group(['middleware'=>['admin']],function(){
    Route::resource('/admin/users','AdminUsersController');
    Route::resource('/admin/posts','AdminPostsController');
    Route::resource('/admin/categories','AdminCategoriesController');

    //ADMIN USERS//
    Route::get('admin',[
        'uses'=>'AdminUsersController@dashboard',
        'as'=>'admin.index'
    ]);

    Route::get('admin/users',[
        'uses'=>'AdminUsersController@index',
        'as'=>'admin.users'
    ]);

    Route::get('admin/users/{id}/edit',[
        'as'=>'admin.users.edit',
        'uses'=>'AdminUsersController@edit'
    ]);

    // Route::get('admin/users/{id}/edit',[
    //     'as'=>'admin.users.edit',
    //     'uses'=>'AdminUsersController@updatePhoto'
    // ]);

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

//    Route::get('/posts/{id}',[
//        'as'=>'posts.index',
//        'uses'=>'PostsController@show'
//    ]);

    //ADMIN CATEGORIES//

    Route::get('admin/categories',[
        'as'=>'admin.categories',
        'uses'=>'AdminCategoriesController@index'
    ]);

    Route::get('admin/categories/create',[
        'as'=>'admin.categories.create',
        'uses'=>'AdminCategoriesController@create'
    ]);

    Route::get('admin/categories/{id}/edit',[
        'as'=>'admin.categories.edit',
        'uses'=>'AdminCategoriesController@edit'
    ]);

    Route::get('admin',[
        'as'=>'admin',
        'uses'=>'AdminController@index'
    ]);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
        });

    Route::get('admin/messages',[
        'as'=>'admin.messages',
        'uses'=>'AdminController@contactMessages'
    ]);

});







