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

	public static function getExistingTipos($solo_activas = false){
		$db = new DataBase();
		if($solo_activas){
			$sql = "select distinct m.id, m.nombre
			from propiedades as p
			join tipos as m on p.tipo = m.id
			and p.activa = 1
			order by m.nombre asc";	
		}
		else{
			$sql = "select distinct m.id, m.nombre
			from propiedades as p
			join tipos as m on p.tipo = m.id
			order by m.nombre asc";
		}
		
		return $db->query($sql);	
	}
}