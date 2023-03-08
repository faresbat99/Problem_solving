<?php
//solution 1
function convert($n){
    //split
    $stringsplit=str_split($n);
    $arrayToString=array_map("intval",$stringsplit);
    $array=array_reverse($arrayToString);
    return $array;
}
//solution 2
function converts($n){
    //split
    $stringsplit=str_split($n);
    $empty=[];
    foreach($stringsplit as $str)
    array_unshift($empty,intval($str));

    // $array=array_reverse($arrayToString);
    return $empty;
}

echo "<pre>";
echo var_dump(convert(564987654));
echo var_dump(converts(564987654));
echo "</pre>";
