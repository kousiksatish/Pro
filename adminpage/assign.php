<?php
	
	session_start();
	require '../sqlconfig.php';
	
	if(!isset($_SESSION['proj']))
		header("location:../index.php");
	if(isset($_SESSION['proj']))
	{
		$myrollno = $_SESSION['proj'];
		$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
				or die('Error connecting to database');
		$query = "SELECT * FROM register WHERE rollno='$myrollno';";
		$result = mysqli_query($dbc,$query)
			or die ('Error querying');
		$row = mysqli_fetch_array($result);
		if($row['admin']!=1)
			header("location:../login.php");
		if($row['admin']==0&&$row['approved']==1)
			header("location:../memberpage");
			
	}
	
	$id = $_GET['id'];
	$pro = $_GET['pro'];
	
	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
			or die ('Error connecting to the database server');		

	
	$query = "UPDATE register SET profile=$pro WHERE id=$id;";
	$result=mysqli_query($dbc,$query)
		or die('Error querying');
	
	header("location:assignprofile.php");

?>
	
	
