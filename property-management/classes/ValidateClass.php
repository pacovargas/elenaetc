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

    public static function isEmpty($str)
    {
        if($str == "")
            return true;
        return false;
    }

    public static function isPhone($phone){
        $exp = '/^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/';
        return preg_match($exp, $phone);
    }

    public static function isEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}