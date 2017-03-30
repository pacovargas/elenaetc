<?php
class Propiedad{
	public $id;
	public $nombre;
	public $referencia;
	public $tipo;
	public $municipio;
	public $provincia;
	public $regimen;
	public $precio;
	public $fecha;
	public $activa;
	public $nombre_provincia;
	public $nombre_municipio;
	public $nombre_regimen;
	public $nombre_tipo;
	public $fotos;
	public $doc;
	public $precio_formateado;

	public function __construct($nombre, $referencia, $tipo, $municipio, $provincia, $regimen, $precio, $fecha = "", $activa = 1, $id = 0){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->referencia = $referencia;
		$this->tipo = $tipo;
		$this->municipio = $municipio;
		$this->provincia = $provincia;
		$this->regimen = $regimen;
		$this->precio = $precio;
		$this->fecha = $fecha;
		$this->activa = $activa;
		$this->nombre_provincia = Provincia::getNombrebyId($this->provincia);
		$this->nombre_municipio = Municipio::getNombrebyId($this->municipio);
		$this->nombre_regimen = Regimen::getNombrebyId($this->regimen);
		$this->nombre_tipo = Tipo::getNombrebyId($this->tipo);
		$this->fotos = Propiedad::getFotos($id);
		$this->doc = Propiedad::getDocs($id);
		$this->precio_formateado = number_format($this->precio, 0, ",", "." );
	}

	public function save(){
		$db = new DataBase();

		if($this->id == 0){
			$nombre = $this->nombre;
			$referencia = $this->referencia;
			$tipo = $this->tipo;
			$municipio = $this->municipio;
			$provincia = $this->provincia;
			$regimen = $this->regimen;
			$precio = $this->precio;
			$sql = "insert into propiedades (nombre, referencia, tipo, municipio, provincia, regimen, precio) values ('$nombre', '$referencia', $tipo, $municipio, $provincia, $regimen, $precio)";
			if($db->update($sql)){
				$this->id = $db->getLastId();
				$sql = "select fecha from propiedades where id = " . $this->id;
				$resultado = $db->query($sql);
				$this->fecha = $resultado[0]["fecha"];
				return true;
			}
		}
		else{
			$nombre = Tools::getValue("nombre");
			$referencia = Tools::getValue("referencia");
			$tipo = Tools::getValue("tipo");
			$municipio = Tools::getValue("municipio");
			$provincia = Tools::getValue("provincia");
			$regimen = Tools::getValue("regimen");
			$precio = Tools::getValue("precio");
			$sql = "update propiedades set nombre = '$nombre', referencia = '$referencia', tipo = $tipo, municipio = $municipio, provincia = $provincia, regimen = $regimen, precio = $precio where id = " . $this->id;
			if($db->update($sql)){
				$this->nombre = Tools::getValue("nombre");
				$this->referencia = Tools::getValue("referencia");
				$this->tipo = Tools::getValue("tipo");
				$this->municipio = Tools::getValue("municipio");
				$this->provincia = Tools::getValue("provincia");
				$this->regimen = Tools::getValue("regimen");
				$this->precio = Tools::getValue("precio");
				return true;
			}
		}
		return false;
	}

	public static function getPropiedades($having = "", $orderby = "id", $ascdesc = "desc"){
		$db = new DataBase();
		if($having == "") $having = "having activa = 1";
		$sql = "select * from propiedades $having order by $orderby $ascdesc";

		if($res = $db->query($sql)){
			$props = array();
			foreach ($res as $r){
				$p = new Propiedad($r["nombre"], $r["referencia"], $r["tipo"], $r["municipio"], $r["provincia"], $r["regimen"], $r["precio"], $r["fecha"], $r["activa"], $r["id"]);
				$props[] = $p;
			}
			return $props;
		}
		else{
			return false;
		}
	}

