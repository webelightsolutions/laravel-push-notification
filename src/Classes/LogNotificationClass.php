<?php

namespace Webelightdev\LaravelPushNotification\Classes;

use Illuminate\Support\Facades\DB;

/**
 * Log Notification Class.
 */
class LogNotificationClass
{
    protected $logTable;

    public function __construct()
    {
        $this->logTable = config('push-notification.logs.table');
    }

    public function info($deviceToken, $notification, $errorMessage = null)
    {
        $this->log($deviceToken, $notification, $errorMessage, 'success');
    }

    public function error($deviceToken, $notification, $errorMessage)
    {
        $this->log($deviceToken, $notification, $errorMessage, 'failure');
    }

    public function log($deviceToken, $notification, $errorMessage, $status)
    {
        DB::table($this->logTable)->insert([
            'device_token'         => $deviceToken,
            'notification_message' => $notification,
            'error_message'        => $errorMessage,
            'status'               => $status,
        ]);
    }
}
