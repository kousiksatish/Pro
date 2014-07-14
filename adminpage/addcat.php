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
	
	$name = $_POST['name'];
	$desc = $_POST['desc'];
	
	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
						or die ('Error connecting to the database server');
	$query = "INSERT INTO Categories (catName, catDesc) 
					VALUES ('$name', '$desc');";
				
	$result = mysqli_query($dbc, $query)
		or die ('Error querying database');
	echo 'Category added successfully!!';
	echo ' <br><a href="categories.php">Click here</a> to go back!';
	mysqli_close($dbc);
?>
