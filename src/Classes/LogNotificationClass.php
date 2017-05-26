<?php

namespace Webelightdev\LaravelPushNotification\Classes;

use Illuminate\Support\Facades\DB;

/**
 * Log Notification Class.
 */
class LogNotificationClass
{
    protected $log;

    public function __construct()
    {
        $this->log = config('push-notification.logs.table');
    }

    public function info($deviceToken, $notification, $errorMessage = null)
    {
        DB::table($this->log)->insert([
            'device_token'         => $deviceToken,
            'notification_message' => $notification,
            'error_message'        => $errorMessage,
            'status'               => 'success',
        ]);
    }

    public function error($deviceToken, $notification, $errorMessage)
    {
        DB::table($this->log)->insert([
            'device_token'         => $deviceToken,
            'notification_message' => $notification,
            'error_message'        => $errorMessage,
            'status'               => 'failure',
        ]);
    }
}
