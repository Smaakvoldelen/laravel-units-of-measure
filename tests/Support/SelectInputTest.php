<?php

use Smaakvoldelen\UnitsOfMeasure\Support\SelectInput;

it('get ingredients', function () {
    $ingredients = SelectInput::ingredients();
    $output = [
        ['key' => 'qty', 'value' => 'Quantity'],
        ['key' => 'g', 'value' => 'Gram'],
        ['key' => 'kg', 'value' => 'Kilogram'],
        ['key' => 'oz', 'value' => 'Ounce'],
        ['key' => 'lb', 'value' => 'Pound'],
        ['key' => 'ml', 'value' => 'Milliliter'],
        ['key' => 'cl', 'value' => 'Centiliter'],
        ['key' => 'l', 'value' => 'Liter'],
        ['key' => 'cp', 'value' => 'Cup'],
        ['key' => 'tsp', 'value' => 'Teaspoon'],
        ['key' => 'Tbsp', 'value' => 'Tablespoon'],
    ];

    expect($ingredients->toArray())
        ->toBe($output);
});
