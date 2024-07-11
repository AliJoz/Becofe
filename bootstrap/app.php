<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
              using: function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));


            Route::middleware(['web','auth'])
            ->prefix('management')
            ->group(base_path('routes/admin.php'));

        

        },
        // web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',




    )

    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->validateCsrfTokens(except: ['stripe/*']);
        // $middleware->encryptCookies(except: ['cookie_name']);
        // $middleware->validateSignatures(except: ['fbclid', 'utm_campaign']);
        // $middleware->trustProxies(at: ['192.168.1.1']);
        // $middleware->preventRequestsDuringMaintenance(except: ['stripe/*']);
        // $middleware->throttleApi(limiter: 'api', redis: true);
        // $middleware->authenticateSessions();
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Add your exception handling here.
    })
    ->create();
