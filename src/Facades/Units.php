<?php

namespace Smaakvoldelen\UnitsOfMeasure\Facades;

use Illuminate\Support\Facades\Facade;
use Smaakvoldelen\UnitsOfMeasure\Unit;

/**
 * @method static Unit|null from(string $expression)
 *
 * @see \Smaakvoldelen\UnitsOfMeasure\Units
 */
class Units extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Smaakvoldelen\UnitsOfMeasure\Units::class;
    }
}
