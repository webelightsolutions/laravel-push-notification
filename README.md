# laravel-push-notification
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://scrutinizer-ci.com/g/webelightdev/laravel-push-notification/badges/build.png?b=master)](https://scrutinizer-ci.com/g/webelightdev/laravel-push-notification/build-status/master)
[![StyleCI](https://styleci.io/repos/68374707/shield)](https://styleci.io/repos/68374707/shield)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/webelightdev/laravel-push-notification/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/webelightdev/laravel-push-notification/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/webelightdev/laravel-push-notification/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/webelightdev/laravel-push-notification/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/webelightdev/laravel-push-notification.svg?style=flat-square)](https://packagist.org/packages/webelightdev/laravel-push-notification)

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
php artisan vendor:publish"
```

Finally, run migration to generate Notification Log table
```
php artisan migrate
```

Latest snapshot of Push Notification for one of our client using laravel-push-notification plugin
![img](http://i.imgur.com/IsKFkWW.jpg)

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
