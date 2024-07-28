<?php

namespace Smaakvoldelen\UnitsOfMeasure\Units;

use Smaakvoldelen\UnitsOfMeasure\Measurements\EnergyMeasurement;
use Smaakvoldelen\UnitsOfMeasure\Unit;

class Energy extends Unit
{
    /**
     * The class name where all the measurements are stored for the unit.
     */
    public static string $measurementClass = EnergyMeasurement::class;
}
