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
			header("location:../adminpage/members.php");
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
                    <li class="uk-active"><a href="members.php">Members</a></li>
                     
                    <li><a href="tasks.php">Tasks</a></li>
                    
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
	 
		<?php
			
			$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
			or die ('Error connecting to the database server');		

			$query="SELECT * FROM register;";
			

			$result=mysqli_query($dbc,$query)
				or die('Error querying');
			echo '<h3 class="tm-article-subtitle">Admins</h3>';
			while($row=mysqli_fetch_array($result))
			{

				if($row['approved']==1&&$row['admin']==1)
				{
					echo '<div class="uk-panel uk-panel-box">' . $row['name'] . ' ' . $row['rollno'] . '</div><br>';					

				}

			}
			$result=mysqli_query($dbc,$query);
		echo '<h3 class="tm-article-subtitle">Approved members</h3>';
			while($row=mysqli_fetch_array($result))
			{

				if($row['approved']==1&&$row['admin']==0)
				{
					echo '<div class="uk-panel uk-panel-box">' . $row['name'] . ' ' . $row['rollno'] . '</div><br>';					

				}

			}
		
			mysqli_close($dbc);
	?>
		<!--<div class="uk-panel uk-panel-box">-->
	
		
		
		
                            
     </div>
</div>
