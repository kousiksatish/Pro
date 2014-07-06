<?php
	require 'sqlconfig.php';
	
	$name = $_POST['name'];
	$rollno = $_POST['rollno'];
	$dept = $_POST['dept'];
	$sex = $_POST['sex'];
	$pass = $_POST['pass'];
	$repass = $_POST['repass'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$admin = 0;
	$approved = 0;
	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
						or die ('Error connecting to the database server');
	$query = "INSERT INTO register (name, rollno, dept, sex, password, contact, email, admin, approved) 
					VALUES ('$name', '$rollno', '$dept', '$sex','$pass',  '$contact', '$email', '$admin', '$approved');";
				
	$result = mysqli_query($dbc, $query)
		or die ('Error querying database');
	echo 'Successfully registered!!';
	echo ' <br><a href="index1.php">Click here</a> to register once more!';
	mysqli_close($dbc);
?>
