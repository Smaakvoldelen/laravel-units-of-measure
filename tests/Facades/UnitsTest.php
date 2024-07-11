<?php

use Smaakvoldelen\UnitsOfMeasure\Facades\Units;

it('from function returns null and ignores exceptions if a unit does not exists', function () {
    expect(Units::from('1 unknown'))
        ->toBeNull();
});
