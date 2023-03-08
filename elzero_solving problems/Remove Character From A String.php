<?php

function remove_char_from($str,$c){
    $array=str_replace([strtolower($c),strtoupper($c)],"",$str);
return $array;

}
function remove_char_from2($str,$c){
    $wordlist=str_split($str);
    $empty="";
    foreach($wordlist as $word):
    if($word!=strtolower($c)&&$word!=strtoupper($c))
    $empty.=$word;
    endforeach;
return $empty;

}
echo remove_char_from("ElddzeroD WebDD ddSchool", "d")."<br>"; // Elzero Web School
echo remove_char_from("ElxzeroX Web Sxchool", "x")."<br>"; // Elzero Web School
echo remove_char_from("Elzero@ Web@@ @@School", "@")."<br>"; // Elzero Web School
echo "<b>Fundamental solution</b> "."<br>";
echo remove_char_from2("ElddzeroD WebDD ddSchool", "d")."<br>"; // Elzero Web School
echo remove_char_from2("ElxzeroX Web Sxchool", "x")."<br>"; // Elzero Web School
echo remove_char_from2("Elzero@ Web@@ @@School", "@")."<br>"; // Elzero Web School