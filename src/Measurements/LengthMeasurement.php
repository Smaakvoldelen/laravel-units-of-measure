<?php

namespace Smaakvoldelen\UnitsOfMeasure\Measurements;

use Smaakvoldelen\UnitsOfMeasure\Concerns\HasConversionFactor;
use Smaakvoldelen\UnitsOfMeasure\Measurement;

enum LengthMeasurement: string implements Measurement
{
    use HasConversionFactor;

    case YOTTAMETER = 'Ym';
    case ZETTAMETER = 'Zm';
    case EXAMETER = 'Em';
    case PETAMETER = 'Pm';
    case TERAMETER = 'Tm';
    case GIGAMETER = 'Gm';
    case MEGAMETER = 'Mm';
    case KILOMETER = 'km';
    case HECTOMETER = 'hm';
    case DECAMETER = 'dam';
    case METER = 'm';
    case DECIMETER = 'dm';
    case CENTIMETER = 'cm';
    case MILLIMETER = 'mm';
    case MICROMETER = 'µm';
    case NANOMETER = 'nm';
    case PICOMETER = 'pm';
    case FEMTOMETER = 'fm';
    case ATTOMETER = 'am';
    case ZEPTOMETER = 'zg';
    case YOCTOMETER = 'yg';

    case YARD = 'yd';
    case CABLE = 'cb';
    case CHAIN = 'ch';
    case FATHOM = 'ftm';
    case FOOT = 'ft';
    case FURLONG = 'fur';
    case INCH = 'in';
    case LINK = 'link';
    case MILE = 'mi';
    case PICA = 'P̸';
    case POINT = 'p';
    case ROD = 'rod';
    case THOU = 'th';
    case LEAGUE = 'lea';

    /**
     * Try to find the measurement from a given alias.
     */
    public static function tryFromAlias(string $alias): ?Measurement
    {
        return match ($alias) {
            'yottameter', 'yottameters', 'yottametre', 'yottametres' => self::YOTTAMETER,
            'zettameter', 'zettameters', 'zettametre', 'zettametres' => self::ZETTAMETER,
            'exameter', 'exameters', 'exametre', 'exametres' => self::EXAMETER,
            'petameter', 'petameters', 'petametre', 'petametres' => self::PETAMETER,
            'terameter', 'terameters', 'terametre', 'terametres' => self::TERAMETER,
            'gigameter', 'gigameters', 'gigametre', 'gigametres' => self::GIGAMETER,
            'megameter', 'megameters', 'megametre', 'megametres' => self::MEGAMETER,
            'kilometer', 'kilometers', 'kilometre', 'kilometres' => self::KILOMETER,
            'hectometer', 'hectometers', 'hectometre', 'hectometres' => self::HECTOMETER,
            'decameter', 'decameters', 'decametre', 'decametres' => self::DECAMETER,
            'meter', 'meters', 'metre', 'metres' => self::METER,
            'decimeter', 'decimeters', 'decimetre', 'decimetres' => self::DECIMETER,
            'centimeter', 'centimeters', 'centimetre', 'centimetres' => self::CENTIMETER,
            'millimeter', 'millimeters', 'millimetre', 'millimetres' => self::MILLIMETER,
            'micrometer', 'micrometers', 'micrometre', 'micrometres' => self::MICROMETER,
            'nanometer', 'nanometers', 'nanometre', 'nanometres' => self::NANOMETER,
            'picometer', 'picometers', 'picometre', 'picometres' => self::PICOMETER,
            'femtometer', 'femtometers', 'femtometre', 'femtometres' => self::FEMTOMETER,
            'attometer', 'attometers', 'attometre', 'attometres' => self::ATTOMETER,
            'zeptometer', 'zeptometers', 'zeptometre', 'zeptometres' => self::ZEPTOMETER,
            'yoctometer', 'yoctometers', 'yoctometre', 'yoctometres' => self::YOCTOMETER,
            default => null
        };
    }

    /**
     * Get the factor for the measurement.
     */
    public function getFactor(): float
    {
        return match ($this) {
            self::YOTTAMETER => 1e24,
            self::ZETTAMETER => 1e21,
            self::EXAMETER => 1e18,
            self::PETAMETER => 1e15,
            self::TERAMETER => 1e12,
            self::GIGAMETER => 1e9,
            self::MEGAMETER => 1e6,
            self::KILOMETER => 1e3,
            self::HECTOMETER => 1e2,
            self::DECAMETER => 1e1,
            self::METER => 1,
            self::DECIMETER => 1e-1,
            self::CENTIMETER => 1e-2,
            self::MILLIMETER => 1e-3,
            self::MICROMETER => 1e-6,
            self::NANOMETER => 1e-9,
            self::PICOMETER => 1e-12,
            self::FEMTOMETER => 1e-15,
            self::ATTOMETER => 1e-18,
            self::ZEPTOMETER => 1e-21,
            self::YOCTOMETER => 1e-24,
            self::YARD => 0.9144,
            self::CABLE => 185.2,
            self::CHAIN => 20.1168,
            self::FATHOM => 1.8288,
            self::FOOT => 0.3048,
            self::FURLONG => 201.168,
            self::INCH => 0.0254,
            self::LINK => 0.201168,
            self::MILE => 1609.344,
            self::PICA => 0.00423333,
            self::POINT => 0.000352778,
            self::ROD => 5.0292,
            self::THOU => 0.0000254,
            self::LEAGUE => 4828.032,
        };
    }
}
