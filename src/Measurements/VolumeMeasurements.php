<?php

namespace Smaakvoldelen\UnitsOfMeasure\Measurements;

use Smaakvoldelen\UnitsOfMeasure\Concerns\HasConversionFactor;
use Smaakvoldelen\UnitsOfMeasure\Measurement;

enum VolumeMeasurements: string implements Measurement
{
    use HasConversionFactor;

    case CUBIC_YOTTAMETER = 'Ym3';
    case CUBIC_ZETTAMETER = 'Zm3';
    case CUBIC_EXAMETER = 'Em3';
    case CUBIC_PETAMETER = 'Pm3';
    case CUBIC_TERAMETER = 'Tm3';
    case CUBIC_GIGAMETER = 'Gm3';
    case CUBIC_MEGAMETER = 'Mm3';
    case CUBIC_KILOMETER = 'km3';
    case CUBIC_HECTOMETER = 'hm3';
    case CUBIC_DECAMETER = 'dam3';
    case CUBIC_METER = 'm3';
    case CUBIC_DECIMETER = 'dm3';
    case CUBIC_CENTIMETER = 'cm3';
    case CUBIC_MILLIMETER = 'mm3';
    case CUBIC_MICROMETER = 'µm3';
    case CUBIC_NANOMETER = 'nm3';
    case CUBIC_PICOMETER = 'pm3';
    case CUBIC_FEMTOMETER = 'fm3';
    case CUBIC_ATTOMETER = 'am3';
    case CUBIC_ZEPTOMETER = 'zm3';
    case CUBIC_YOCTOMETER = 'ym3';
    case YOTTALITER = 'Yl';
    case ZETTALITER = 'Zl';
    case EXALITER = 'El';
    case PETALITER = 'Pl';
    case TERALITER = 'Tl';
    case GIGALITER = 'Gl';
    case MEGALITER = 'Ml';
    case KILOLITER = 'kl';
    case HECTOLITER = 'hl';
    case DECALITER = 'dal';
    case LITER = 'l';
    case DECILITER = 'dl';
    case CENTILITER = 'cl';
    case MILLILITER = 'ml';
    case MICROLITER = 'µl';
    case NANOLITER = 'nl';
    case PICOLITER = 'pl';
    case FEMTOLITER = 'fl';
    case ATTOLITER = 'al';
    case ZEPTOLITER = 'zl';
    case YOCTOLITER = 'yl';
    case CUBIC_INCH = 'in3';
    case CUBIC_FOOT = 'ft3';
    case CUBIC_YARD = 'yd3';
    case ACRE_FOOT = 'acre ft';
    case GALLON = 'gal';
    case QUART = 'qt';
    case PINT = 'pt';
    case GILL = 'gi';
    case FLUID_DRACHM = 'fl dr';
    case FLUID_OUNCE = 'fl oz';
    case FLUID_SCRUPLE = 'fl s';
    case DRY_PINT = 'dry pt';
    case DRY_QUART = 'dry qt';
    case DRY_BARREL = 'dry bbl';
    case DRY_GALLON = 'dry gal';
    case PACK = 'pk';
    case MINIM = 'minim';
    case BUSHEL = 'bu';
    case HOGSHEAD = 'hogshead';
    case LIQUID_BARREL = 'liquid bbl';
    case OIL_BARREL = 'oil bbl';
    case TABLESPOON = 'Tbsp';
    case TEASPOON = 'tsp';
    case CUP = 'cp';
    case LIQUID_GALLON = 'liquid gal';
    case LIQUID_PINT = 'liquid pt';
    case LIQUID_QUART = 'liquid qt';
    case SHOT = 'shot';

