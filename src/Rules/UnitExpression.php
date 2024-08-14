<?php

namespace Smaakvoldelen\UnitsOfMeasure\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class UnitExpression implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (empty($value) || ! preg_match('/^\d+(\.\d+)?\s[a-zA-Z.\s]+$/', (string) $value)) {
            $fail('unit-of-measure::validation.unit')?->translate();
        }
    }
}
