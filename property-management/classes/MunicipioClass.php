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
}