<?php
class Index{
	private $controller;

	public function __construct(){
		$controller_name =  Tools::getValue('controller', 'index');
		$controller_filename = Tools::getControllerFileName($controller_name);
		$controller_name = Tools::getControllerName($controller_name);

		include ("controllers/$controller_filename");
		$this->controller = new $controller_name();
	}
}