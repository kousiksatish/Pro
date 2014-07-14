<?php
	
	session_start();
	require 'sqlconfig.php';
	
	$id=$_GET['id'];
	$report = $_POST['report'];
	
	
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
	
		if($row['admin']==0&&$row['approved']==0)
			header("location:../index.php");
			
	}
	
	$query = "SELECT * FROM tasks WHERE id=$id;";
	
	$row = mysqli_fetch_array(mysqli_query($dbc,$query));
	
	$flag = false;
	
	
	
	if($row['createdby'] == $myrollno)
		$flag = true;
		
	else
	{
		$assignedto = explode(",",$row['people']);
		for($i=0;$i<sizeof($assignedto);$i++)
		{
			if($assignedto[$i]==$myrollno)
			{
				$flag=true;
				break;
			}
				
		}
	}
	if(!$flag)
		header("location:memberpage/tasks.php");
		
	$updatequery = "UPDATE tasks SET report='$report' WHERE id=$id;";
	
	mysqli_query($dbc,$updatequery)
		or die('Error updating');
	$enterquery = "UPDATE tasks SET report = REPLACE(report, '\r\n', '<br />')";
	mysqli_query($dbc,$enterquery)
		or die('Error entering');
		
	header("location:viewtask.php?id=$id");
		

?>
