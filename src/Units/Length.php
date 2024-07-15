<?php

namespace Smaakvoldelen\UnitsOfMeasure\Units;

use Smaakvoldelen\UnitsOfMeasure\Measurements\LengthMeasurement;
use Smaakvoldelen\UnitsOfMeasure\Unit;

class Length extends Unit
{
    /**
     * The class name where all the measurements are stored for the unit.
     */
    public static string $measurementClass = LengthMeasurement::class;
}
