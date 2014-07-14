<!--Member-->
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
		if($row['admin']==1)
			header("location:../adminpage/tasks.php");
		if($row['admin']==0&&$row['approved']==0)
			header("location:../index.php");
			
	}

?>

<!DOCTYPE html>

<head>
	
	<link id="data-uikit-theme" rel="stylesheet" href="../css/uikit.docs.min.css">
	<link rel="stylesheet" href="../css/docs.css">

</head>

<body class="tm-background">
	
	<nav class="tm-navbar uk-navbar uk-navbar-attached">
	
			
            <div class="uk-container uk-container-center">
					<div class="uk-grid">
					<div class="uk-width-3-4">
                <a class="uk-navbar-brand uk-hidden-small" href="../../index.html"><img class="uk-margin uk-margin-remove" src="../images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></a>

                <ul class="uk-navbar-nav uk-hidden-small">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="members.php">Members</a></li>
                     
                    <li class="uk-active"><a href="tasks.php">Tasks</a></li>
                    
                </ul>
			</div>
        <!--        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="../images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></div>
			
				<a href="../logout.php"><button class="uk-button">Logout</button></a>
			</div>
			 </div>
           </div>
        </nav>

 <div class="tm-middle">
	 <div class="uk-container uk-container-center">

	<h1>Welcome Member</h1>
	
	<?php
		echo '<h3 class="tm-article-subtitle">In progress</h3>';
		$query = "SELECT * FROM tasks,".$myrollno."tasks WHERE tasks.id=".$myrollno."tasks.taskid AND tasks.status='on';";
		
		$result = mysqli_query($dbc,$query)
			or die("Error querying");
	
		while($row = mysqli_fetch_array($result))
		{
			echo '<div class="uk-panel uk-panel-box">';
			$givenon = date('d-m-Y', strtotime($row['givenon']));
			echo '<h3>'.$row['taskname'].' given on ' . $givenon .'</h3>';
			echo $row['taskdesc'];
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
			$taskid = $row['taskid'];
			echo '<a href="../viewtask.php?id='.$taskid .'"><button class="uk-button">View task details</button></a>';
			echo ' <a href="../completed.php?id='.$taskid .'"><button class="uk-button uk-button-success">Mark as completed</button></a>';
			
			echo '</div>';
		}
		
		echo '<h3 class="tm-article-subtitle">Completed</h3>';
		$query = "SELECT * FROM tasks,".$myrollno."tasks WHERE tasks.id=".$myrollno."tasks.taskid AND tasks.status='completed';";
		$result = mysqli_query($dbc,$query)
			or die("Error querying");
		
		while($row = mysqli_fetch_array($result))
		{
			echo '<div class="uk-panel uk-panel-box">';
			$givenon = date('d-m-Y', strtotime($row['givenon']));
			echo '<h3>'.$row['taskname'].' given on ' . $givenon .'</h3>';
			echo $row['taskdesc'];
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
			$taskid = $row['taskid'];
			echo '<a href="../viewtask.php?id='.$taskid .'"><button class="uk-button">View task details</button></a>';
		
			
			echo '</div>';
		}
		
		
		
		
		
	
	?>
		
     </div>
</div>
