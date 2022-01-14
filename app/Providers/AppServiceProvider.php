<?php

namespace App\Providers;

use App\View\Components\Post\CommentForm;
use App\View\Components\Post\Comment;
use App\View\Components\Post\Form;
use App\View\Components\Post\Post;
use App\View\Components\Nav;
use App\View\Components\Footer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::component('post-form', Form::class);
        Blade::component('post-add-comment', CommentForm::class);
        Blade::component('post', Post::class);
        Blade::component('comments', Comment::class);
        Blade::component('nav', Nav::class);
        Blade::component('footer', Footer::class);
    }
}
