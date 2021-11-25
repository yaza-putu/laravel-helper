<?php

namespace Yaza\LaravelHelper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yaza\LaravelHelper\LaravelHelper
 */
class LaravelHelper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-helper';
    }
}
