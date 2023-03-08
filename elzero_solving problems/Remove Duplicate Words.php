<?php
function remove_duplicate_words($words)
{
    // $wordlist=explode(" ",$words);
    // $unique=array_unique($wordlist);
    // $array=implode(" ",$unique);
    $array = implode(" ", array_unique(explode(" ", $words)));
    return $array;
}
echo remove_duplicate_words("Hello Elzero Web Web Hello School");
