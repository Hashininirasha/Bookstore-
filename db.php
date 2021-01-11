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

}
?>