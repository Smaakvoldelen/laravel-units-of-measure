<?php

namespace Smaakvoldelen\Units\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Smaakvoldelen\Units\Units
 */
class Units extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Smaakvoldelen\Units\Units::class;
    }
}
