<?php
class Municipio{
	public static function getMunicipiosByProvincias(){
		$db = new DataBase();
		$sql = "select id, nombre, provincia from municipios";
		if($resultado = $db->query($sql)){
			$ret = array();
			foreach ($resultado as $mun){
				$ret[$mun['provincia']][] = array(
					"id" => $mun["id"],
					"nombre" => $mun["nombre"]
				);
			}
			return $ret;
		}
		else
			return false;
	}

	public static function getNombreById($id){
		$db = new DataBase();
		$sql = "select nombre from municipios where id = $id";
		if($resultado = $db->query($sql))
			return $resultado[0]["nombre"];
		else
			return false;
	}

	public static function getAllMunicipios(){
		$db = new DataBase();
		$sql = "select * from municipios order by nombre asc";
		return $db->query($sql);
	}

	public static function getExistingMunicipios($solo_activas = false){
		$db = new DataBase();
		if($solo_activas){
			$sql = "select distinct m.id, m.nombre, m.provincia
			from propiedades as p
			join municipios as m on p.municipio = m.id
			and p.activa = 1
			order by m.nombre asc";
		}
		else{
			$sql = "select distinct m.id, m.nombre, m.provincia
			from propiedades as p
			join municipios as m on p.municipio = m.id
			order by m.nombre asc";	
		}
		return $db->query($sql);	
	}

	public static function getExistingMunicipiosByProvincias(){
		$db = new DataBase();
		$sql = "select distinct m.id, m.nombre, m.provincia
		from propiedades as p
		join municipios as m on p.municipio = m.id
		and p.activa = 1
		order by m.nombre asc";
		if($resultado = $db->query($sql)){
			$ret = array();
			foreach ($resultado as $mun){
				$ret[$mun['provincia']][] = array(
					"id" => $mun["id"],
					"nombre" => $mun["nombre"]
				);
			}
			return $ret;
		}
		else
			return false;
	}
}