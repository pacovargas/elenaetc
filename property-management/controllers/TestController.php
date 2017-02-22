<?php
class TestController extends Controller{
	
	public function __construct(){
		$this->head = "head.tpl";
		$this->header = "header.tpl";
		$this->footer = "footer.tpl";

		// $this->css_files = array(
		// 	"index.css",
		// );

		// $this->js_files = array(
		// 	"index.js",
		// );

		parent::__construct();
	}

	public function initContent(){
		$this->smarty->assign('prueba', Tools::getValue('prueba'));
		$this->tpl = "test.tpl";
	}	
}