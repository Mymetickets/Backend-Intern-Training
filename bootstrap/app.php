<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

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
            ->prefix('test')
            ->group(base_path('routes/test.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
