<?php
	
	require 'sqlconfig.php';
	
	$id = $_GET['id'];
	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
		or die ('Error connecting to the database server');		
	$query = "DELETE FROM register WHERE id=$id";
	mysqli_query($dbc,$query)
	    or die('Error querying database');
	echo 'Member successfully deleted...';
	echo '<br><a href="adminpage.php">Click here</a> to go back.';
	
	
	
	
?>
