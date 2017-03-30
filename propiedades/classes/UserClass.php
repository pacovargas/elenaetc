<?php
class User{
	public static function isLogged(){
		if(isset($_COOKIE["etc_user"]) AND isset($_COOKIE["etc_passwd"])){
			$name = $_COOKIE["etc_user"];
			$passwd = $_COOKIE["etc_passwd"];

			if($name == "" OR $passwd == "")
				return false;
			else{
				$db = new DataBase();
				if($db->connected){
					$sql = "select id from users where username like '$name' and password like '$passwd'";
					if($result = $db->query($sql)){
						User::saveUserId($result[0]["id"]);
						return true;
					}
					else{
						return false;
					}
				}
			}
		}

		return false;
	}

	private static function saveUserId($id){
        setcookie('etc_userid', $id, time()+60*60*24*365);
	}
}