<?php
	
	session_start();
	require 'sqlconfig.php';
	
	$id=$_GET['id'];
	
	
	
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

?>

<!DOCTYPE html>

<head>
	
	<link id="data-uikit-theme" rel="stylesheet" href="css/uikit.docs.min.css">
	<link rel="stylesheet" href="css/docs.css">
	   <script src="js/custom.modernizr.js"></script>
</head>

<body class="tm-background">
	
	<nav class="tm-navbar uk-navbar uk-navbar-attached">
	
			
            <div class="uk-container uk-container-center">
					<div class="uk-grid">
					<div class="uk-width-3-4">
                <a class="uk-navbar-brand uk-hidden-small" href="../../index.html"><img class="uk-margin uk-margin-remove" src="images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></a>

                <ul class="uk-navbar-nav uk-hidden-small">
                    <li><a href="memberpage/index.php">Home</a></li>
                    <li><a href="memberpage/members.php">Members</a></li>
                    <li><a href="memberpage/meeting.php">Meetings</a></li>
                    <li class="uk-active"><a href="memberpage/tasks.php">Tasks</a></li>
                    
                </ul>
			</div>
        <!--        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></div>
			
				<a href="../logout.php"><button class="uk-button">Logout</button></a>
			</div>
			 </div>
           </div>
        </nav>
        
       
 <div class="tm-middle">
	 <div class="uk-container uk-container-center">
<a href='memberpage/tasks.php' class='uk-icon-button uk-icon-arrow-circle-left'></a> Go back
	<h1>Task details</h1>
	<?php
		$query = "SELECT * FROM tasks WHERE id=$id;";
	
	$row = mysqli_fetch_array(mysqli_query($dbc,$query));
	
	$flag = false;
	
	function goback()
	{
		echo $_SERVER['HTTP_REFERER'];
		header("Location:". $_SERVER['HTTP_REFERER']);
		exit;
	}
	
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
	echo '<div class="uk-grid">';
	echo '<div class="uk-width-1-2">';
	echo '<h3>Task Name : '.$row['taskname'];
	echo '<br>Task Description : <br>';
	echo $row['taskdesc'];
	
	echo '<br>Task complexity : '.$row['complexity'];
	$profile = $row['taskprofile'];
	$proquery = "SELECT catName FROM Categories WHERE id=$profile;";
	$prorow = mysqli_fetch_array(mysqli_query($dbc,$proquery));
	echo '<br>Task Profile : '.$prorow['catName'];
	
	$givenon = date('d-m-Y', strtotime($row['givenon']));
	$deadline = date('d-m-Y', strtotime($row['deadline']));
	echo '<br>Given on :  ' . $givenon;
	echo '<br>Deadline :  ' . $deadline;
	$givenby = $row['createdby'];
	$subquery = "SELECT name FROM register WHERE rollno=$givenby;";
	$subrow = mysqli_fetch_array(mysqli_query($dbc,$subquery));
	echo '<br>Given by : ' . $subrow['name'];
	$assignedto = explode(",",$row['people']);
	echo '<br>Assigned to : ';
	for($i=0;$i<sizeof($assignedto);$i++)
	{
		$subquery = "SELECT name FROM register WHERE rollno=$assignedto[$i];";
		$subrow = mysqli_fetch_array(mysqli_query($dbc,$subquery));
		echo $subrow['name'].', ';
	}

	echo '</div>';
	
	echo '<div class="uk-width-1-2">';
	echo '<h3>Report</h3>';
	echo '<h4>'.$row['report'].'</h4>';
	echo '<a href="report.php?id='.$row['id'].'"><button class="uk-button">Update report</button></a>';
	echo '</div>';
	echo '</div>';
	?>
	
		
     </div>
</div>
