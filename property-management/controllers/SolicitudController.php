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
		$this->tpl = "solicitud.tpl";
	}
}