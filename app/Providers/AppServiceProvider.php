<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
// use BeyondCode\LaravelWebSockets\WebSockets\Channels\ChannelManager;
use Illuminate\Support\ServiceProvider;
use BeyondCode\LaravelWebSockets\ChannelManager;


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
        // Register the ProductArgsType type with the schema
        Log::info('ffff');
        
        // app(ChannelManager::class)->on('CartChannel', 'TryEvent', function ($socket, $payload) {
        //     Log::info('Received test event on Cart channel with payload: ' . json_encode($payload));
        // });

    }
}
