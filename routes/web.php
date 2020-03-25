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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/admin/users','AdminUsersController');


Route::group(['middleware'=>['Admin','auth']],function(){
    Route::get('admin',[
        'uses'=>'AdminController@index',
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
    
    Route::get('admin/users/create',[
        'as'=>'admin.users.create',
        'uses'=>'AdminUsersController@create'
    ]);
});



Route::get('/', [
    'uses'=>'HomeController@index',
    'as'=>'welcome'
    ]);



