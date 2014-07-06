<?php
	
	require '../sqlconfig.php';
	
	$id = $_GET['id'];
	$sdd = 'admin';
	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
		or die ('Error connecting to the database server');	
	$query = "UPDATE register SET approved=1 WHERE id=$id;";
	//$query1 = "CREATE TABLE " . $id . "a
			  //(
				  //id int
			  //);";

	
	mysqli_query($dbc,$query)
		or die('Error querying database');
	//mysqli_query($dbc,$query1)
		//or die('Error querying1 database');
	
	echo 'Member successfully approved';
	echo '<br><a href="adminpage.php">Click here</a> to go back.';
	
	//mysqli_close();
/*	
	mysql_connect($db_host, $db_user, $db_pw) or die(mysql_error()); 
 mysql_select_db("project") or die(mysql_error()); 
 mysqli_query($dbc, "CREATE TABLE ss ( name VARCHAR(30), 
 age INT, car VARCHAR(30))")
	or die("ss");
*/	
?>
