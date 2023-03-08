<?php

/**
 * @param int[] $nums
 * @return int[]
 */
function leftRightDifference($nums)
{
    // $left = [];
    // $sum = 0;
    // for ($i = 0; $i < count($nums); $i++) {
    //     $left[]=$sum;
    //     $sum+=$nums[$i];
    // }
    // $right = [];
    // $sum = 0;
    // for ($i = count($nums) - 1; $i >= 0; $i--) {
    //     $right[$i]=$sum;  // focus انك تخليه يقرا من اليمين تخلي المصفوفه من العكس و تخلي اخر عنصر هو الصفر في الحاله دي الصفر هو ال سمم
    //     $sum+=$nums[$i];
    // }
    // $total = [];
    // for ($i = 0; $i < count($nums); $i++) {
    //     $total[]=abs($left[$i]-$right[$i]);
    // }
    // return $total;


    // or 
    $l = [0];
    $c = count($nums);
    $s = 0;
    
    for($i = 0; $i < $c - 1; $i++) 
        $l[] = $s +=$nums[$i];
    
    $s = 0;
    $r = [];
    for($i = $c - 1; $i > 0; $i--) 
        $r[] = $s +=$nums[$i];
    
    $r = array_reverse($r);
    
    $r[] = 0;        
    $t = [];
    for($i = 0; $i < $c; $i++)
        $t[] = abs($l[$i] - $r[$i]);
    
    return $t;
}
print_r(leftRightDifference([10, 4, 8, 3]));
// Input: nums = [10,4,8,3]
// Output: [15,1,11,22]
// Explanation: The array leftSum is [0,10,14,22] and the array rightSum is [15,11,3,0].
// The array answer is [|0 - 15|,|10 - 11|,|14 - 3|,|22 - 0|] = [15,1,11,22].


