<?php

/**
 * @param String[] $operations
 * @return Integer
 */
function finalValueAfterOperations($operations)
{

    // $x = 0;
    // foreach ($operations as $value) {
    //     # code...

    //     switch ($value) {
    //         case "++X":
    //         case "X++":
    //             $x = $x + 1;
    //             break;
    //         case "--X":
    //         case "X--":
    //             $x = $x - 1;
    //             break;
    //     }
    // }
    // return $x;
    // or
    // str_replace("+","0",$operations,$count1);
    // str_replace("-","0",$operations,$count2);
    // return ($count1-$count2)/2;
    // or
    $x = 0;
    foreach ($operations as  $value) {
        $value[1] == "+" ? $x++ : $x--;
    }
    return $x;
}
print_r(finalValueAfterOperations(["++X", "++X", "X++"]));
