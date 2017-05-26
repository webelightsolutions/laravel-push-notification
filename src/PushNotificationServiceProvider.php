<?php

namespace Webelightdev\LaravelPushNotification;

use Illuminate\Support\ServiceProvider;
use Webelightdev\LaravelPushNotification\Classes\LogNotificationClass;
use Webelightdev\LaravelPushNotification\Classes\PushNotificationClass;

class PushNotificationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Config
        $this->publishes([__DIR__.'/../config/push-notification.php' => config_path('push-notification.php')]);
        // Migration
        $this->publishes([__DIR__.'/../database/migrations' => $this->app->databasePath().'/migrations'], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Push Notification Service
        $this->app->bind('push-notification', function () {
            return new PushNotificationClass();
        });
        // Log Notification Service
        $this->app->bind('log-notification', function () {
            return new LogNotificationClass();
        });
    }
}
