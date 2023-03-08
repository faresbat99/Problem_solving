<?php

/**
 * @param string $jewels
 * @param string $stones
 * @return int
 */
function numJewelsInStones($jewels, $stones)
{
    // $sum = 0;
    // for ($i = 0; $i < strlen($jewels); $i++) {
    //     for ($j = 0; $j < strlen($stones); $j++) {
    //         if ($jewels[$i] === $stones[$j]) {
    //             $sum++;
    //         }
    //     }
    // }
    // return $sum;
    // or
    $jewels_arr = str_split($jewels);
    $stones_arr = str_split($stones);
    $count = 0;
    foreach ($jewels_arr as $jewel) {
        // array_count_values return array that key is [name] of char and value is it's [count]
        //$count += array_count_values(a)[a] =>1
        //$count += array_count_values(A)[A] =>2
        //$count =3
        $count += array_count_values($stones_arr)[$jewel];
    }

    return $count;
}
















echo numJewelsInStones("aA", "aAAbbbb");
