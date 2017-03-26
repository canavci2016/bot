<?php

namespace Bot\Formessenger;

use Illuminate\Support\ServiceProvider;

class BotForMessengerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . "/views", 'bot-for-messenger');
        $this->publishes([
            __DIR__ . '/config' => config_path('bot-for-messenger'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->mergeConfigFrom(__DIR__ . "/config/bot_for_messenger.php", 'bot-for-messenger');
        $this->app->make('Bot\Formessenger\BotForMessengerController');
    }
}
