<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Model\configpage;
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
        $config_1 = configpage::find(1);
        $config_2 = configpage::find(2);
        $config_3 = configpage::find(3);
        $config_4 = configpage::find(4);
        View::share([
            'config_1' => $config_1,
            'config_2' => $config_2,
            'config_3' => $config_3,
            'config_4' => $config_4,
        ]);
    }
}
