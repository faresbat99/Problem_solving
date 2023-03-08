<?php

/**
 * @param int[] $nums
 * @return int[]
 */
function runningSum($nums)
{
    // $sum=[];
    // $count=0;
    // for ($i=0; $i < count($nums); $i++) { 
    //     $count+=$nums[$i];
    //     $sum[]=$count;
    // }
    // return $sum;
    // or
    // الاول بيساوي الاول 
    $runningSum[0] = $nums[0];
    for ($i = 1; $i < count($nums); $i++) { // خد بالك انك معاك اول عنصر كدا كدا فا مش محتاج تبدأ من الصفر
        //  $runningSum[$i] = $nums[$i] + $runningSum[$i - 1];
        //  $runningSum[$i] = second element + before the second element;
        // first round
        //  $runningSum[1] = 2 + 1; =>3
        // second round
        //  $runningSum[2] = 3 + 3 the $runningSum; =>6
        // don't forget the first $runningSum[0]= the first element in $nums 👀 

        $runningSum[$i] = $nums[$i] + $runningSum[$i - 1];
    }
    return $runningSum;
}

print_r(runningSum([1, 2, 3, 4]));
// Input: nums = [1,2,3,4]
// Output: [1,3,6,10]
// Explanation: Running sum is obtained as follows: [1, 1+2, 1+2+3, 1+2+3+4].