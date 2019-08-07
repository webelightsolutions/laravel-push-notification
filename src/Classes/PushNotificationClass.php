<?php

namespace Webelightdev\LaravelPushNotification\Classes;

use Illuminate\Support\Facades\Queue;
use Webelightdev\LaravelPushNotification\Jobs\PushNotificationJob;

/**
 * Push Notification Class.
 */
class PushNotificationClass
{
    public function send($deviceTokens, $message, $action, $title = null)
    {
        $notificationEnable = config('push-notification.moduleEnable.notification');

        if ($notificationEnable) {
            Queue::push(new PushNotificationJob($deviceTokens, $message, $action , $title));
        }

        return response()->json(['message' => $message]);
    }
}
