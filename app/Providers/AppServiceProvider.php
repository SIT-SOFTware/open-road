<?php

namespace App\Providers;

use App\Models\Advertisement;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        //This makes $advertisement available across all views if table exists
        if (! app()->runningInConsole()){
            if (Schema::hasTable('advertisements')) {
                $advertisement = Advertisement::all();
                View::share('advertisement', $advertisement); 
            }
        }
    }
}
