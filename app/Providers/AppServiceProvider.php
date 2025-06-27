<?php

namespace App\Providers;

use App\Services\TicketService;
use Illuminate\Support\ServiceProvider;

use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    //Binding Repository in Service Provider 
    $this->app->bind(
        UserRepositoryInterface::class,
        UserRepository::class
    );            
        //
        // $this->app->singleton("TicketService", function () {
        //     return new TicketService();
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

}
