<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class MacroResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Response::macro('success', function(mixed $payload, int $status = 200) {
            return response()->json([
                'success' => true,
                'data' => $payload
            ], $status);
        });

        Response::macro('error', function(array|string $errors, int $status = 400) {
            return response()->json([
                'success' => false,
                'error' => $errors
            ], $status);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
