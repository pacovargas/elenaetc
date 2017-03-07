<?php
class AdminController extends Controller{
	
	private $db;
	
	public function __construct(){
		$this->header = "header-admin.tpl";
		$this->footer = "footer-admin.tpl";
		
		$this->db = new DataBase();

		$this->css_files = array(
			"login.css",
			"admin.css"
		);

		$this->js_files = array(
			"admin.js",
		);

		parent::__construct();
	}

	public function initContent(){
		$errores = false;
		$exito = false;

		if(Tools::getValue('accion') == "crear" || Tools::getValue('accion') == "actualizar"){
			if(Tools::getValue('accion') == "crear"){
				$this->smarty->assign(array(
					"regimenes" => Regimen::getRegimenes(),
					"provincias" => Provincia::getProvincias(),
					"municipios" => Municipio::getMunicipiosByProvincias(),
					"tipos" => Tipo::getTipos(),
					"nombre" => isset($_POST['nombre']) ? $_POST["nombre"] : false,
					"referencia" => isset($_POST['referencia']) ? $_POST["referencia"] : false,
					"precio" => isset($_POST['precio']) ? $_POST["precio"] : false,
					"id_provincia" => isset($_POST['provincia']) ? $_POST["provincia"] : false,
					"id_municipio" => isset($_POST['municipio']) ? $_POST["municipio"] : false,
					"id_regimen" => isset($_POST['regimen']) ? $_POST["regimen"] : false,
					"id_tipo" => isset($_POST['tipo']) ? $_POST["tipo"] : false,
					"id_propiedad" => Tools::getValue('propiedad') ? Tools::getValue('propiedad') : 0,
					"accion" => Tools::getValue('accion'),
				));
			}
			else{
				$propiedad = Propiedad::getPropiedadById(Tools::getValue('propiedad'));
				$this->smarty->assign(array(
					"regimenes" => Regimen::getRegimenes(),
					"provincias" => Provincia::getProvincias(),
					"municipios" => Municipio::getMunicipiosByProvincias(),
					"tipos" => Tipo::getTipos(),
					"nombre" => $propiedad->nombre,
					"referencia" => $propiedad->referencia,
					"precio" => $propiedad->precio,
					"id_provincia" => $propiedad->provincia,
					"id_municipio" => $propiedad->municipio,
					"id_regimen" => $propiedad->regimen,
					"id_tipo" => $propiedad->tipo,
					"id_propiedad" => Tools::getValue('propiedad') ? Tools::getValue('propiedad') : 0,
					"accion" => Tools::getValue('accion'),
					"fotos" => Propiedad::getFotos(Tools::getValue('propiedad')),
				));	
			}

			if(Tools::getValue("accion-formulario") == "crear" || Tools::getValue("accion-formulario") == "actualizar"){
				$errores = $this->validarFormulario($_POST["nombre"], $_POST["referencia"], $_POST["precio"]);
				if($errores === false){
					if(Tools::getValue("accion-formulario") == "crear")	
						$propiedad = new Propiedad($_POST["nombre"], $_POST["referencia"], $_POST["tipo"], $_POST["municipio"], $_POST["provincia"], $_POST["regimen"], $_POST["precio"]);
					else
						$propiedad = Propiedad::getPropiedadById(Tools::getValue('id_propiedad'));

					if($propiedad->save()){
						$errores === false;
						Tools::redirect(Tools::getBaseUrl() . "admin/");
					}
					else{
						$errores = "<p>Se ha producido un error creando la propiedad</p>";
						$admintpl = "crear-propiedad.tpl";
					}
					
				}
				else{
					$admintpl = "crear-propiedad.tpl";
				}
			}
			else{
				if(Tools::getValue("subir") == "subir"){
					$this->smarty->assign("files", $_FILES);
					Propiedad::addFoto(Tools::getValue("propiedad"), $_FILES['foto']['name'], $_FILES['foto']['tmp_name']);
					Tools::redirect(Tools::getCurrentUrl());
				}
				else{
					$admintpl = "crear-propiedad.tpl";
				}
			}

		}
		else{
			if(Tools::getValue('borrar')){
				Propiedad::changeActiva(Tools::getValue('borrar'), 0);
				Tools::redirect(Tools::getBaseUrl() . "admin/");
			}
			else{
				if(Tools::getValue("accion") == "eliminar"){
					$propiedad = Tools::getValue("propiedad");
					Propiedad::removeFoto(Tools::getValue("foto"));
					Tools::redirect(Tools::getBaseUrl() . "admin/accion=actualizar&propiedad=$propiedad");
				}
				else{
					$having = "";
					if(Tools::getValue("filtrar") == "filtrar"){
						$having = $this->getHaving();
					}

					if(Tools::getValue("orderby")){
						$ascdesc = Tools::getValue("ascdesc") ? Tools::getValue("ascdesc") : "asc";
						$propiedades = Propiedad::getPropiedades($having, Tools::getValue("orderby"), $ascdesc);
					}
					else{
						$propiedades = Propiedad::getPropiedades($having);
					}

					$this->smarty->assign(array(
						"propiedades" => $propiedades,
						"mostrar_activas" => 1,
						"orderby" => Tools::getValue("orderby"),
						"ascdesc" => Tools::getValue("ascdesc") ? Tools::getValue("ascdesc") : "asc",
						"having" => $having,
						"fnombre" => Tools::getValue("fnombre") ? Tools::getValue("fnombre") : "",
						"freferencia" => Tools::getValue("freferencia") ? Tools::getValue("freferencia") : "",
						"factiva" => Tools::getValue("factiva") !== false ? Tools::getValue("factiva") : "1",
						"regimenes" => Regimen::getRegimenes(),
						"provincias" => Provincia::getProvincias(),
						"municipios" => Municipio::getAllMunicipios(),
						"tipos" => Tipo::getTipos(),
						"fprovincia" => isset($_POST['fprovincia']) ? $_POST["fprovincia"] : false,
						"fmunicipio" => isset($_POST['fmunicipio']) ? $_POST["fmunicipio"] : false,
						"fregimen" => isset($_POST['fregimen']) ? $_POST["fregimen"] : false,
						"ftipo" => isset($_POST['ftipo']) ? $_POST["ftipo"] : false,
						"preciomayor" => isset($_POST['preciomayor']) ? $_POST["preciomayor"] : false,
						"preciomenor" => isset($_POST['preciomenor']) ? $_POST["preciomenor"] : false,
						"diamenor" => isset($_POST['diamenor']) ? $_POST["diamenor"] : false,
						"mesmenor" => isset($_POST['mesmenor']) ? $_POST["mesmenor"] : false,
						"anomenor" => isset($_POST['anomenor']) ? $_POST["anomenor"] : false,
						"diamayor" => isset($_POST['diamayor']) ? $_POST["diamayor"] : false,
						"mesmayor" => isset($_POST['mesmayor']) ? $_POST["mesmayor"] : false,
						"anomayor" => isset($_POST['anomayor']) ? $_POST["anomayor"] : false,

					));

					$admintpl = "admin.tpl";
				}
			}
		}


		if(User::isLogged()){
			$this->smarty->assign("errores", $errores);
			$this->tpl = $admintpl;
		}
		else{
			$errors = "";
			$user = Tools::getValue('usuario');
			$passwd = Tools::getValue('password');

			if(isset($_POST["usuario"]) || isset($_POST['passwd'])){
				if(!Validate::isGenericName($user))
					$errors .= "<li>Debes introducir un nombre de usuario válido</li>";
				if(!Validate::isPasswd($passwd))
					$errors .= "<li>Debes introducir una contraseña válida</li>";

				if($errors != ""){
					$errors = "<ol>" . $errors . "</ol>";
					$this->smarty->assign(array(
						'errors' => $errors,
						'user' => $user,
						'passwd' => $passwd
					));
					$this->tpl = "login.tpl";
				}
				else{
        			setcookie('etc_user', $user, time()+60*60*24*365);
        			setcookie('etc_passwd', sha1($passwd), time()+60*60*24*365);
					if(User::isLogged())
						$this->tpl = $admintpl;
					else{
						$errors = "<li>Nombre de usuario o contraseña incorrectos</li>";
						$errors = "<ol>" . $errors . "</ol>";
						$this->smarty->assign(array(
							'errors' => $errors,
							'user' => $user,
							'passwd' => $passwd
						));
						$this->tpl = "login.tpl";
					}
				}
			}
			else{
				$this->smarty->assign(array(
					'errors' => $errors,
					'user' => $user,
					'passwd' => $passwd
				));
				$this->tpl = "login.tpl";
			}
		}
	}

