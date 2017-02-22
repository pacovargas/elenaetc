<?php
class User{
	
	public static function isLogged(){
		if(isset($_COOKIE["etcpm_username"]) AND isset($_COOKIE["etcpm_passwd"])){
			$name = $_COOKIE["etcpm_username"];
			$passwd = $_COOKIE["etcpm_passwd"];

			if($name == "" OR $passwd == "")
				return false;
			else
				return true;
		}

		return false;
	}
}