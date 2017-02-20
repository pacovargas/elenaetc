<?php
class Controller{
	
	protected $smarty;
	protected $tpl;
	protected $head = false;
	protected $header = false;
	protected $footer = false;
	protected $css_files = false;
	protected $js_files = false;

	public function __construct(){
		$this->smarty = new Smarty;

		$this->addCSS($this->css_files);
		$this->addJS($this->js_files);

		$this->initContent();
		$this->displayContent();
	}

	protected function initContent(){}
	
	protected function displayContent(){
		$html = "";

		if ($this->head){
			$html .= $this->smarty->fetch($this->head);
		}

		if ($this->header){
			$html .= $this->smarty->fetch($this->header);
		}

		$html .= $this->smarty->fetch($this->tpl);

		if ($this->footer){
			$html .= $this->smarty->fetch($this->footer);
		}
		echo $html;
	}

	protected function addCSS($files){
		$css = "";

		if(is_array($files))
			foreach ($files as $file)
				$css .= "<link rel='stylesheet' href='css/$file' type='text/css'>";

		$this->smarty->assign("css", $css);
	}

	protected function addJS($files){
		$js = "";

		if(is_array($files))
			foreach ($files as $file)
				$js .= "<script src='js/$file'></script>";

		$this->smarty->assign("js", $js);
	}
}