<?php
class Propiedad{
	public $id;
	public $nombre;
	public $referencia;
	public $municipio;
	public $provincia;
	public $regimen;
	public $precio;
	public $fecha;

	public function __construct($nombre, $referencia, $municipio, $provincia, $regimen, $precio){
		$this->id = 0;
		$this->nombre = $nombre;
		$this->referencia = $referencia;
		$this->municipio = $municipio;
		$this->provincia = $provincia;
		$this->regimen = $regimen;
		$this->precio = $precio;
	}

	public function save(){
		if($this->id == 0){
			$db = new DataBase();
			$nombre = $this->nombre;
			$referencia = $this->referencia;
			$municipio = $this->municipio;
			$provincia = $this->provincia;
			$regimen = $this->regimen;
			$precio = $this->precio;
			$sql = "insert into propiedades (nombre, referencia, municipio, provincia, regimen, precio) values ('$nombre', '$referencia', $municipio, $provincia, $regimen, $precio)";
			if($db->update($sql)){
				$this->id = $db->getLastId();
				$sql = "select fecha from propiedades where id = " . $this->id;
				$resultado = $db->query($sql);
				$this->fecha = $resultado[0]["fecha"];
				return true;
			}
		}
		return false;
	}
}