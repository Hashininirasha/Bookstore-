<?php


	$servername="localhost";
	$username="root";
	$password="";
	$dbname="bookstore";


//create connection
	$con=mysqli_connect($servername, $username, $password);

//check connection
	if(!$con){
		die("Connection Failed :".mysqli_connect_error());
	}
//create databse
	$sql="CREATE DATABSE IF NOT EXISTS $dbname";

	if(mysqli_query($con, $sql)){
		$con=mysqli_connect($servername, $username, $password, $dbname);

		$sql="
				CREATE TABLE IF NOT EXISTS books(
						id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
						book_name VARCHAR(30) NOT NULL,
						author VARCHAR(30) NOT NULL,
						date VARCHAR(30) NOT NULL,
						 
					);
		";
		if(mysqli_query($con,$sql)){
			echo "Table Created";
		}else{
			echo "Can't create a table";
		}
	}else{
		echo "Error while Creating database".mysqli_error($con); 
	


}
?>