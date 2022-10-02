<?php

namespace Authanram\LaravelDragula\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Authanram\LaravelDragula\LaravelDragula
 */
class LaravelDragula extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Authanram\LaravelDragula\LaravelDragula::class;
    }
}
