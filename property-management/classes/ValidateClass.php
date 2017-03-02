<?php
class validate{
    public static function isGenericName($name)
    {
        if($name == "")
            return false;
        return true;
    }

    public static function isPasswd($passwd, $size = 1)
    {
        return (strlen($passwd) >= $size && strlen($passwd) < 255);
    }

    public static function isInteger($num){
        return ctype_digit($num);
    }
}