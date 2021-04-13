<?php 

	$host 	= 	"localhost";
	$uname 	= 	"root";
	$upass  = 	'';
	$db 	=	"practice";

	$con = new mysqli($host, $uname, $upass, $db);


	if ($con->connect_error) {
		die("DB connection Error" . $con->connect_error);
	}


?>