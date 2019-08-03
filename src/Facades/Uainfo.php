<?php

namespace Ufucms\LaravelUainfo\Facades;

use Illuminate\Support\Facades\Facade;

class Uainfo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'uainfo';
    }
}
