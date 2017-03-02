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
			$this->smarty->assign(array(
				"regimenes" => Regimen::getRegimenes(),
				"provincias" => Provincia::getProvincias(),
				"municipios" => Municipio::getMunicipiosByProvincias(),
				"nombre" => isset($_POST['nombre']) ? $_POST["nombre"] : false,
				"referencia" => isset($_POST['referencia']) ? $_POST["referencia"] : false,
				"precio" => isset($_POST['precio']) ? $_POST["precio"] : false,
				"id_provincia" => isset($_POST['provincia']) ? $_POST["provincia"] : false,
				"id_municipio" => isset($_POST['municipio']) ? $_POST["municipio"] : false,
				"id_regimen" => isset($_POST['regimen']) ? $_POST["regimen"] : false,
				"id_propiedad" => Tools::getValue('propiedad') ? Tools::getValue('propiedad') : 0,
				"accion" => Tools::getValue('accion'),
			));

			if(Tools::getValue("accion-formulario") == "crear" || Tools::getValue("accion-formulario") == "actualizar"){
				$errores = $this->validarFormulario($_POST["nombre"], $_POST["referencia"], $_POST["precio"]);
				if($errores === false){
					$propiedad = new Propiedad($_POST["nombre"], $_POST["referencia"], $_POST["municipio"], $_POST["provincia"], $_POST["regimen"], $_POST["precio"]);
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
			else
				$admintpl = "crear-propiedad.tpl";

		}
		else
			$admintpl = "admin.tpl";


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
}