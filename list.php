<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');

require 'connect.php';
error_reporting(E_ERROR);
$students = [];
$sql="SELECT * FROM students";
if($result = mysqli_query($con,$sql)){
	$cr=0;
	$i=1;
	while($row=mysqli_fetch_assoc($result)){
		$students[$cr]['sid']=$row['sid'];
		$students[$cr]['fname']=$row['fname'];
		$students[$cr]['lname']=$row['lname'];
		$students[$cr]['email']=$row['email'];
		$students[$cr]['i']=$i;
		$cr++;
		$i++;
	}
	echo json_encode($students);
}
else{
	http_response_code(404);
}

?>