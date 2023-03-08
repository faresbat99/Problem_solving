<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function numIdenticalPairs($nums)
{
    $sum = 0;
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = 1; $j < count($nums); $j++) {

            if ($nums[$i] == $nums[$j] &&$i<$j ) {
                $sum++;
            }
        }
    }
    return $sum;
}
echo numIdenticalPairs([1,1,1,1]);
