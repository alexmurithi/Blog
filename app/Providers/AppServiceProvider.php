<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app',function ($view){
         $view->with('categories',Category::all());
        });

        // view()->composer('admin.posts.edit',function ($view, $id){
        //     $post =Post::findOrFail($id);
        //    $categories =Category::pluck('name','id')->all();
        // // return view('admin.posts.edit',compact('post','categories'));

        //     $view->with('categories,',Category::all());
        //    });
    }
}
