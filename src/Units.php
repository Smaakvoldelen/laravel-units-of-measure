<?php

namespace Smaakvoldelen\UnitsOfMeasure;

use Exception;
use Smaakvoldelen\UnitsOfMeasure\Units\Mass;

class Units
{
    /**
     * Create a new Unit instance from a given expression.
     */
    public function from(string $expression): ?Unit
    {
        $units = [
            Mass::class,
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
