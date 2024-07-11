<?php

namespace Smaakvoldelen\UnitsOfMeasure;

use BackedEnum;

interface Measurement extends BackedEnum
{
    /**
     * Converts the given value from the base measurements value.
     */
    public function convertFromBaseValue(float $value): float;

    /**
     * Converts the given value to the base measurements value.
     */
    public function convertToBaseValue(float $value): float;

    /**
     * Get the symbol for the measurement.
     */
    public function getSymbol(): string;

    /**
     * Convert the measurement to a given value and measurement.
     */
    public function to(float $value, Measurement $measurement): float;

    /**
     * Try to find the measurement from an given alias.
     */
    public static function tryFromAlias(string $alias): ?Measurement;
}
