<?php
class SolicitudController extends Controller{
	
	public function __construct(){
		$this->head = "head.tpl";
		$this->header = "header.tpl";
		$this->footer = "footer.tpl";

		$this->css_files = array(
			"solicitud.css",
		);

		$this->js_files = array(
			"solicitud.js",
		);

		parent::__construct();
	}

	public function initContent(){
		$errores = false;
		$exito = false;
		
		$nombre = Tools::getValue("nombre");
		$telefono = Tools::getValue("telefono");
		$email = Tools::getValue("email");
		$comentarios = Tools::getValue("comentarios");

		if(Tools::getValue("enviar") == "Enviar"){
			$errores = $this->validarFormulario();

			if(!$errores){
				$subject = "Solicitud de información sobre: " . Tools::getValue("prop") . " Referencia nº " . Tools::getValue("ref");
				$to = "paco.fraguel@gmail.com";
				$message = "Nombre: $nombre\nTeléfono: $telefono\nEmail: $email\nComentarios: $comentarios";
				if(Mail::send($to, $subject, $message)){
					$exito = "Su mensaje se ha enviado correctamente.";
					$nombre = "";
					$telefono = "";
					$email = "";
					$comentarios = "";
				}
				else
					$errores = "Su mensaje no se ha podido enviar. Inténtelo de nuevo pasados unos minutos.";
			}
		}

		$this->smarty->assign(array(
			"nombre" => $nombre,
			"telefono" => $telefono,
			"email" => $email,
			"comentarios" => $comentarios,
			"prop" => Tools::getValue("prop"),
			"ref" => Tools::getValue("ref"),
			"errores" => $errores,
			"exito" => $exito,
		));
		$this->tpl = "solicitud.tpl";
	}

	private function validarFormulario(){
		$errores = "";

		if(Validate::isEmpty(Tools::getValue("telefono")) && Validate::isEmpty(Tools::getValue("email"))){
			$errores .= "<li>Tiene que introducir, al menos, un teléfono o correo electrónico</li>";
		}
		else{
			if(!Validate::isEmpty(Tools::getValue("telefono"))){
				if(!Validate::isPhone(Tools::getValue("telefono")))
					$errores .= "<li>Teléfono no válido</li>";
			}

			if(!Validate::isEmpty(Tools::getValue("email"))){
				if(!Validate::isEmail(Tools::getValue("email")))
					$errores .= "<li>Correo electrónico no válido</li>";
			}
		}

		if($errores != "")
			$errores = "<p>Hay algunos errores:</p><ol>" . $errores . "<ol>";
		else
			$errores = false;

		return $errores;
	}
}