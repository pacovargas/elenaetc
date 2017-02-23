<?php
class AdminController extends Controller{
	
	private $db;
	
	public function __construct(){
		$this->display_header = false;
		$this->display_footer = false;
		
		$this->db = new DataBase();

		$this->css_files = array(
			"index.css",
		);

		// $this->js_files = array(
		// 	"index.js",
		// );

		parent::__construct();
	}

	public function initContent(){
		// $this->smarty->assign('prueba', Tools::getValue('prueba'));
		// $this->tpl = "test.tpl";
		if(User::isLogged())
			$this->tpl = "admin.tpl";
		else
			$this->tpl = "login.tpl";
	}	
}