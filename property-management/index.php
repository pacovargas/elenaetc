<?php
require_once('config/defines.php');
require_once('config/alias.php');
require_once('smarty/libs/Smarty.class.php');

foreach (glob("classes/*Class.php") as $filename){
	include $filename;
}

$page = new Index();