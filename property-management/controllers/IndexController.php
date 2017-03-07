<?php
class IndexController extends Controller{
	
	public function __construct(){
		$this->head = "head.tpl";
		$this->header = "header.tpl";
		$this->footer = "footer.tpl";

		$this->css_files = array(
			"index.css",
			"jquery.fancybox.min.css",
		);

		$this->js_files = array(
			"index.js",
			"fancybox/dist/jquery.fancybox.min.js",
		);

		parent::__construct();
	}

	public function initContent(){
		$propiedades = Propiedad::getPropiedades();
		// foreach ($propiedades as $key => $p){
			
		// }

		$this->smarty->assign(array(
			"propiedades" => $propiedades,
		));

		$this->tpl = "index.tpl";
	}	
}