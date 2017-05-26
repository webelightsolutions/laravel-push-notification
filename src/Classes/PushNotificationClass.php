<?php

namespace Webelightdev\LaravelPushNotification\Classes;

use Illuminate\Support\Facades\Queue;
use Webelightdev\LaravelPushNotification\Jobs\PushNotificationJob;

/**
 * Push Notification Class.
 */
class PushNotificationClass
{
    public function send($deviceTokens, $message, $action)
    {
        Queue::push(new PushNotificationJob($deviceTokens, $message, $action));
    }
}
