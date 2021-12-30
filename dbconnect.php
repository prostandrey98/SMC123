<?php

header('Content-Type: text/html; charset=utf-8');

$server = "localhost";
$username = "root";
$password = "root";
$database = "smc";

$mysqli = new mysqli($server, $username, $password, $database);

if(!$mysqli){
	die("<p>Ошибка подключения к БД.</p><p>Код ошибки: ".$mysqli->connect_errno."</p><p>Описание ошибки: ".$mysqli->connect_error."</p>");
}

$mysqli->set_charset('utf8');

$address_site = "http://localhost/SMC";

function redirect_to($message, $address_page){
	$_SESSION["serever_message"] = $message;
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ".$address_site."/".$address_page);
	exit();
}

?>
