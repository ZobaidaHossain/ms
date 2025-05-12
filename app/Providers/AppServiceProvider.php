<?php

namespace App\Providers;

use App\Models\Contract;
use Illuminate\Support\Facades\App;
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
        Schema::defaultStringLength(191);
        // $contract = Contract::first();
        // view()->share('contract', $contract);
        $locale = session()->get('locale', 'bn');  // Default to 'en'
        App::setLocale($locale);
    }


}
