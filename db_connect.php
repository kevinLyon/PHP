<?php

$host = "localhost";
$user = "root";
$pass = "kali";
$database = "webphp";

$connect = new mysqli($host, $user, $pass, $database);

if($connect->connect_errno)
	echo "Falha na conexão: (".$connect->connect_errno.") " .$connect->connect_error;

?>

