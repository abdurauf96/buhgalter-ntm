<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.index', function($view){
            $sliders=\App\Banner::withTranslation(\App::getLocale())->get();
            $view->with(compact('sliders'));
        });

        view()->composer('sections.courses', function($view){
            $foreignCategories=\App\CourseCategory::withTranslation(\App::getLocale())->whereCategory('foreign')->get();
            $otherCategories=\App\CourseCategory::withTranslation(\App::getLocale())->whereCategory('other')->get();
            $view->with(compact('foreignCategories', 'otherCategories'));
        });

        view()->composer('sections.info', function($view){
            $infos=\App\Information::withTranslation(\App::getLocale())->get();
            $view->with(compact('infos'));
        });

        view()->composer('sections.reviews', function($view){
            $reviews=\App\Review::withTranslation(\App::getLocale())->whereStatus(1)->get();
            $view->with(compact('reviews'));
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
