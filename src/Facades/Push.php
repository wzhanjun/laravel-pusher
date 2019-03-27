<?php

namespace Wzhanjun\LaravelPush\Facades;

use Illuminate\Support\Facades\Facade;

class Push extends Facade
{

    public static function getFacadeAccessor()
    {
        return \Wzhanjun\Push\Push::class;
    }

}