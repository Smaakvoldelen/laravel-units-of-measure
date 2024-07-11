<?php

namespace Smaakvoldelen\UnitsOfMeasure\Units;

use Smaakvoldelen\UnitsOfMeasure\Measurements\MassMeasurements;
use Smaakvoldelen\UnitsOfMeasure\Unit;

class Mass extends Unit
{
    /**
     * The class name where all the measurements are stored for the unit.
     */
    public static string $measurementClass = MassMeasurements::class;
}
