<?php

namespace Smaakvoldelen\UnitsOfMeasure\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Smaakvoldelen\UnitsOfMeasure\Measurements\MassMeasurements;
use Smaakvoldelen\UnitsOfMeasure\Measurements\VolumeMeasurements;
use Smaakvoldelen\UnitsOfMeasure\Units\Mass;
use Smaakvoldelen\UnitsOfMeasure\Units\Volume;

class SelectInput
{
    /**
     * Get a collection of units for an "ingredient" based select input.
     *
     * @return Collection<array{key: string, value: string}>
     */
    public static function ingredients(): Collection
    {
        $collection = collect();
        $measurements = [
            new Mass(1, MassMeasurements::GRAM),
            new Mass(1, MassMeasurements::KILOGRAM),
            new Volume(1, MassMeasurements::OUNCE),
            new Volume(1, MassMeasurements::POUND),
            new Volume(1, VolumeMeasurements::CUP),
            new Volume(1, VolumeMeasurements::TEASPOON),
            new Volume(1, VolumeMeasurements::TABLESPOON),
        ];

        foreach ($measurements as $measurement) {
            $collection->push([
                'key' => $measurement->getMeasurement()->value,
                'value' => Str::ucfirst(trans_choice('unit-of-measure::units.'.preg_replace('/\s+/', '_', $measurement->getMeasurement()->value), $measurement->getValue())),
            ]);
        }

        return $collection;
    }
}
