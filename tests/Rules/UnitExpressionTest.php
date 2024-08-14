<?php

use Smaakvoldelen\UnitsOfMeasure\Rules\UnitExpression;

it('validates a simple unit expression', function () {
    $rule = new UnitExpression();

    // Valid unit expressions
    expect(validateWithRule('10 kg', $rule))->toBeTrue()
        ->and(validateWithRule('2.5 l', $rule))->toBeTrue()
        ->and(validateWithRule('100 m', $rule))->toBeTrue()
        ->and(validateWithRule('3.14 cm', $rule))->toBeTrue()
        ->and(validateWithRule('7 lbs', $rule))->toBeTrue()
        ->and(validateWithRule('10', $rule))->toBeFalse()
        ->and(validateWithRule('kg', $rule))->toBeFalse()
        ->and(validateWithRule('2kg', $rule))->toBeFalse()
        ->and(validateWithRule('10 kgs', $rule))->toBeTrue()
        ->and(validateWithRule('abc', $rule))->toBeFalse();
});

it('validates with multiple spaces or special characters', function () {
    $rule = new UnitExpression();

    // Valid with multiple spaces and dot in the unit
    expect(validateWithRule('3.5  kg', $rule))->toBeTrue()
        ->and(validateWithRule('100 ml.', $rule))->toBeTrue()
        ->and(validateWithRule('5.7    m', $rule))->toBeTrue()
        //->and(validateWithRule('10kg ', $rule))->toBeFalse()
        //->and(validateWithRule('20 kgm', $rule))->toBeFalse()
        ->and(validateWithRule('5.-5 kg', $rule))->toBeFalse();
});

function validateWithRule(mixed $value, UnitExpression $rule): bool
{
    $failed = false;

    $rule->validate('attribute', $value, function () use (&$failed) {
        $failed = true;
    });

    return !$failed;
}
