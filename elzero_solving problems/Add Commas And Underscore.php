<?php 
function add_commas_and_underscore($num)    {
    $result=number_format($num);
    if(strlen($num)>3)
    $result[-4]="_";
    return $result;
}
echo add_commas_and_underscore(120)."<br>"; // 120
echo add_commas_and_underscore(1530)."<br>"; // 1_530
echo add_commas_and_underscore(120510650)."<br>"; // 120,510_650
echo add_commas_and_underscore(510650480910)."<br>"; // 510,650,480_910
echo add_commas_and_underscore(12069057014032)."<br>"; // 12,069,057,014_032