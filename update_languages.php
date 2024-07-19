<?php

use Illuminate\Support\Str;
use Smaakvoldelen\UnitsOfMeasure\Measurements\AmountMeasurement;
use Smaakvoldelen\UnitsOfMeasure\Measurements\LengthMeasurement;
use Smaakvoldelen\UnitsOfMeasure\Measurements\MassMeasurements;
use Smaakvoldelen\UnitsOfMeasure\Measurements\TemperatureMeasurement;
use Smaakvoldelen\UnitsOfMeasure\Measurements\VolumeMeasurements;

include_once __DIR__.'/vendor/autoload.php';

$result = [];

$measures = [
    MassMeasurements::class,
    LengthMeasurement::class,
    VolumeMeasurements::class,
    TemperatureMeasurement::class,
    AmountMeasurement::class,
];

foreach ($measures as $measure) {
    foreach (array_column($measure::cases(), 'value') as $key) {
        $translationKey = Str::of($key)->replace(' ', '_')->value();
        $result[$translationKey] = Str::of($measure::from($key)->name)->lower()->replace('_', ' ')->value();
    }
}

$filePath = __DIR__.'/resources/lang/en/units.php';

file_put_contents($filePath, '<?php return '.var_export($result, true).';');
