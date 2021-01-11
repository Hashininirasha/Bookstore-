<?php

function createdb(){
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="bookstore";


//create connection
	$con=mysqli_connect($servername, $username, $password, $dbname);

//check connection
	if(!$con){
		die("Connection Failed :".mysqli_connect_error());
	}
//create databse
	$sql="CREATE DATABSE IF NOT EXISTS $dbname";

	if(mysqli_query($con, $sql)){
		echo "Database Created..";
	}else{
		echo "Error while Creating database".mysqli_error($con); 
	}


}
?>