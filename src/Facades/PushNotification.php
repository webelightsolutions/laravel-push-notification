<?php

namespace Webelightdev\LaravelPushNotification\Facades;

use Illuminate\Support\Facades\Facade;

class PushNotification extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'push-notification';
    }
}
