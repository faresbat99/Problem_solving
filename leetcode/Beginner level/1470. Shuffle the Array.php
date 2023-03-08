<?php

/**
 * @param array[] $nums
 * @param int $n
 * @return array[]
 */
function shuffles($nums, $n)
{

    // for ($i = 0; $i < $n; $i++) {
    //     $sums[] = $nums[$i];
    //     $sums[] = $nums[$i + $n];
    // }
    $sums=[];
    for ($i = 0; $i < $n; $i++) {   
        array_push($sums, $nums[$i], $nums[$i + $n]);
    }
    return $sums;
}
print_r(shuffles([2, 5, 1, 3, 4, 7], 3));
