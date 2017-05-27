<?php

namespace Webelightdev\LaravelPushNotification\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PushNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $deviceTokens;
    protected $message;
    protected $action;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($deviceTokens, $message, $action)
    {
        $this->deviceTokens = $deviceTokens;
        $this->message = $message;
        $this->action = $action;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $adapter = config('push-notification.adapter');
        $objAdapter = new $adapter();
        $objAdapter->pushNotification($this->deviceTokens, $this->message, $this->action);
    }
}
