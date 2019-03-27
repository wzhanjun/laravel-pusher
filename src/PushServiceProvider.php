<?php

namespace Wzhanjun\LaravelPush;

use Wzhanjun\Push\Push;
use Illuminate\Support\ServiceProvider;

class PushServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/push.php', 'push');

        $this->app->singleton(Push::class, function() {
            return new Push(config('push'));
        });
    }

    public function boot()
    {

    }
}