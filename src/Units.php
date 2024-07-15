<?php

namespace Smaakvoldelen\UnitsOfMeasure;

use Exception;
use Smaakvoldelen\UnitsOfMeasure\Units\Amount;
use Smaakvoldelen\UnitsOfMeasure\Units\Length;
use Smaakvoldelen\UnitsOfMeasure\Units\Mass;
use Smaakvoldelen\UnitsOfMeasure\Units\Temperature;
use Smaakvoldelen\UnitsOfMeasure\Units\Volume;

class Units
{
    /**
     * Create a new Unit instance from a given expression.
     */
    public function from(string $expression): ?Unit
    {
        $units = [
            Mass::class,
            Length::class,
            Volume::class,
            Temperature::class,
            Amount::class,
        ];

        $result = null;

        foreach ($units as $unit) {
            try {
                return $unit::from($expression);
            } catch (Exception) {
                continue;
            }
        }

        return $result;
    }
}
