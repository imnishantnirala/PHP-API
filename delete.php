<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

require 'connect.php';

$id=$_GET['id'];
$sql="DELETE FROM `students` WHERE `sid`= '{$id}' LIMIT 1";

if(mysqli_query($con,$sql)){
	http_response_code(204);
}
else{
	return http_response_code(422);
}

?>