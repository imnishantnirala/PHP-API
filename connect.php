<?php
//db credintial
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','api');

// Connect With Database

function connect(){
	
	$connect=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if(mysqli_connect_errno($connect)){
		die("Failed to Connection:".mysqli_connect_errno());
	}
	mysqli_set_charset($connect,"utf8");
	return $connect;

}
$con=connect();
?>