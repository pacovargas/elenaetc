<?php
class Tools{
	public static function getValue($key, $default_value = false)
    {
        if (!isset($key) || empty($key) || !is_string($key)) {
            return false;
        }

        $ret = (isset($_POST[$key]) ? $_POST[$key] : (isset($_GET[$key]) ? $_GET[$key] : $default_value));

        if (is_string($ret)) {
            return stripslashes(urldecode(preg_replace('/((\%5C0+)|(\%00+))/i', '', urlencode($ret))));
        }

        return $ret;
    }

    public static function getControllerName($name){
    	if (!isset($name) || empty($name) || !is_string($name)) {
            return false;
        }
        
        $name = ucwords(strtolower($name)) . "Controller";

        return $name;
    }

    public static function getControllerFileName($name){
    	if (!isset($name) || empty($name) || !is_string($name)) {
            return false;
        }
        
        $name = Tools::getControllerName($name) . ".php";

        return $name;
    }
}