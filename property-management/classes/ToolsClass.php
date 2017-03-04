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

    public static function getCurrentUrl($params=false){
  		if($params){
	  		return sprintf(
				"%s://%s%s",
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				$_SERVER['SERVER_NAME'],
				dirname($_SERVER["REQUEST_URI"].'?').'/'
			);
		}
		else{
			return sprintf(
				"%s://%s%s",
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				$_SERVER['SERVER_NAME'],
				$_SERVER["REQUEST_URI"]
			);	
		}

    }

    public static function getBaseUrl(){
        $dirs = $_SERVER["REQUEST_URI"];
        $dirs = rtrim($dirs, "/");
        $dirs = ltrim($dirs, "/");
        $exploded = explode("/", $dirs);
        if(strpos($exploded[count($exploded)-1], "=") === false){
            if($_GET['controller'] != "")
                $exploded = array_slice($exploded, 0, count($exploded) - 1);
        }
        else
            $exploded = array_slice($exploded, 0, count($exploded) - 2);
        
        $dirs = "/";
        foreach ($exploded as $dir)
            $dirs .= "$dir/";

        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $dirs
        );  
    }

    public static function redirect($url){
        header("Location: $url");
        die();
    }

    public static function getFileExtension($filename){
        $exploded = explode(".", $filename);
        return strtolower($exploded[count($exploded)-1]);
    }

    public static function fd($object, $type = 'log')
    {
        $types = array('log', 'debug', 'info', 'warn', 'error', 'assert');

        if (!in_array($type, $types)) {
            $type = 'log';
        }

        echo '
            <script type="text/javascript">
                console.'.$type.'('.json_encode($object).');
            </script>
        ';
    }

    public static function dieObject($object, $kill = true)
    {
        echo '<xmp style="text-align: left;">';
        print_r($object);
        echo '</xmp><br />';

        if ($kill) {
            die('END');
        }

        return $object;
    }
}