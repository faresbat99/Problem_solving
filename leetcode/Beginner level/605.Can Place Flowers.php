<?php

/**
 * @param int[] $flowerbed
 * @param int $n
 * @return Boolean
 */
function canPlaceFlowers(array $flowerbed, int $n)
{
    // $flowerbed[] = 0;
    // array_unshift($flowerbed, 0);
    // for ($i = 1; $i < count($flowerbed) - 1; $i++) {
    //     if ($flowerbed[$i] == 0 and $flowerbed[$i + 1] == 0 and $flowerbed[$i - 1] == 0) {
    //         $n--;
    //         $flowerbed[$i] = 1;
    //     }
    //     if ($n <= 0) {
    //         return true;
    //     }
    // }
    // return false;
    $k = 0;
    for ($i = 0; $i < count($flowerbed) && $k < $n; $i++) {
        if ($flowerbed[$i] == 0 && $flowerbed[$i - 1] !== 1 && $flowerbed[$i + 1] !== 1) {
            $k++;
            $flowerbed[$i] = 1;
        }
    }
    return $k == $n;
}
var_dump(canPlaceFlowers([1, 0, 1, 0, 0], 1));
