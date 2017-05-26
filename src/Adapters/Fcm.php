<?php

namespace Webelightdev\LaravelPushNotification\Adapters;

use Webelightdev\LaravelPushNotification\Facades\LogNotification;

/**
 * Firebase Cloud Messaging Adapter.
 */
class Fcm
{
    protected $url;
    protected $authKey;

    public function __construct()
    {
        $this->url = config('push-notification.services.fcm.url');
        $this->authKey = config('push-notification.services.fcm.auth_key');
    }

    public function pushNotification($deviceTokens, $message, $action)
    {
        foreach ($deviceTokens as $deviceToken) {
            $response = $this->callService($deviceToken, $message, $action);
            $this->logResponse($response, $deviceToken, $message, $action);
        }
    }

    public function callService($deviceToken, $message, $action)
    {
        return file_get_contents($this->url, false, $this->setStream($deviceToken, $message, $action));
    }

    public function setStream($deviceToken, $message, $action)
    {
        $postData['to'] = $deviceToken;
        $postData['data']['message'] = $message;
        $postData['data']['click_action'] = $action;

        $streamOptions = [
            'http' => [
                'method'  => 'POST',
                'header'  => "Authorization: key={$this->authKey}\r\n"."Content-Type: application/json\r\n",
                'content' => json_encode($postData),
                ],
        ];

        return stream_context_create($streamOptions);
    }

    /**
     * @param string $data
     */
    public function logResponse($data, $deviceToken, $message, $action)
    {
        $response = json_decode($data);
        if ($response->failure == 1) {
            LogNotification::error($deviceToken, $message, $response->results[0]->error);
        } else {
            LogNotification::info($deviceToken, $message);
        }
    }
}
