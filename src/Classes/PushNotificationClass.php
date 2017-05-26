<?php
namespace Webelightdev\LaravelPushNotification\Classes;

use Webelightdev\LaravelPushNotification\Jobs\PushNotificationJob;
use Illuminate\Support\Facades\Queue;

/**
* Push Notification Class
*/
class PushNotificationClass
{
    public function send($deviceTokens, $message, $action)
    {
        Queue::push(new PushNotificationJob($deviceTokens, $message, $action));
    }
}
