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
		 <a href="newtask.php" class="uk-icon-button uk-icon-arrow-circle-left"></a> Go back
		<h1 class="uk-article-title">Task details</h1>
		 <?php
			
			$taskname = $_POST['name'];
			$taskdesc = $_POST['desc'];
			$no = $_POST['no'];
			$comp = $_POST['comp'];
			$profile = $_POST['profile'];
			$deadline = $_POST['deadline'];
			
			$today = date("Y-m-d");
			
			if(empty($deadline)||empty($taskname)||empty($profile)||empty($deadline))
				header("location:newtask.php?err=2");
			/*if($deadline<$today)
				header("location:newtask.php?err=1");*/
			$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
				or die ('Error connecting to the database server');
			$query = "SELECT id,catName FROM Categories WHERE id = $profile;";
			$row = mysqli_fetch_array(mysqli_query($dbc,$query));
			$profilename = $row['catName'];
			$status = "wait";
			$roll = 106113051;
			$query = "INSERT INTO tasks (taskname, taskdesc, number, complexity, taskprofile, deadline, createdby, status)
					VALUES ('$taskname', '$taskdesc', $no, '$comp', $profile, '$deadline', $roll, '$status');";
			mysqli_query($dbc,$query)
				or die('Error querying');
			$query = "SELECT MAX(id) FROM tasks;";
			$result = mysqli_query($dbc,$query)
				or die("Errror");
			
			$row = mysqli_fetch_array($result);
			
			echo '<div class="uk-panel uk-panel-box">';
			echo '<h3 class="tm-article-subtitle">' . $taskname . '</h3>';
			echo $taskdesc . '<br>';
			echo '</div>';
			
			
		?>
	<h1 class="uk-article-title">Select people for the task</h1>
	<form method="post" action="assigntask.php">
		<input type="hidden" name = "id" value="<?php echo $row['MAX(id)'];?>">
	<table class="uk-table uk-table-hover uk-table-striped">
   <!-- <caption>People in category ""</caption> -->
    <thead>
        <tr>
            <th>S.No</th>
            <th>Roll no.</th>
            <th>Name</th>
            <th>Department</th>
            <th>Profile</th>
            <th>Current task status</th> 
        </tr>
    </thead>
    
    <tbody>
		
		<?php
			
		
			$query="SELECT * FROM register;";
			$result=mysqli_query($dbc,$query)
				or die('Error querying');
			while($row=mysqli_fetch_array($result))
			{	//echo '<tr><td><input type="checkbox" name="toassign[]" value="'.$row['rollno'].'"></td></tr>';
				if($row['profile']==$profile)
				{
					echo '<tr>';
					echo '<td><input type="checkbox" name="toassign[]" value="'.$row['rollno'].'"></td>';
					echo '<td>' . $row['rollno'] . '</td>';
					echo '<td>' . $row['name'] . '</td>';
					echo '<td>' . strtoupper($row['dept']) . '</td>';
					echo '<td>' . $profilename . '</td>';
					echo '<td>N/A</td>';
					echo '</tr>';					

				}
			}		
		?>
		
       
    </tbody>
</table>
	
	 <button class="uk-button" type="submit">Select</button>
	 </form>
     </div>
</div>
	
	</html>
	


