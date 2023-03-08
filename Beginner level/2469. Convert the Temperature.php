<?php

declare(strict_types=1);
/**
 * This function takes in a temperature in Celsius and converts it to both Kelvin and Fahrenheit.
 * It then returns an array containing both the Kelvin and Fahrenheit temperatures.

 * @param Float $celsius
 * @return Float[]
 */

function convertTemperature($celsius)
{
    // $Kelvin = $celsius + 273.15;
    // $Fahrenheit = $celsius * 1.80 + 32.00;
    // return [$Kelvin,$Fahrenheit];
    return [$celsius + 273.15, $celsius * 1.80 + 32.00];
}
print_r(convertTemperature(36.50));
