<?php

namespace Smaakvoldelen\UnitsOfMeasure\Units;

use Smaakvoldelen\UnitsOfMeasure\Measurements\TemperatureMeasurement;
use Smaakvoldelen\UnitsOfMeasure\Unit;

class Temperature extends Unit {
    /**
     * The class name where all the measurements are stored for the unit.
     */
    public static string $measurementClass = TemperatureMeasurement::class;
}
