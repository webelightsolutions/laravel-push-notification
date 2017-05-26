<?php

namespace Webelightdev\LaravelPushNotification\Facades;

use Illuminate\Support\Facades\Facade;

class LogNotification extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'log-notification';
    }
}
