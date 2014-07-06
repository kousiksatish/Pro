<?php
	require "sqlconfig.php";
	session_start();
	// Define $myrollno and $mypassword 
	$myrollno=$_POST['rno']; 
	$mypassword=$_POST['pwd']; 
	

	// To protect MySQL injection
	$myrollno = stripslashes($myrollno);
	$mypassword = stripslashes($mypassword);
	$myrollno = mysql_real_escape_string($myrollno);
	$mypassword = mysql_real_escape_string($mypassword);

	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
			or die ('Error connecting to the database server');		
	
	$query="SELECT rollno,password,admin,approved FROM register;"
		or die('Error querying');
	$result=mysqli_query($dbc,$query);
	$check=false;
	$category = 0;
	while($row=mysqli_fetch_array($result))
	{
	
		if($row['password']==$mypassword&&$row['rollno']==$myrollno)
		{
			if($row['admin']==1)
			{
				echo 'You are the admin';
				$check=true;
				$category = 1;
				break;
			}
			else if($row['approved']==1)
			{
				echo 'You are approved member';
				$check = true;
				$category = 2;
				break;
			}
			else
			{
				$category = 3;
				echo 'You are not yet approved as a member.<br>Please contact admin.';
				break;
			}
				
		}
		
	}   
	if($check)
	{
		$_SESSION['prorollno']=$myrollno;
		if($category == 1)
			echo '<br><a href="adminpage/index.php">Click here</a> to go to admin page';
		if($category == 2)
			echo '<br><a href="memberpage.php">Click here</a> to go to member page';
		
	}
	else
	{
		echo '<br><a href="login.php">Click here</a> to go back';	
	}

	mysqli_close($dbc);
	
?>
