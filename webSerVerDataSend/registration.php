<?php

$conn = mysqli_connect("localhost","root","","userInfo");
if(!$conn){
	echo "unable to coonect with database ";
}
@$name = $_POST['name'];
@$email = $_POST['email'];
@$password = $_POST['password'];

if($name == "" ||$email == ""|| $password == ""){
	echo "Please Fullfill All ";
}else
{ 	$sql = "INSERT INTO registrationinfo(name, email, password) VALUES 		('$name','$email','$password')";

	if(!mysqli_query($conn ,$sql)){
		echo 'unable to save the data to the database';
	}
}
?>