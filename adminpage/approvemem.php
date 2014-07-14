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
	
	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
		or die ('Error connecting to the database server');	
	$id = $_GET['id'];
	$sdd = 'admin';
	$basequery="SELECT rollno,profile FROM register WHERE id =  $id;";
	$result = mysqli_query($dbc,$basequery)
			or die('Error querying');
	$row=mysqli_fetch_array($result);
	
	$rollno = $row['rollno'];
	$profile = $row['rollno'];
	
	
	$query = "UPDATE register SET approved=1 WHERE id=$id;";
	$query1 = "CREATE TABLE " . $rollno . "a
			  (
				  id int AUTO_INCREMENT,
				  activity varchar(50) NOT NULL,
				  status varchar(30) NOT NULL,
				  PRIMARY KEY (id)
			  );";
	
	$query2 = "CREATE TABLE " . $rollno . "tasks
			  (
				  id int AUTO_INCREMENT,
				  taskid int NOT NULL UNIQUE,
				  status varchar(30) NOT NULL,
				  PRIMARY KEY (id)
			  );";
	
	
	mysqli_query($dbc,$query)
		or die('Error querying database');
	mysqli_query($dbc,$query1)
		or die('Error querying1 database');
	mysqli_query($dbc,$query2)
		or die('Error querying2 database');
	
	$act1 = 'You were approved as a member by the admin. ';
	
	$insquery = "INSERT INTO " . $rollno . "a (activity, status) 
					VALUES ('$act1', 'done');";
	
	mysqli_query($dbc,$insquery)
		or die('Error inserting');
	
	echo 'Member successfully approved';
	


	echo '<br><a href="members.php">Click here</a> to go back.';
	
	mysqli_close();

?>