    /**
     * Try to find the measurement from a given alias.
     */
    public static function tryFromAlias(string $alias): ?Measurement
    {
        return match ($alias) {
            'cubic yottameter', 'cubic yottameters' => self::CUBIC_YOTTAMETER,
            'cubic zettameter', 'cubic zettameters' => self::CUBIC_ZETTAMETER,
            'cubic exameter', 'cubic exameters' => self::CUBIC_EXAMETER,
            'cubic petameter', 'cubic petameters' => self::CUBIC_PETAMETER,
            'cubic terameter', 'cubic terameters' => self::CUBIC_TERAMETER,
            'cubic gigameter', 'cubic gigameters' => self::CUBIC_GIGAMETER,
            'cubic megameter', 'cubic megameters' => self::CUBIC_MEGAMETER,
            'cubic kilometer', 'cubic kilometers' => self::CUBIC_KILOMETER,
            'cubic hectometer', 'cubic hectometers' => self::CUBIC_HECTOMETER,
            'cubic decameter', 'cubic decameters' => self::CUBIC_DECAMETER,
            'cubic meter', 'cubic meters' => self::CUBIC_METER,
            'cubic decimeter', 'cubic decimeters' => self::CUBIC_DECIMETER,
            'cubic centimeter', 'cubic centimeters' => self::CUBIC_CENTIMETER,
            'cubic millimeter', 'cubic millimeters' => self::CUBIC_MILLIMETER,
            'cubic micrometer', 'cubic micrometers' => self::CUBIC_MICROMETER,
            'cubic nanometer', 'cubic nanometers' => self::CUBIC_NANOMETER,
            'cubic picometer', 'cubic picometers' => self::CUBIC_PICOMETER,
            'cubic femtometer', 'cubic femtometers' => self::CUBIC_FEMTOMETER,
            'cubic attometer', 'cubic attometers' => self::CUBIC_ATTOMETER,
            'cubic zeptometer', 'cubic zeptometers' => self::CUBIC_ZEPTOMETER,
            'cubic yoctometer', 'cubic yoctometers' => self::CUBIC_YOCTOMETER,
            'yottaliter', 'yottaliters', 'yottalitre', 'yottalitres' => self::YOTTALITER,
            'zettaliter', 'zettaliters', 'zettalitre', 'zettalitres' => self::ZETTALITER,
            'exaliter', 'exaliters', 'exalitre', 'exalitres' => self::EXALITER,
            'petaliter', 'petaliters', 'petalitre', 'petalitres' => self::PETALITER,
            'teraliter', 'teraliters', 'teralitre', 'teralitres' => self::TERALITER,
            'gigaliter', 'gigaliters', 'gigalitre', 'gigalitres' => self::GIGALITER,
            'megaliter', 'megaliters', 'megalitre', 'megalitres' => self::MEGALITER,
            'kiloliter', 'kiloliters', 'kilolitre', 'kilolitres' => self::KILOLITER,
            'hectoliter', 'hectoliters', 'hectolitre', 'hectolitres' => self::HECTOLITER,
            'decaliter', 'decaliters', 'decalitre', 'decalitres' => self::DECALITER,
            'liter', 'liters', 'litre', 'litres' => self::LITER,
            'deciliter', 'deciliters', 'decilitre', 'decilitres' => self::DECILITER,
            'centiliter', 'centiliters', 'centilitre', 'centilitres' => self::CENTILITER,
            'milliliter', 'milliliters', 'millilitre', 'millilitres' => self::MILLILITER,
            'microliter', 'microliters', 'microlitre', 'microlitres' => self::MICROLITER,
            'nanoliter', 'nanoliters', 'nanolitre', 'nanolitres' => self::NANOLITER,
            'picoliter', 'picoliters', 'picolitre', 'picolitres' => self::PICOLITER,
            'femtoliter', 'femtoliters', 'femtolitre', 'femtolitres' => self::FEMTOLITER,
            'attoliter', 'attoliters', 'attolitre', 'attolitres' => self::ATTOLITER,
            'zeptoliter', 'zeptoliters', 'zeptolitre', 'zeptolitres' => self::ZEPTOLITER,
            'yoctoliter', 'yoctoliters', 'yoctolitre', 'yoctolitres' => self::YOCTOLITER,
            'cubic inch', 'cubic inches' => self::CUBIC_INCH,
            'cubic foot', 'cubic feet' => self::CUBIC_FOOT,
            'cubic yard', 'cubic yards' => self::CUBIC_YARD,
            'acre foot', 'acre feet' => self::ACRE_FOOT,
            'gallon', 'gallons' => self::GALLON,
            'quart', 'quarts' => self::QUART,
            'pint', 'pints' => self::PINT,
            'gill', 'gills' => self::GILL,
            'fluid drachm', 'fluid drachms' => self::FLUID_DRACHM,
            'fluid ounce', 'fluid ounces' => self::FLUID_OUNCE,
            'fluid scruple', 'fluid scruples' => self::FLUID_SCRUPLE,
            'dry pint', 'dry pints' => self::DRY_PINT,
            'dry quart', 'dry quarts' => self::DRY_QUART,
            'dry barrel', 'dry barrels' => self::DRY_BARREL,
            'dry gallon', 'dry gallons' => self::DRY_GALLON,
            'pack', 'packs' => self::PACK,
            'minim', 'minims' => self::MINIM,
            'bushel', 'bushels' => self::BUSHEL,
            'hogshead', 'hogsheads' => self::HOGSHEAD,
            'liquid barrel', 'liquid barrels' => self::LIQUID_BARREL,
            'oil barrel', 'oil barrels' => self::OIL_BARREL,
            'tablespoon', 'tablespoons' => self::TABLESPOON,
            'teaspoon', 'teaspoons' => self::TEASPOON,
            'cup', 'cups' => self::CUP,
            'liquid gallon', 'liquid gallons' => self::LIQUID_GALLON,
            'liquid pint', 'liquid pints' => self::LIQUID_PINT,
            'liquid quart', 'liquid quarts' => self::LIQUID_QUART,
            'shot', 'shots' => self::SHOT,
            default => null
        };
    }

