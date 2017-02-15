<?php
require_once('../../smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("saludo", "probando 1 2 3");
$smarty->display("index.tpl");