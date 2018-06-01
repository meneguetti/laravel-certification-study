<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //fix to following bug
        // - SQLSTATE[42000]: Syntax error or access violation: 
        //      1071 Specified key was too long; max key length is 1000 bytes
        Schema::defaultStringLength(191);


        //define title (browser) page
//        app('view')->composer('master', function ($view) {
        app('view')->composer('*', function ($view) {


            if (empty(app('request')->route())) {
                return;
            }

            $action = app('request')->route()->getAction();

            //for other cases such as mailables
            if (!isset($action['controller'])) {
                return;
            }

            $controller = class_basename($action['controller']);

            list($controller, $action) = explode('@', $controller);

            $action = title_case(\Illuminate\Support\Str::snake($action, ' '));

            $controller = title_case(\Illuminate\Support\Str::snake(str_ireplace('controller', '', $controller), ' '));

            $view->with('title', $action . ' :: ' . $controller);
            $view->with('actionName', $action);
        });

        app('view')->composer('master', function ($view) {

            //menu
            if (\Illuminate\Support\Facades\Cache::store('file')->has('menu.content')) {
                $view->with('menu', \Illuminate\Support\Facades\Cache::store('file')->get('menu.content'));
            } else {
                $menu = view('menu-render', ['menu' => \App\Menu::items()])->render();

                \Illuminate\Support\Facades\Cache::store('file')->put('menu.content', $menu, 60);

                $view->with('menu', $menu);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
