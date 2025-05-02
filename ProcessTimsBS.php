<!--
Name: Timon John
Assignment: Assignment 2
Date: 6/11/2019
-->
<?php
	//connect to the server and select database
	$con = mysqli_connect("localhost", "root", "", "timbs");
	//mysql_select_db("timbs");
	
	// get values pass from form in login.php file
	$USERNAME = $_POST['user'];
	$PASSWORD = $_POST['pass'];
	
	// to prevent mysql injection
	$USERNAME = stripcslashes($USERNAME);
	$PASSWORD = stripcslashes($PASSWORD);
	$USERNAME = mysqli_real_escape_string($con, $USERNAME);
	$PASSWORD = mysqli_real_escape_string($con, $PASSWORD);
	
	//query the database for user_error
	$result = mysqli_query($con, "select * from users where USERNAME = '$USERNAME' and PASSWORD = '$PASSWORD'")
				or die("failed to query database " .mysql_error());
	$row = mysqli_fetch_array($result);
	if ($row['USERNAME'] == $USERNAME && $row ['PASSWORD'] == $PASSWORD){
		header("Location: http://localhost/TimsLogin/index.html");
		
	} else {
		
		header("Location: http://localhost/TimsLogin/Failed.html");
	}
?>