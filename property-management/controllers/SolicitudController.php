<?php
class SolicitudController extends Controller{
	
	public function __construct(){
		$this->head = "head.tpl";
		$this->header = "header.tpl";
		$this->footer = "footer.tpl";

		$this->css_files = array(
			"solicitud.css",
		);

		// $this->js_files = array(
		// 	"solicitud.js",
		// );

		parent::__construct();
	}

	public function initContent(){
		$this->smarty->assign(array(
			"nombre" => Tools::getValue("nombre"),
			"ref" => Tools::getValue("ref"), 
		));
		$this->tpl = "solicitud.tpl";
	}
}