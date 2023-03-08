<?php



/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function getConcatenation($nums)
{
    // $sum=$nums;
    //     for ($i = 0; $i < count($nums); $i++) {
    //         array_push($sum, $nums[$i]);
    //     }
    //     return $sum;

    return array_merge($nums, $nums);
}

print_r(getConcatenation([1, 2, 1]));
