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
		$having = $this->getHaving();
		$propiedades = Propiedad::getPropiedades($having);

		$this->smarty->assign(array(
			"having" => $having,
			"propiedades" => $propiedades,
			"tipos" => Tipo::getExistingTipos(true),
			"id_tipo" => Tools::getValue("tipo"),
			"regimenes" => Regimen::getExistingRegimenes(true),
			"id_regimen" => Tools::getValue("regimen"),
			"provincias" => Provincia::getExistingProvincias(true),
			"id_provincia" => Tools::getValue("provincia"),
			"municipios" => Municipio::getExistingMunicipiosByProvincias(true),
			"id_municipio" => Tools::getValue("municipio"),
		));

		$this->tpl = "index.tpl";
	}

	private function getHaving(){
		$having = "";

		$tipo = Tools::getValue("tipo");
		if($tipo && intval($tipo) > 0)
			if($having == "")
				$having .= "having tipo = $tipo";
			else
				$having .= " and tipo = $tipo";

		$regimen = Tools::getValue("regimen");
		if($regimen && intval($regimen) > 0)
			if($having == "")
				$having .= "having regimen = $regimen";
			else
				$having .= " and regimen = $regimen";

		$provincia = Tools::getValue("provincia");
		if($provincia && intval($provincia) > 0)
			if($having == "")
				$having .= "having provincia = $provincia";
			else
				$having .= " and provincia = $provincia";

		$municipio = Tools::getValue("municipio");
		if($municipio && intval($municipio) > 0)
			if($having == "")
				$having .= "having municipio = $municipio";
			else
				$having .= " and municipio = $municipio";

		if($having != "")
			$having .= " and activa = 1";

		return $having;
	}
}