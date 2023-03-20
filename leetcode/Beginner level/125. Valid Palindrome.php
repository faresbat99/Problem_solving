<?php
function isPalindrome(string $s)
{
    // $new = "";
    // for ($i = 0; $i < strlen($s); $i++) {
    //     if (is_numeric($s[$i]) or ctype_alpha($s[$i])) {
    //         $new .= strtolower($s[$i]);
    //     }
    // }
    // return $new == strrev($new);

    // /**
    //  * two Pointer
    //  * 1 هتحدد البدايه و النهايه 
    //  * 2 لووب ان الشمال اصغر من اليمين 
    //  * 3 طول ما الشمال اصغر من اليمين و محقق الشرط يمشي  ==> left
    //  * 4 طول ما الشمال اغير من اليمين و محقق الشرط يمشي من يمين  ==> right
    //  * 5 اعمل الشرط وفي الحاله دي لو ميساووش بعض ادي غلط 
    //  * 6 ولو مدخلش اللووب معناها انه خلص و هما فعلا زي بعض 
    //  */

    $l = 0;
    $r = strlen($s) - 1;
    while ($l < $r) {
        while ($l < $r and !is_alpha($s[$l])) {
            $l++;
        }
        while ($l < $r and !is_alpha($s[$r])) {
            $r--;
        }
        if (strtolower($s[$l]) != strtolower($s[$r])) {
            return false;
        }
        $l++;
        $r--;
    }
    return true;
}
/**
 * chech if it is alpha or not
 *
 * @param string $s
 * @return boolean
 */
function is_alpha(string $s)
{

    $lString = range(ord('a'), ord('z'));
    $uString = range(ord('A'), ord('Z'));
    $num = range(ord('0'), ord('9'));
    return in_array(ord($s), $lString) or in_array(ord($s), $uString) or in_array(ord($s), $num);
}

var_dump(isPalindrome("A man, a plan, a canal: Panama"));
