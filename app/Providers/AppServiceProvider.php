<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\AirFryer;
use App\Models\Cleaner;
use App\Models\Flosser;
use App\Models\FoodProcessor;
use App\Models\HairStraightner;




use Illuminate\Support\Facades\View;


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
        $cats=Category::all();
        $airs = AirFryer::all();
        $cleaners = Cleaner::all();
        $flossers = Flosser::all();
        $FoodProcessor = FoodProcessor::all();
        $HairStraightner = HairStraightner::all();
        //
        view::share('categories',$cats);
        view::share('airs',$airs);
        view::share('cleaners',$cleaners);
        view::share('flossers',$flossers);
        view::share('foods',$FoodProcessor);
        view::share('hairs',$HairStraightner);

        

    }
}
