<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Mockery\Exception\InvalidOrderException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        using: function(){
            Route::middleware('web')
            ->group(base_path('routes/web.php'));

            Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

            // Addig custom auth route for login here
            Route::middleware('api')
                ->prefix('auth')
                ->group(base_path('routes/auth.php'));

            Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/eventbooking.php'));


            Route::middleware('api')
            ->prefix('test')
            ->group(base_path('routes/test.php'));

            Route::middleware("api")
            ->prefix("payments")
            ->group(base_path("routes/payments.php"));

            Route::middleware("api")
            ->prefix("ticket")
            ->group(base_path("routes/ticket.php"));
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {

    })->create();
