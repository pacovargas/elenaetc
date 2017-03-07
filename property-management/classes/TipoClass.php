<?php
class Tipo{
	public static function getTipos(){
		$db = new DataBase();
		$sql = "select id, nombre from tipos";
		if($resultado = $db->query($sql))
			return $resultado;
		else
			return false;
	}

	public static function getNombreById($id){
		$db = new DataBase();
		$sql = "select nombre from tipos where id = $id";
		if($resultado = $db->query($sql))
			return $resultado[0]["nombre"];
		else
			return false;
	}
}