	public static function getPropiedadById($id){
		$db = new DataBase();
		$sql = "select * from propiedades where id = $id";
		if($r = $db->query($sql)){
			return new Propiedad($r[0]["nombre"], $r[0]["referencia"], $r[0]["tipo"], $r[0]["municipio"], $r[0]["provincia"], $r[0]["regimen"], $r[0]["precio"], $r[0]["fecha"], $r[0]["activa"], $r[0]["id"]);
		}
		else{
			return false;
		}
	}

	public static function changeActiva($id, $activa){
		$db = new DataBase();
		$sql = "update propiedades set activa = $activa where id = $id";
		return $db->update($sql);
	}

	public static function getFotos($id){
		$db = new DataBase();
		$sql = "select * from fotos where propiedad = $id";
		return $db->query($sql);
	}

	public static function getNumeroFotos($id){
		$db = new DataBase();
		$sql = "select count(*) as num from fotos where propiedad = $id";
		$resultado = $db->query($sql);
		return intval($resultado[0]["num"]);		
	}

	public static function getNombreFoto($id, $extension){
		$num = Propiedad::getNumeroFotos($id) + 1;
		return "prop$id-$num.$extension";
	}

	public static function addFoto($id, $nombreOriginal, $nombreSubido){
		$extension = Tools::getFileExtension($nombreOriginal);
		$nombre_archivo = Propiedad::getNombreFoto($id, $extension);
		$ruta = "img/propiedades/$nombre_archivo";
		if (move_uploaded_file($nombreSubido, $ruta)){
			$db = new DataBase();
			$sql = "insert into fotos (nombre, propiedad) values ('$nombre_archivo', $id)";
			$db->update($sql);
		}
	}

	public static function removeFoto($id){
		$db = new DataBase();
		$sql = "select nombre from fotos where id = $id";
		if($resultado = $db->query($sql)){
			$archivo = $resultado[0]["nombre"];
			if(unlink("img/propiedades/$archivo")){
				$sql = "delete from fotos where id = $id";
				$db->update($sql);
			}
		}

	}

	public static function addDoc($id, $nombreOriginal, $nombreSubido){
		$extension = Tools::getFileExtension($nombreOriginal);
		$nombre_archivo = "prop$id.$extension";
		$ruta = "docs/$nombre_archivo";
		if (move_uploaded_file($nombreSubido, $ruta)){
			$db = new DataBase();
			$sql = "insert into docs (nombre, propiedad) values ('$nombre_archivo', $id)";
			$db->update($sql);
		}
	}

	public static function getDocs($id){
		$db = new DataBase();
		$sql = "select * from docs where propiedad = $id";
		return $db->query($sql)[0];
	}

	public static function removeDoc($id){
		$db = new DataBase();
		$sql = "select nombre from docs where id = $id";
		if($resultado = $db->query($sql)){
			$archivo = $resultado[0]["nombre"];
			if(unlink("docs/$archivo")){
				$sql = "delete from docs where id = $id";
				$db->update($sql);
			}
		}
	}

	public static function getPropiedadesPaginada($having = "", $registros=3, $pagina=1, $orderby = "id", $ascdesc = "desc"){
		$comienzo = $registros * ($pagina-1);
		$db = new DataBase();
		if($having == "") $having = "having activa = 1";
		$sql = "select * from propiedades $having order by $orderby $ascdesc limit $comienzo, $registros";

		if($res = $db->query($sql)){
			$props = array();
			foreach ($res as $r){
				$p = new Propiedad($r["nombre"], $r["referencia"], $r["tipo"], $r["municipio"], $r["provincia"], $r["regimen"], $r["precio"], $r["fecha"], $r["activa"], $r["id"]);
				$props[] = $p;
			}
			return $props;
		}
		else{
			return false;
		}
	}

	public static function getNumPaginas($having = "", $registros=3){
		$db = new DataBase();
		$sql = "select count(*) as num from propiedades $having";
		if($resultado = $db->query($sql)){
			$total_registros = $resultado[0]["num"];
			$paginas = $total_registros / $registros;
		}
		else{
			$paginas = 0;
		}

		return intval($paginas)+1;
	}
}