<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Post;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        view()->composer('postDetail', function($view){
            $categorys = Category::all();
            $view->with(compact('categorys'));
        });
        view()->composer('categoryPosts', function($view){
            $categorys = Category::all();
            $view->with(compact('categorys'));
        });

        view()->composer('sections.popularPost', function($view){
            $popularPosts = Post::limit(6)->orderBy('view','DESC')->get();;
            $view->with(compact('popularPosts'));
        });
    }
}
