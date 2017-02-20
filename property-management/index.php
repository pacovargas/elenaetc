<?php
require_once('smarty/libs/Smarty.class.php');

foreach (glob("classes/*Class.php") as $filename){
	include $filename;
}

$page = new Index();