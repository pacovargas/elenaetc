<?php
class Provincia{
	public static function getProvincias(){
		$db = new DataBase();
		$sql = "select id, nombre from provincias";
		if($resultado = $db->query($sql))
			return $resultado;
		else
			return false;
	}
}