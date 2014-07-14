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

?>

<!DOCTYPE html>

<head>
	
	<link id="data-uikit-theme" rel="stylesheet" href="css/uikit.docs.min.css">
	<link rel="stylesheet" href="css/docs.css">

	<script>
	function edit()
	{
		
	var textarea = document.getElementById("area");
	//var half2 = document.getElementById("half2");
	x=textarea.value;
	x = x.replace(/\n/g,"<br>"); //convert \n to break
	textarea.value=x;
	}
	</script>
</head>

<body class="tm-background">
	
	<nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">

                <a class="uk-navbar-brand uk-hidden-small" href="../index.html"><img class="uk-margin uk-margin-remove" src="images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></a>

                <ul class="uk-navbar-nav uk-hidden-small">
                    <li><a href="memberpage/index.php">Home</a></li>
                    <li><a href="memberpage/members.php">Members</a></li>
                    <li><a href="memberpage/meeting.php">Meetings</a></li>
                    <li class="uk-active"><a href="memberpage/tasks.php">Tasks</a></li>
                </ul>

        <!--        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></div>

            </div>
        </nav>

 <div class="tm-middle">
	 <div class="uk-container uk-container-center">
<?php		echo "<a href='viewtask.php?id=$id' class='uk-icon-button uk-icon-arrow-circle-left'></a> Go back";  ?>
	<h1>Update report</h1>
	<?php
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
	//echo '<div class="uk-grid">';
	//echo '<div class="uk-width-1-2">';

	echo '<h3>Task Name : '.$row['taskname'];
	
	echo "<form action='updatereport.php?id=$id' method='post'>";
	$report = $row['report'];
	
	echo "<textarea name='report' id='area' cols='40' rows='10' placeholder=''>$report</textarea><br>";
	echo '<button class="uk-button" type="submit">Update report</button>';
	echo '</form>';

	//echo '</div>';
	
	//echo '<div class="uk-width-1-2">';
	//echo '<h3>Report</h3>';
	//echo $row['report'];
	
	//echo '</div>';
	//echo '</div>';
	?>
	
		
     </div>
</div>

