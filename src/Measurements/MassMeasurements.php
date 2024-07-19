<?php

namespace Smaakvoldelen\UnitsOfMeasure\Measurements;

use Smaakvoldelen\UnitsOfMeasure\Concerns\HasConversionFactor;
use Smaakvoldelen\UnitsOfMeasure\Measurement;

enum MassMeasurements: string implements Measurement
{
    use HasConversionFactor;

    case YOTTAGRAM = 'Yg';
    case ZETTAGRAM = 'Zg';
    case EXAGRAM = 'Eg';
    case PETAGRAM = 'Pg';
    case TERAGRAM = 'Tg';
    case GIGAGRAM = 'Gg';
    case MEGAGRAM = 'Mg';
    case KILOGRAM = 'kg';
    case HECTOGRAM = 'hg';
    case DECAGRAM = 'dag';
    case GRAM = 'g';
    case DECIGRAM = 'dg';
    case CENTIGRAM = 'cg';
    case MILLIGRAM = 'mg';
    case MICROGRAM = 'µg';
    case NANOGRAM = 'ng';
    case PICOGRAM = 'pg';
    case FEMTOGRAM = 'fg';
    case ATTOGRAM = 'ag';
    case ZEPTOGRAM = 'zg';
    case YOCTOGRAM = 'yg';
    case TONNE = 't';
    case GRAIN = 'gr';
    case DRACHM = 'dr';
    case OUNCE = 'oz';
    case POUND = 'lb';
    case STONE = 'st';
    case QUARTER = 'qr';
    case SHORTHUNDREDWEIGHT = 'short cwt';
    case LONGHUNDREDWEIGHT = 'long cwt';
    case SHORTTON = 'short ton';
    case LONGTON = 'long ton';

    /**
     * Try to find the measurement from a given alias.
     */
    public static function tryFromAlias(string $alias): ?Measurement
    {
        return match ($alias) {
            'yottagram', 'yottagrams' => self::YOTTAGRAM,
            'zettagram', 'zettagrams' => self::ZETTAGRAM,
            'exagram', 'exagrams' => self::EXAGRAM,
            'petagram', 'petagrams' => self::PETAGRAM,
            'teragram', 'teragrams' => self::TERAGRAM,
            'gigagram', 'gigagrams' => self::GIGAGRAM,
            'megagram', 'megagrams' => self::MEGAGRAM,
            'kilogram', 'kilograms' => self::KILOGRAM,
            'hectogram', 'hectograms' => self::HECTOGRAM,
            'decagram', 'decagrams' => self::DECAGRAM,
            'gram', 'grams' => self::GRAM,
            'decigram', 'decigrams' => self::DECIGRAM,
            'centigram', 'centigrams' => self::CENTIGRAM,
            'milligram', 'milligrams' => self::MILLIGRAM,
            'microgram', 'micrograms' => self::MICROGRAM,
            'nanogram', 'nanograms' => self::NANOGRAM,
            'picogram', 'picograms' => self::PICOGRAM,
            'femtogram', 'femtograms' => self::FEMTOGRAM,
            'attogram', 'attograms' => self::ATTOGRAM,
            'zeptogram', 'zeptograms' => self::ZEPTOGRAM,
            'yoctogram', 'yoctograms' => self::YOCTOGRAM,
            'tonne', 'tonnes' => self::TONNE,
            'grain', 'grains' => self::GRAIN,
            'drachm', 'drachms' => self::DRACHM,
            'ounce', 'ounces' => self::OUNCE,
            'pound', 'pounds' => self::POUND,
            'stone', 'stones' => self::STONE,
            'quarter', 'quarters' => self::QUARTER,
            'short hundredweight', 'short hundredweights' => self::SHORTHUNDREDWEIGHT,
            'long hundredweight', 'long hundredweights' => self::LONGHUNDREDWEIGHT,
            'short ton', 'short tons' => self::SHORTTON,
            'long ton', 'long tons' => self::LONGTON,
            default => null,
        };
    }

    public function getFactor(): float
    {
        return match ($this) {
            self::YOTTAGRAM => 1E21,
            self::ZETTAGRAM => 1E18,
            self::EXAGRAM => 1E15,
            self::PETAGRAM => 1E12,
            self::TERAGRAM => 1E9,
            self::GIGAGRAM => 1E6,
            self::MEGAGRAM, self::TONNE => 1E3,
            self::KILOGRAM => 1,
            self::HECTOGRAM => 1E-1,
            self::DECAGRAM => 1E-2,
            self::GRAM => 1E-3,
            self::DECIGRAM => 1E-4,
            self::CENTIGRAM => 1E-5,
            self::MILLIGRAM => 1E-6,
            self::MICROGRAM => 1E-9,
            self::NANOGRAM => 1E-12,
            self::PICOGRAM => 1E-15,
            self::FEMTOGRAM => 1E-18,
            self::ATTOGRAM => 1E-21,
            self::ZEPTOGRAM => 1E-24,
            self::YOCTOGRAM => 1E-27,
            self::GRAIN => 4.5359237e-1 / 7000,
            self::DRACHM => 4.5359237e-1 / 256,
            self::OUNCE => 4.5359237e-1 / 16,
            self::POUND => 4.5359237e-1,
            self::STONE => 4.5359237e-1 * 14,
            self::QUARTER => 4.5359237e-1 * 28,
            self::SHORTHUNDREDWEIGHT => 4.5359237e-1 * 100,
            self::LONGHUNDREDWEIGHT => 4.5359237e-1 * 112,
            self::SHORTTON => 4.5359237e-1 * 2000,
            self::LONGTON => 4.5359237e-1 * 2240,
        };
    }
}
