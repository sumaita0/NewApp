<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use App\Models\Sub_Service;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
        $view->with(
            'services',
            Service::where('is_active', 1)
                ->with(['subservices' => function ($q) {
                    $q->where('is_active', 1);
                }])
                ->orderBy('id')
                ->get()
        );
    });
    }
}
