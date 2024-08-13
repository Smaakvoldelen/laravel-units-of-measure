<?php

namespace Smaakvoldelen\UnitsOfMeasure;

use BadMethodCallException;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use JsonSerializable;
use Smaakvoldelen\UnitsOfMeasure\Casts\UnitCast;
use Stringable;

abstract class Unit implements Arrayable, Castable, Jsonable, JsonSerializable, Renderable, Stringable
{
    /**
     * The class name where all the measurements are stored for the unit.
     */
    public static string $measurementClass = Measurement::class;

    /**
     * Get the name of the caster class to use when casting from / to this cast target.
     */
    public static function castUsing(array $arguments): string
    {
        return UnitCast::class;
    }

    /**
     * Create a new Unit instance from a given expression.
     */
    public static function from(string $expression): static
    {
        $expression = Str::of($expression)
            ->trim()
            ->squish()
            ->value();

        [$value, $measurement] = static::getValueAndMeasurement($expression);

        return new static($value, $measurement);
    }

    /**
     * Get the value and measurement from a given expression.
     */
    protected static function getValueAndMeasurement(string $expression): array
    {
        $value = static::extractValue($expression);
        $measurementName = Str::remove((string) $value, $expression);

        $measurement = static::findMeasurement($measurementName);
        if ($measurement === null) {
            throw new BadMethodCallException('No measurement found for expression: '.$expression);
        }

        return [(float) $value, $measurement];
    }

    /**
     * Extracts the value from a given expression.
     */
    protected static function extractValue(string $expression): ?string
    {
        $results = Str::of($expression)
            ->trim()
            ->explode(' ')
            ->first();

        if (Str::of($results)->length() === Str::of($expression)->length()) {
            return Str::of($expression)
                ->match('/[\d.+]+/')
                ->value();
        }

        return $results;
    }

    /**
     * Find the measurement from a given expression.
     */
    protected static function findMeasurement(string $expression): ?Measurement
    {
        $measurement = null;
        if (! empty($expression)) {
            $expression = Str::of($expression)
                ->trim()
                ->squish()
                ->value();

            /** @var Measurement $measurementClassName */
            $measurementClassName = static::$measurementClass;
            $measurement = $measurementClassName::tryFrom($expression);
            if (! $measurement) {
                $measurement = $measurementClassName::tryFromAlias($expression);
            }

        }

        return $measurement;
    }

    /**
     * Create a new Unit instance.
     */
    final public function __construct(protected float $value, protected Measurement $measurement)
    {
        //
    }

    /**
     * String representation of the unit.
     */
    public function __toString(): string
    {
        return $this->getValue().' '.$this->getMeasurement()->value;
    }

    /**
     * Format the unit to a human-readable string.
     */
    public function format(int $precision = 2, bool $trimDecimals = true, bool $withSuffix = true): string
    {
        $value = $this->getValue();
        $suffix = trans_choice('unit-of-measure::units.'.preg_replace('/\s+/', '_', $this->getMeasurement()->value), $value);
        $value = number_format($value, $precision, config('unit-of-measure.decimal_separator', '.'), config('unit-of-measure.thousand_separator', ','));
        if ($trimDecimals) {
            $value = rtrim(rtrim($value, '0'), config('unit-of-measure.decimal_separator', '.'));
        }

        return $value.($withSuffix ? ' '.$suffix : '');
    }

    /**
     * Simple formats the unit without a suffix symbol.
     */
    public function formatSimple(int $precision = 2): string
    {
        return $this->format(precision: $precision, trimDecimals: false, withSuffix: false);
    }

    /**
     * Simple formats the unit without zeros.
     */
    public function formatWithoutZeros(): string
    {
        return $this->format(precision: 0, trimDecimals: false, withSuffix: false);
    }

    /**
     * Get the measurements for the unit.
     */
    public function getMeasurement(): Measurement
    {
        return $this->measurement;
    }

    /**
     * Get the value for the unit.
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Specify data which should be serialized to JSON.
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    /**
     * Get the evaluated contents of the object.
     */
    public function render(): string
    {
        return $this->format();
    }

    /**
     * Convert the unit to a given unit
     *
     * @return $this
     */
    public function to(string|Measurement $measurement): static
    {
        if (is_string($measurement)) {
            $measurement = static::findMeasurement($measurement);
        }

        if ($measurement === null) {
            throw new BadMethodCallException('No measurement found.');
        }

        $convertedValue = $this->measurement->to($this->value, $measurement);

        $this->value = $convertedValue;
        $this->measurement = $measurement;

        return $this;
    }

    /**
     * Get the instance as an array.
     */
    public function toArray(): array
    {
        return [
            'value' => $this->value,
            'measurement' => $this->measurement->value,
            'symbol' => trans_choice('unit-of-measure::units.'.preg_replace('/\s+/', '_', $this->getMeasurement()->value), $this->value),
        ];
    }

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     */
    public function toJson($options = 0): false|string
    {
        return json_encode($this->toArray(), $options);
    }
}
