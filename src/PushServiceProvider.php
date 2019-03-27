<?php

namespace Wzhanjun\LaravelPush;

use Wzhanjun\Push\Push;
use Illuminate\Support\ServiceProvider;

class PushServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/pusher.php', 'pusher');

        $this->app->singleton(Push::class, function() {
            return new Push(config('pusher'));
        });
    }

    public function boot()
    {

    }
}