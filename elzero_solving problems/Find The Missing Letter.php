<?php
/*
Logic
Alpha     => abcdefghijklmnopqrstuvwxyz
Given Letters =>    defgi
*/

function find_missing_letter_in($givenLetters){
    $alpha='';
    foreach(range("a","z")as $letter){
    $alpha.=$letter;
    }

    //starting position 
    $start=strpos($alpha,$givenLetters[0]);
    for ($i=0; $i < strlen($givenLetters);$i++) { 
        if($givenLetters[$i]!==$alpha[$start+$i])
        return $alpha[$start+$i];
    }
    return "no missing letter in sequence ";
}

echo find_missing_letter_in("abcd")."<br>";
echo find_missing_letter_in("hijklb")."<br>";
echo find_missing_letter_in("pqrf")."<br>";