	private function validarFormulario($nombre, $referencia, $precio){
		$ret = "";
		if($nombre == "")
			$ret .= "<li>Debe introducir un nombre</li>";
		if($referencia == "")
			$ret .= "<li>Debe introducir una referencia</li>";
		if($precio == "")
			$ret .= "<li>Debe introducir un precio</li>";
		else
			if(!Validate::isInteger($precio))
				$ret .= "<li>El precio debe ser un número entero</li>";

		if($ret != "")
			$ret = "<p>Hay algunos errores:</p><ol>$ret</ol>";

		if($ret == "")
			return false;
		else
			return $ret;
	}

	private function getHaving(){
		$ret = "";
		if(Tools::getValue("fnombre") && Tools::getValue("fnombre") != "")
			if($ret == "")
				$ret .= "nombre like '%" . Tools::getValue("fnombre") . "%'";
			else
				$ret .= " and nombre like '%" . Tools::getValue("fnombre") . "%'";


		if(Tools::getValue("freferencia") && Tools::getValue("freferencia") != "")
			if($ret == "")
				$ret .= "referencia like '%" . Tools::getValue("freferencia") . "%'";
			else
				$ret .= " and referencia like '%" . Tools::getValue("freferencia") . "%'";

		$valores_activa = array(
			"0" => "activa = 0",
			"1" => "activa = 1",
			"2" => "activa < 2"
		);
		if(Tools::getValue("factiva") !== false && Tools::getValue("factiva") != "")
			if($ret == "")
				$ret .= $valores_activa[Tools::getValue("factiva")];
			else
				$ret .= " and " . $valores_activa[Tools::getValue("factiva")];

		if(Tools::getValue("ftipo") !== false && intval(Tools::getValue("ftipo")) > 0)
			if($ret == "")
				$ret .= "tipo = " . Tools::getValue("ftipo");
			else
				$ret .= " and tipo = " . Tools::getValue("ftipo");

		if(Tools::getValue("fprovincia") !== false && intval(Tools::getValue("fprovincia")) > 0)
			if($ret == "")
				$ret .= "provincia = " . Tools::getValue("fprovincia");
			else
				$ret .= " and provincia = " . Tools::getValue("fprovincia");

		if(Tools::getValue("fmunicipio") !== false && intval(Tools::getValue("fmunicipio")) > 0)
			if($ret == "")
				$ret .= "municipio = " . Tools::getValue("fmunicipio");
			else
				$ret .= " and municipio = " . Tools::getValue("fmunicipio");

		if(Tools::getValue("fregimen") !== false && intval(Tools::getValue("fregimen")) > 0)
			if($ret == "")
				$ret .= "regimen = " . Tools::getValue("fregimen");
			else
				$ret .= " and regimen = " . Tools::getValue("fregimen");

		if(Tools::getValue("preciomayor") !== false && intval(Tools::getValue("preciomayor")) > 0){
			$preciomayor = Tools::getValue("preciomayor");
			$preciomenor = Tools::getValue("preciomenor") ? Tools::getValue("preciomenor") : $preciomayor;
			if($ret == "")
				$ret .= "precio >= $preciomayor and precio <= $preciomenor";
			else
				$ret .= " and precio >= $preciomayor and precio <= $preciomenor";
		}

		$diamenor = Tools::getValue("diamenor");
		$mesmenor = Tools::getValue("mesmenor");
		$anomenor = Tools::getValue("anomenor");
		$diamayor = Tools::getValue("diamayor");
		$mesmayor = Tools::getValue("mesmayor");
		$anomayor = Tools::getValue("anomayor");
		if(($diamenor && $diamenor != "") && ($mesmenor && $mesmenor != "") && ($anomenor && $anomenor != "")){
			$fechamenor = "$anomenor-$mesmenor-$diamenor 00:00:00";
			if(($diamayor && $diamayor != "") && ($mesmayor && $mesmayor != "") && ($anomayor && $anomayor != ""))
				$fechamayor = "$anomayor-$mesmayor-$diamayor 00:00:00";
			else
				$fechamayor = $fechamenor;

			if($ret == "")
				$ret .= "fecha >= '$fechamenor' and fecha <= '$fechamayor'";
			else
				$ret .= " and fecha >= '$fechamenor' and fecha <= '$fechamayor'";
		}

		

		if($ret != "")
			$ret = "having " . $ret;

		return $ret;
	}
}