<?php

namespace Smaakvoldelen\UnitsOfMeasure\Measurements;

use Smaakvoldelen\UnitsOfMeasure\Concerns\HasConversionFactor;
use Smaakvoldelen\UnitsOfMeasure\Measurement;

enum TemperatureMeasurement: string implements Measurement
{
    use HasConversionFactor;

    case CELSIUS = '°C';
    case FAHRENHEIT = '°F';
    case KELVIN = 'K';
    case RANKINE = '°R';
    case ROMER = '°Rø';

    /**
     * Try to find the measurement from a given alias.
     */
    public static function tryFromAlias(string $alias): ?Measurement
    {
        return match ($alias) {
            'celsius', 'c' => self::CELSIUS,
            'fahrenheit', 'f' => self::FAHRENHEIT,
            'kelvin', 'k' => self::KELVIN,
            'rankine', 'r' => self::RANKINE,
            'romer', 'ro' => self::ROMER,
            default => null
        };
    }

    public function convertFromBaseValue(float $value): float
    {
        return match ($this) {
            self::CELSIUS => $value - 273.15,
            self::FAHRENHEIT => $value * 9 / 5 - 459.67,
            self::KELVIN => $value,
            self::RANKINE => $value * (9/5),
            self::ROMER => ($value - 273.15) * (21/40) + 7.5,
        };
    }

    public function convertToBaseValue(float $value): float
    {
        return match ($this) {
            self::CELSIUS => $value + 273.15,
            self::FAHRENHEIT => ($value + 459.67) * 5 / 9,
            self::KELVIN => $value,
            self::RANKINE => $value * (5/9),
            self::ROMER => ($value - 7.5) * (40/21) + 273.15,
        };
    }

    /**
     * Get the symbol for the measurement.
     */
    public function getSymbol(): string
    {
        return $this->value;
    }
}
