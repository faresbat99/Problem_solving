<?php
function containsDuplicate(array $nums)
{
    $array = array_count_values($nums);
    foreach ($array as $digit) {
        if ($digit >= 2) {
            return true;
        }
    }
    return false;
}
var_dump(containsDuplicate([1, 2, 4, 3]));
