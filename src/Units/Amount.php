<?php

namespace Smaakvoldelen\UnitsOfMeasure\Units;

use Smaakvoldelen\UnitsOfMeasure\Measurements\AmountMeasurement;
use Smaakvoldelen\UnitsOfMeasure\Unit;

class Amount extends Unit
{
    /**
     * The class name where all the measurements are stored for the unit.
     */
    public static string $measurementClass = AmountMeasurement::class;
}
