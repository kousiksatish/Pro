<?php
	
	require '../sqlconfig.php';

?>

<!DOCTYPE html>

<head>
	
	<link id="data-uikit-theme" rel="stylesheet" href="../css/uikit.docs.min.css">
	<link rel="stylesheet" href="../css/docs.css">

</head>

<body class="tm-background">
	
	<nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">

                <a class="uk-navbar-brand uk-hidden-small" href="../../index.html"><img class="uk-margin uk-margin-remove" src="../images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></a>

                <ul class="uk-navbar-nav uk-hidden-small">
                    <li><a href="index.php">Home</a></li>
                    <li class="uk-active"><a href="members.php">Members</a></li>
                    <li><a href="meeting.php">Meetings</a></li>
                    <li><a href="tasks.php">Tasks</a></li>
                </ul>

        <!--        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="../images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></div>

            </div>
        </nav>

 <div class="tm-middle">
	 <div class="uk-container uk-container-center">	
	 
		<?php
			
			$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
			or die ('Error connecting to the database server');		

			$query="SELECT * FROM register;"
			or die('Error querying');

			$result=mysqli_query($dbc,$query);
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
			$result=mysqli_query($dbc,$query);
		echo '<h3 class="tm-article-subtitle">Unapproved members</h3>';	
			while($row=mysqli_fetch_array($result))
			{

				if($row['approved']==0)
				{
					echo '<div class="uk-panel uk-panel-box">' . $row['name'] . ' ' . $row['rollno']	;					
					echo '  <a href="approvemem.php?id=' . $row['id'] . '"><button class="uk-button uk-button-success">Approve</button></a>';
					echo ' <a href="deletemem.php?id=' . $row['id'] . '"><button class="uk-button uk-button-danger">Delete</button></a>		</div><br>';
				}

			}
			mysqli_close($dbc);
	?>
		<!--<div class="uk-panel uk-panel-box">-->
	
		
		
		
                            
     </div>
</div>
