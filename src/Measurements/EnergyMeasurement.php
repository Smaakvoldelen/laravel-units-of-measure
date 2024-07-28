<?php

namespace Smaakvoldelen\UnitsOfMeasure\Measurements;

use Smaakvoldelen\UnitsOfMeasure\Concerns\HasConversionFactor;
use Smaakvoldelen\UnitsOfMeasure\Measurement;

enum EnergyMeasurement: string implements Measurement
{
    use HasConversionFactor;

    case YOTTAJOULE = 'YJ';
    case ZETTAJOULE = 'ZJ';
    case EXAJOULE = 'EJ';
    case PETAJOULE = 'PJ';
    case TERAJOULE = 'TJ';
    case GIGAJOULE = 'GJ';
    case MEGAJOULE = 'MJ';
    case KILOJOULE = 'kJ';
    case HECTOJOULE = 'hJ';
    case DECAJOULE = 'daJ';
    case JOULE = 'J';
    case DECIJOULE = 'dJ';
    case CENTIJOULE = 'cJ';
    case MILLIJOULE = 'mJ';
    case MICROJOULE = 'µJ';
    case NANOJOULE = 'nJ';
    case PICOJOULE = 'pJ';
    case FEMTOJOULE = 'fJ';
    case ATTOJOULE = 'aJ';
    case ZEPTOJOULE = 'zJ';
    case YOCTOJOULE = 'yJ';
    case YOTTACALORIE = 'YCal';
    case ZETTACALORIE = 'ZCal';
    case EXACALORIE = 'ECal';
    case PETACALORIE = 'PCal';
    case TERACALORIE = 'TCal';
    case GIGACALORIE = 'GCal';
    case MEGACALORIE = 'MCal';
    case KILOCALORIE = 'kCal';
    case HECTOCALORIE = 'hCal';
    case DECACALORIE = 'daCal';
    case CALORIE = 'Cal';
    case DECICALORIE = 'dCal';
    case CENTICALORIE = 'cCal';
    case MILLICALORIE = 'mCal';
    case MICROCALORIE = 'µCal';
    case NANOCALORIE = 'nCal';
    case PICOCALORIE = 'pCal';
    case FEMTOCALORIE = 'fCal';
    case ATTOCALORIE = 'aCal';
    case ZEPTOCALORIE = 'zCal';
    case YOCTOCALORIE = 'yCal';

    /**
     * Try to find the measurement from a given alias.
     */
    public static function tryFromAlias(string $alias): ?Measurement
    {
        return match ($alias) {
            'yottajoule', 'yottajoules' => self::YOTTAJOULE,
            'zettajoule', 'zettajoules' => self::ZETTAJOULE,
            'exajoule', 'exajoules' => self::EXAJOULE,
            'petajoule', 'petajoules' => self::PETAJOULE,
            'terajoule', 'terajoules' => self::TERAJOULE,
            'gigajoule', 'gigajoules' => self::GIGAJOULE,
            'megajoule', 'megajoules' => self::MEGAJOULE,
            'kilojoule', 'kilojoules' => self::KILOJOULE,
            'hectojoule', 'hectojoules' => self::HECTOJOULE,
            'decajoule', 'decajoules' => self::DECAJOULE,
            'joule', 'joules' => self::JOULE,
            'decijoule', 'decijoules' => self::DECIJOULE,
            'centijoule', 'centijoules' => self::CENTIJOULE,
            'millijoule', 'millijoules' => self::MILLIJOULE,
            'microjoule', 'microjoules' => self::MICROJOULE,
            'nanojoule', 'nanojoules' => self::NANOJOULE,
            'picojoule', 'picojoules' => self::PICOJOULE,
            'femtojoule', 'femtojoules' => self::FEMTOJOULE,
            'attojoule', 'attojoules' => self::ATTOJOULE,
            'zeptojoule', 'zeptojoules' => self::ZEPTOJOULE,
            'yoctojoule', 'yoctojoules' => self::YOCTOJOULE,
            'yottacalorie', 'yottacalories' => self::YOTTACALORIE,
            'zettacalorie', 'zettacalories' => self::ZETTACALORIE,
            'exacalorie', 'exacalories' => self::EXACALORIE,
            'petacalorie', 'petacalories' => self::PETACALORIE,
            'teracalorie', 'teracalories' => self::TERACALORIE,
            'gigacalorie', 'gigacalories' => self::GIGACALORIE,
            'megacalorie', 'megacalories' => self::MEGACALORIE,
            'kilocalorie', 'kilocalories' => self::KILOCALORIE,
            'hectocalorie', 'hectocalories' => self::HECTOCALORIE,
            'decacalorie', 'decacalories' => self::DECACALORIE,
            'calorie', 'calories' => self::CALORIE,
            'decicalorie', 'decicalories' => self::DECICALORIE,
            'centicalorie', 'centicalories' => self::CENTICALORIE,
            'millicalorie', 'millicalories' => self::MILLICALORIE,
            'microcalorie', 'microcalories' => self::MICROCALORIE,
            'nanocalorie', 'nanocalories' => self::NANOCALORIE,
            'picocalorie', 'picocalories' => self::PICOCALORIE,
            'femtocalorie', 'femtocalories' => self::FEMTOCALORIE,
            'attocalorie', 'attocalories' => self::ATTOCALORIE,
            'zeptocalorie', 'zeptocalories' => self::ZEPTOCALORIE,
            'yoctocalorie', 'yoctocalories' => self::YOCTOCALORIE,
            default => null,
        };
    }

    public function getFactor(): float
    {
        return match ($this) {
            self::YOTTAJOULE => 1E24,
            self::ZETTAJOULE => 1E21,
            self::EXAJOULE => 1E18,
            self::PETAJOULE => 1E15,
            self::TERAJOULE => 1E12,
            self::GIGAJOULE => 1E9,
            self::MEGAJOULE => 1E6,
            self::KILOJOULE => 1E3,
            self::HECTOJOULE => 1E2,
            self::DECAJOULE => 1E1,
            self::JOULE => 1,
            self::DECIJOULE => 1E-1,
            self::CENTIJOULE => 1E-2,
            self::MILLIJOULE => 1E-3,
            self::MICROJOULE => 1E-6,
            self::NANOJOULE => 1E-9,
            self::PICOJOULE => 1E-12,
            self::FEMTOJOULE => 1E-15,
            self::ATTOJOULE => 1E-18,
            self::ZEPTOJOULE => 1E-21,
            self::YOCTOJOULE => 1E-24,
            self::YOTTACALORIE => 4.184E24,
            self::ZETTACALORIE => 4.184E21,
            self::EXACALORIE => 4.184E18,
            self::PETACALORIE => 4.184E15,
            self::TERACALORIE => 4.184E12,
            self::GIGACALORIE => 4.184E9,
            self::MEGACALORIE => 4.184E6,
            self::KILOCALORIE => 4.184E3,
            self::HECTOCALORIE => 4.184E2,
            self::DECACALORIE => 4.184E1,
            self::CALORIE => 4.184,
            self::DECICALORIE => 4.184E-1,
            self::CENTICALORIE => 4.184E-2,
            self::MILLICALORIE => 4.184E-3,
            self::MICROCALORIE => 4.184E-6,
            self::NANOCALORIE => 4.184E-9,
            self::PICOCALORIE => 4.184E-12,
            self::FEMTOCALORIE => 4.184E-15,
            self::ATTOCALORIE => 4.184E-18,
            self::ZEPTOCALORIE => 4.184E-21,
            self::YOCTOCALORIE => 4.184E-24,
        };
    }
}
