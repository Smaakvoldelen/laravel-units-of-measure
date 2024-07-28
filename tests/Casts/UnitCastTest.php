<?php

use Illuminate\Database\Eloquent\Model;
use Smaakvoldelen\UnitsOfMeasure\Casts\UnitCast;
use Smaakvoldelen\UnitsOfMeasure\Units\Mass;

beforeEach(function () {
    $this->model = $this->getMockBuilder(Model::class)
        ->disableOriginalConstructor()
        ->getMock();
});

it('can get a unit from the expression', function () {
    expect((new UnitCast)->get($this->model, 'unit', '1 kg', []))
        ->toEqual(Mass::from('1 kg'));
});

it('returns null when getting a null value', function () {
    expect((new UnitCast)->get($this->model, 'unit', null, []))
        ->toBeNull();
});

it('throws an exception when getting an invalid value', function () {
    (new UnitCast)->get($this->model, 'unit', 1, []);
})->throws(UnexpectedValueException::class);

it('can set a unit from a unit object', function () {
    expect(new UnitCast)->set($this->model, 'unit', Mass::from('1 kg'), [])
        ->toEqual('1 kg');
});

it('can set a unit to a null value', function () {
    expect(new UnitCast)->set($this->model, 'unit', null, [])
        ->toBeNull();
});

it('throws an exception when setting an invalid value', function () {
    (new UnitCast)->set($this->model, 'unit', 1, []);
})->throws(UnexpectedValueException::class);
