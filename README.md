# laravel-push-notification
[![Latest Stable Version](https://poser.pugx.org/webelightdev/laravel-push-notification/v/stable)](https://packagist.org/packages/webelightdev/laravel-push-notification)
[![Latest Unstable Version](https://poser.pugx.org/webelightdev/laravel-push-notification/v/unstable)](https://packagist.org/packages/webelightdev/laravel-push-notification)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/webelightdev/laravel-push-notification/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/webelightdev/laravel-push-notification/?branch=master)
[![Total Downloads](https://poser.pugx.org/webelightdev/laravel-push-notification/downloads)](https://packagist.org/packages/webelightdev/laravel-push-notification)
[![License](https://poser.pugx.org/webelightdev/laravel-push-notification/license)](https://packagist.org/packages/webelightdev/laravel-push-notification)

Push Notifications using Laravel
```
PushNotification::send(['deviceToken1', 'deviceToken2',..], 'Notification Message', 'Action Key');
```
- Param1 [Device Tokens] - Send Notification to single/mutiple devices.
- Param2 [Notification Message] - Notification Message that will display on mobile notification tray.
- Param3 [Action Key] - Action key is the helper to redirect user to any page in Mobile app on notificaiton touch.

## Installation
To get the latest version of Laravel Push Notification, run following using `composer`:
```
composer require webelightdev/laravel-push-notification dev-master
```
Or, you may manually update require block and run `composer update`
```
"require": {
  "webelightdev/laravel-push-notification": "dev-master"
}
```

Once Laravel Push Notification is installed, You need to register the Service Provider in `config/app.php`, 
Add following in `providers` list
```
Webelightdev\LaravelPushNotification\PushNotificationServiceProvider::class,
```
 
`composer dump-autoload` will be required.

To publish the Config, Migration, Service Provider and Facades
```
php artisan vendor:publish
```

Finally, run migration to generate Notification Log table
```
php artisan migrate
```

Latest snapshot of Push Notification for one of our client using laravel-push-notification plugin
![img](http://i.imgur.com/IsKFkWW.jpg)

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
