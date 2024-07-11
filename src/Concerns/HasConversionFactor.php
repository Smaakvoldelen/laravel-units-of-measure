<?php

namespace Smaakvoldelen\UnitsOfMeasure\Concerns;

use Smaakvoldelen\UnitsOfMeasure\Measurement;

trait HasConversionFactor
{
    /**
     * Get the factor for the measurement.
     *
     * Note: This should be overwritten.
     *
     * @codeCoverageIgnore
     */
    public function getFactor(): float
    {
        return 1;
    }

    /**
     * Converts the given value from the base measurements value.
     */
    public function convertFromBaseValue(float $value): float
    {
        return $value / $this->getFactor();
    }

    /**
     * Converts the given value to the base measurements value.
     */
    public function convertToBaseValue(float $value): float
    {
        return $value * $this->getFactor();
    }

    /**
     * Convert the measurement to a given value and measurement.
     */
    public function to(float $value, Measurement $measurement): float
    {
        return $measurement->convertFromBaseValue($this->convertToBaseValue($value));
    }
}
