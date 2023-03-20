<?php
require_once __DIR__.'/vendor/autoload.php';
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
function containsDuplicate2(array $nums)
{
    $set = new \Ds\Set();
    $n = count($nums);
    for ($i = 0; $i < $n; $i++) {
        if ($set->contains($nums[$i])) {
            return true;
        }
        $set->add($nums[$i]);
    }
    return false;
}
var_dump(containsDuplicate2([1, 2, 3, 4]));
