<?php

namespace Smaakvoldelen\UnitsOfMeasure\Units;

use Smaakvoldelen\UnitsOfMeasure\Measurements\VolumeMeasurements;
use Smaakvoldelen\UnitsOfMeasure\Unit;

class Volume extends Unit
{
    /**
     * The class name where all the measurements are stored for the unit.
     */
    public static string $measurementClass = VolumeMeasurements::class;
}
