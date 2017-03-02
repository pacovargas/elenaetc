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

	public static function getNombreById($id){
		$db = new DataBase();
		$sql = "select nombre from regimenes where id = $id";
		if($resultado = $db->query($sql))
			return $resultado[0]["nombre"];
		else
			return false;
	}
}