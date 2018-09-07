<?php

return [
    /*
     * Default Cloud Messaging Service
     *
     * Here you may specify the default service that should be used
     * by the framework to Push Notification.
     *
     * Supported: "fcm"
     */
    'default' => 'fcm',

    /*
     * Adapter Class
     *
     * Here you can add current adapter class path which provides
     * cloud messaging service.
     */
    'adapter' => \Webelightdev\LaravelPushNotification\Adapters\Fcm::class,

    /*
     * Cloud Messaging Services
     *
     * Here you may configure as many service "services" as you wish,
     * and you may even configure multiple services here.
     */
    'services' => [
        'fcm' => [
            'url'      => env('FCM_URL', 'https://fcm.googleapis.com/fcm/send'),
            'auth_key' => env('FCM_AUTH_KEY', ''),
        ],
    ],

    /*
     * Notification Logs
     *
     * Here you may configure log table for logging out Push Notification status.
     * If you are planning to change table then same name should be in
     * generated migration as well.
     */
    'logs' => [
        'table' => 'notification_logs',
    ],

    'moduleEnable' => [
        'notification' => true,
    ],
];
