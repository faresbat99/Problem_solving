<?php
function longest_word_in($str){
    $result=explode(" ",$str);
    $longestWord='';
    foreach($result as $word):
        if(strlen($longestWord)<strlen($word))
            $longestWord=$word;
    endforeach;
    return $longestWord;
}
echo longest_word_in("In Programming We Love Elzero Academy Tooooooooooo Much");