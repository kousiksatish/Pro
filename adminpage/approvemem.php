<?php
	
	require '../sqlconfig.php';
	
	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
		or die ('Error connecting to the database server');	
	$id = $_GET['id'];
	$sdd = 'admin';
	$basequery="SELECT rollno FROM register WHERE id =  $id;";
	$result = mysqli_query($dbc,$basequery)
			or die('Error querying');
	$row=mysqli_fetch_array($result);
	
	$rollno = $row['rollno'];
	
	
	$query = "UPDATE register SET approved=1 WHERE id=$id;";
	$query1 = "CREATE TABLE " . $rollno . "a
			  (
				  id int AUTO_INCREMENT,
				  activity varchar(50) NOT NULL,
				  status varchar(30) NOT NULL,
				  PRIMARY KEY (id)
			  );";
	
	
	mysqli_query($dbc,$query)
		or die('Error querying database');
	mysqli_query($dbc,$query1)
		or die('Error querying1 database');
	
	$act1 = 'You were approved as a member by the admin. ';
	
	$insquery = "INSERT INTO " . $rollno . "a (activity, status) 
					VALUES ('$act1', 'done');";
	
	mysqli_query($dbc,$insquery)
		or die('Error inserting');
	
	echo 'Member successfully approved';
	echo '<br><a href="members.php">Click here</a> to go back.';
	
	mysqli_close();
/*	
	mysql_connect($db_host, $db_user, $db_pw) or die(mysql_error()); 
 mysql_select_db("project") or die(mysql_error()); 
 mysqli_query($dbc, "CREATE TABLE ss ( name VARCHAR(30), 
 age INT, car VARCHAR(30))")
	or die("ss");
*/	
?>
