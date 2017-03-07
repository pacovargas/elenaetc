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

	public static function getExistingProvincias(){
		$db = new DataBase();
		$sql = "select distinct m.id, m.nombre
		from propiedades as p
		join provincias as m on p.provincia = m.id
		order by m.nombre asc";
		return $db->query($sql);	
	}
}