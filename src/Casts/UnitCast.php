<?php

namespace Smaakvoldelen\UnitsOfMeasure\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use Smaakvoldelen\UnitsOfMeasure\Facades\Units;
use Smaakvoldelen\UnitsOfMeasure\Unit;
use UnexpectedValueException;

class UnitCast implements CastsAttributes
{
    /**
     * Transform the attribute from the underlying model values.
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): ?Unit
    {
        if (is_null($value)) {
            return null;
        }

        if (! is_string($value)) {
            throw new UnexpectedValueException;
        }

        return Units::from($value);
    }

    /**
     * Transform the attribute to its underlying model values.
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): ?string
    {
        if (is_null($value)) {
            return null;
        }

        if (! $value instanceof Unit) {
            throw new UnexpectedValueException;
        }

        return (string) $value;
    }
}
