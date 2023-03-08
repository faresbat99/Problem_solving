<?php

/**
 * @param String $address
 * @return String
 */
// This function takes a string representing an IP address as an argument and
// returns a string with the periods replaced by "[.]". 
// This is useful for preventing malicious code from being executed when an IP address is used in a URL.
function defangIPaddr($address)
{
    // return strtr($address, ["." => "[.]"]);
    return str_replace(".", "[.]", $address);
}
echo defangIPaddr("1.1.1.1");
