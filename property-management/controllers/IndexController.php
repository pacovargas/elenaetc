<?php
class IndexController extends Controller{
	
	public function __construct(){
		$this->head = "head.tpl";
		$this->header = "header.tpl";
		$this->footer = "footer.tpl";

		$this->css_files = array(
			"index.css",
		);

		$this->js_files = array(
			"index.js",
		);

		parent::__construct();
	}

	public function initContent(){
		$this->smarty->assign("message", "Welcome to my php framework");
		$this->tpl = "index.tpl";
	}	
}