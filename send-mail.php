<?php
foreach ($_POST as $key => $value) {
	$$key = $value;
}

$ret = "fallo";

if(mail($to, $subject, $message)){
	$ret = "enviado";
}

echo $ret;

?>