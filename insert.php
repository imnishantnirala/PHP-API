<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

require 'connect.php';

$postdata = file_get_contents("php://input");
// $request = json_decode($postdata);

if(isset($postdata) && !empty($postdata)){
	$request = json_decode($postdata);

	print_r($request);

	// Senitize.

	$fname = $request->frist_name;
	$lname = $request->last_name;
	$email = $request->email;

	// Store.

	$sql = "INSERT INTO `students`(`fname`,`lname`,`email`) VALUES('{$fname}','{$lname}','{$email}') ";

	if(mysqli_query($con,$sql)){
		http_response_code(201);
	}
	else{
		http_response_code(422);
	}
}


?>