<?php
class Controller{
	
	protected $smarty;
	protected $tpl;
	protected $head = false;
	protected $header = false;
	protected $footer = false;
	protected $css_files = false;
	protected $js_files = false;
	protected $display_header = true;
	protected $display_head = true;
	protected $display_footer = true;

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

		if($this->display_head){
			if ($this->head)
				$html .= $this->smarty->fetch($this->head);
			else
				$html .= $this->smarty->fetch("head.tpl");
		}

		if($this->display_header){
			if ($this->header)
				$html .= $this->smarty->fetch($this->header);
			else
				$html .= $this->smarty->fetch("header.tpl");
		}

		$html .= $this->smarty->fetch($this->tpl);

		if($this->display_footer){
			if ($this->footer)
				$html .= $this->smarty->fetch($this->footer);
			else
				$html .= $this->smarty->fetch("footer.tpl");
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