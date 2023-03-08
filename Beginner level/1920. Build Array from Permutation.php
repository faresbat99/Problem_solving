<?php

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function buildArray($nums)
{
    // $sum = [];
    // for ($i = 0; $i < count($nums); $i++) {
    //     array_push($sum, $nums[$nums[$i]]);
    // }
    // return $sum;
    // or
    $sum = [];
    foreach ($nums as $value) {
        $sum[] = $nums[$value];
    }
    return $sum;
}
print_r(buildArray([0, 2, 1, 5, 3, 4]));
