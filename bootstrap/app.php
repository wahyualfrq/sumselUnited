<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [
            __DIR__ . '/../routes/web.php',
        ],
        api: [
            __DIR__ . '/../routes/api.php',
        ],
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        /**
         * Laravel 12 CSRF Protection
         * ------------------------------------
         * validateCsrfTokens() → aktifkan CSRF middleware
         * except → route yang tidak butuh CSRF
         * ------------------------------------
         */

        $middleware->validateCsrfTokens(
            except: [
                // Jika butuh unlock CSRF untuk API / webhook
                // 'api/*',
                // 'stripe/*',
            ]
        );
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
