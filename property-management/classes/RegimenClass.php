<?php
class Regimen{
	public static function getRegimenes(){
		$db = new DataBase();
		$sql = "select id, nombre from regimenes";
		if($resultado = $db->query($sql))
			return $resultado;
		else
			return false;
	}
}