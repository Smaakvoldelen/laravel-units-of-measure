<?php

namespace Smaakvoldelen\UnitsOfMeasure\Measurements;

use Smaakvoldelen\UnitsOfMeasure\Concerns\HasConversionFactor;
use Smaakvoldelen\UnitsOfMeasure\Measurement;

enum AmountMeasurement: string implements Measurement
{
    use HasConversionFactor;

    case YOTTAMOLE = 'Ymol';
    case ZETTAMOLE = 'Zmol';
    case EXAMOLE = 'Emol';
    case PETAMOLE = 'Pmol';
    case TERAMOLE = 'Tmol';
    case GIGAMOLE = 'Gmol';
    case MEGAMOLE = 'Mmol';
    case KILOMOLE = 'kmol';
    case HECTOMOLE = 'hmol';
    case DECAMOLE = 'damol';
    case MOLE = 'mol';
    case DECIMOLE = 'dmol';
    case CENTIMOLE = 'cmol';
    case MILLIMOLE = 'mmol';
    case MICROMOLE = 'µmol';
    case NANOMOLE = 'nmol';
    case PICOMOLE = 'pmol';
    case FEMTOMOLE = 'fmol';
    case ATTOMOLE = 'amol';
    case ZEPTOMOLE = 'zmol';
    case YOCTOMOLE = 'ymol';
    case QUANTITY = 'qty';

    /**
     * Try to find the measurement from a given alias.
     */
    public static function tryFromAlias(string $alias): ?Measurement
    {
        return match ($alias) {
            'yottamole', 'yottamoles' => self::YOTTAMOLE,
            'zettamole', 'zettamoles' => self::ZETTAMOLE,
            'examole', 'examoles' => self::EXAMOLE,
            'petamole', 'petamoles' => self::PETAMOLE,
            'teramole', 'teramoles' => self::TERAMOLE,
            'gigamole', 'gigamoles' => self::GIGAMOLE,
            'megamole', 'megamoles' => self::MEGAMOLE,
            'kilomole', 'kilomoles' => self::KILOMOLE,
            'hectomole', 'hectomoles' => self::HECTOMOLE,
            'decamole', 'decamoles' => self::DECAMOLE,
            'mole', 'moles' => self::MOLE,
            'decimole', 'decimoles' => self::DECIMOLE,
            'centimole', 'centimoles' => self::CENTIMOLE,
            'millimole', 'millimoles' => self::MILLIMOLE,
            'micromole', 'micromoles' => self::MICROMOLE,
            'nanomole', 'nanomoles' => self::NANOMOLE,
            'picomole', 'picomoles' => self::PICOMOLE,
            'femtomole', 'femtomoles' => self::FEMTOMOLE,
            'attomole', 'attomoles' => self::ATTOMOLE,
            'zeptomole', 'zeptomoles' => self::ZEPTOMOLE,
            'yoctomole', 'yoctomoles' => self::YOCTOMOLE,
            'quantity', 'quantities', 'piece', 'pieces' => self::QUANTITY,
            default => null
        };
    }

    public function getFactor(): float
    {
        return match ($this) {
            self::YOTTAMOLE => 1e24,
            self::ZETTAMOLE => 1e21,
            self::EXAMOLE => 1e18,
            self::PETAMOLE => 1e15,
            self::TERAMOLE => 1e12,
            self::GIGAMOLE => 1e9,
            self::MEGAMOLE => 1e6,
            self::KILOMOLE => 1e3,
            self::HECTOMOLE => 1e2,
            self::DECAMOLE => 1e1,
            self::MOLE, self::QUANTITY => 1, // Assuming 1 quantity represents 1 mole
            self::DECIMOLE => 1e-1,
            self::CENTIMOLE => 1e-2,
            self::MILLIMOLE => 1e-3,
            self::MICROMOLE => 1e-6,
            self::NANOMOLE => 1e-9,
            self::PICOMOLE => 1e-12,
            self::FEMTOMOLE => 1e-15,
            self::ATTOMOLE => 1e-18,
            self::ZEPTOMOLE => 1e-21,
            self::YOCTOMOLE => 1e-24,
        };
    }
}
