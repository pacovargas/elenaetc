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

	public static function getNombreById($id){
		$db = new DataBase();
		$sql = "select nombre from provincias where id = $id";
		if($resultado = $db->query($sql))
			return $resultado[0]["nombre"];
		else
			return false;
	}
}