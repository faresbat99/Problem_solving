<?php

/**
 * Calculate the Hamming Distance between two DNA strands.
 * [1] if condition to make sure they are equal
 * [2] str_split => get string into array
 * [3] array_diff_assoc => get different between two arrays and return array has the different 
 * [3] count => how many value in array
 * 
 * @param string $strandA
 * @param string $strandB
 * @return integer
 */
function distance(string $strandA, string $strandB): int
{

    if (strlen($strandA) == strlen($strandB)) {

        // print_r(array_diff_assoc(str_split($strandA), str_split($strandB)));
        return count(array_diff_assoc(str_split($strandA), str_split($strandB)));
    } else {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
}

echo (distance("GAGCCTACTAACGGGAT", "CATCGTAATGACGGCCT"));
