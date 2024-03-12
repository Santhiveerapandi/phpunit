<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About PHP Unit Testing
Here i tested Email Sent function
Optional:
> composer run post-root-package-test-install
> php artisan migrate --env=testing
> php artisan db:seed --env=testing
Required:
Ref: https://laravel.com/docs/11.x/mail#configuring-the-sender
> php artisan make:mail UserEmail --markdown=email.users.welcome
https://laravel.com/docs/11.x/mail#looping-over-recipients
> php artisan make:controller EmailSendController
> php artisan serve --env=testing
> php artisan make:test EmailTest
> php artisan test --testsuite=Feature
> php artisan key:generate --show