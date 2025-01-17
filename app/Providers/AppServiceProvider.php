<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Ecole;

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
    protected $namespace='App\Http\controllers';
    public function boot()
    {
        Schema::defaultStringLength(191);
        $ecoleCreds = Ecole::firstWhere('id', 1);
        view()->share('ecoleCreds', $ecoleCreds);

}}