    /**
     * Get the factor for the measurement.
     */
    public function getFactor(): float
    {
        return match ($this) {
            self::CUBIC_YOTTAMETER => 1E72,
            self::CUBIC_ZETTAMETER => 1E63,
            self::CUBIC_EXAMETER => 1E54,
            self::CUBIC_PETAMETER => 1E45,
            self::CUBIC_TERAMETER => 1E36,
            self::CUBIC_GIGAMETER => 1E27,
            self::CUBIC_MEGAMETER => 1E18,
            self::CUBIC_KILOMETER => 1E9,
            self::CUBIC_HECTOMETER => 1E6,
            self::CUBIC_DECAMETER => 1E3,
            self::CUBIC_METER => 1,
            self::CUBIC_DECIMETER => 1E-3,
            self::CUBIC_CENTIMETER => 1E-6,
            self::CUBIC_MILLIMETER => 1E-9,
            self::CUBIC_MICROMETER => 1E-18,
            self::CUBIC_NANOMETER => 1E-27,
            self::CUBIC_PICOMETER => 1E-36,
            self::CUBIC_FEMTOMETER => 1E-45,
            self::CUBIC_ATTOMETER => 1E-54,
            self::CUBIC_ZEPTOMETER => 1E-63,
            self::CUBIC_YOCTOMETER => 1E-72,
            self::YOTTALITER => 1E21,
            self::ZETTALITER => 1E18,
            self::EXALITER => 1E15,
            self::PETALITER => 1E12,
            self::TERALITER => 1E9,
            self::GIGALITER => 1E6,
            self::MEGALITER => 1E3,
            self::KILOLITER => 1,
            self::HECTOLITER => 1E-1,
            self::DECALITER => 1E-2,
            self::LITER => 1E-3,
            self::DECILITER => 1E-4,
            self::CENTILITER => 1E-5,
            self::MILLILITER => 1E-6,
            self::MICROLITER => 1E-9,
            self::NANOLITER => 1E-12,
            self::PICOLITER => 1E-15,
            self::FEMTOLITER => 1E-18,
            self::ATTOLITER => 1E-21,
            self::ZEPTOLITER => 1E-24,
            self::YOCTOLITER => 1E-27,
            self::CUBIC_INCH => 1.63871E-5,
            self::CUBIC_FOOT => 1.63871E-5 * 1728,
            self::CUBIC_YARD => 1.63871E-5 * 46656,
            self::ACRE_FOOT => 1233.48184,
            self::GALLON, self::LIQUID_GALLON => 3.785411784,
            self::QUART, self::LIQUID_QUART => 0.946352946,
            self::PINT, self::LIQUID_PINT => 0.473176473,
            self::GILL => 0.118294118,
            self::FLUID_OUNCE => 0.0295735296,
            self::FLUID_DRACHM => 0.00369669119,
            self::FLUID_SCRUPLE => 0.0012322304,
            self::MINIM => 0.0000616115,
            self::DRY_PINT => 0.550610471,
            self::DRY_QUART => 1.101220942,
            self::DRY_GALLON => 4.40488377,
            self::DRY_BARREL => 115.6271,
            self::PACK => 8.80976754172,
            self::BUSHEL => 35.23907016688,
            self::HOGSHEAD => 238.480942392,
            self::LIQUID_BARREL => 119.2404712,
            self::OIL_BARREL => 158.9872949,
            self::TABLESPOON => 0.0147867648,
            self::TEASPOON => 0.00492892159,
            self::CUP => 0.236588237,
            self::SHOT => 0.0443602943,
        };
    }

    /**
     * Get the symbol for the measurement.
     */
    public function getSymbol(): string
    {
        return $this->value;
    }
}
