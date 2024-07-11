<?php

use Smaakvoldelen\UnitsOfMeasure\Casts\UnitCast;
use Smaakvoldelen\UnitsOfMeasure\Measurements\MassMeasurements;
use Smaakvoldelen\UnitsOfMeasure\Units\Mass;

it('can be formatted', function () {
    $unit = Mass::from('1.5 kg');

    expect($unit->format())
        ->toEqual('1,50 kg')
        ->and($unit->formatSimple())
        ->toEqual('1,50')
        ->and($unit->formatWithoutZeros())
        ->toEqual('2');
});

it ('can be casted', function() {
    expect(Mass::castUsing([]))
        ->toBe(UnitCast::class);
});

it('can be rendered', function () {
    expect(Mass::from('1.5 kg')->render())
        ->toEqual('1,50 kg');
});

it('can be parsed as string', function () {
    $unit = Mass::from('1 kg');

    expect((string) $unit)->toEqual('1 kg');
});

it('can be converted to another unit', function () {
    $unit = Mass::from('1 kg');

    expect((string) $unit->to('grams'))
        ->toBe('1000 g')
        ->and((string) $unit->to(MassMeasurements::POUND))
        ->toBe('2.2046226218488 lb');
});

it('can be converted to an array', function () {
    expect(Mass::from('1 kg')->toArray())
        ->toEqual([
            'value' => 1,
            'measurement' => 'kg',
            'symbol' => 'kg',
        ]);
});

it('can be converted to json', function () {
    $jsonOutput = '{"value":1,"measurement":"kg","symbol":"kg"}';

    expect(Mass::from('1 kg')->toJson())
        ->toEqual($jsonOutput)
        ->and(json_encode(Mass::from('1 kg')))
        ->toEqual($jsonOutput);
});

it('throws an exception if the unit is unknown while converting to another unit', function () {
    Mass::from('1 kg')->to('unknown');
})->throws(BadMethodCallException::class, 'No measurement found');
