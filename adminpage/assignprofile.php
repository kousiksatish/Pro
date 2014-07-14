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
		 <a href="tasks.php" class="uk-icon-button uk-icon-arrow-circle-left"></a> Go back
		 <h1 class="tm-article-title">Assign profiles</h1>
		 <br>
	<!--	 <button class="uk-button uk-button-large">Add new category</button>-->
		<?php
			
			$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
			or die ('Error connecting to the database server');		

			$query="SELECT * FROM Categories;";
		
			$result=mysqli_query($dbc,$query)
				or die('Error querying');
				
			$mainquery = "SELECT * FROM register;";
			
			$mainresult=mysqli_query($dbc,$mainquery)
				or die('Error querying');
			
			while($mainrow = mysqli_fetch_array($mainresult))
			{
				echo '<div class="uk-panel uk-panel-box">';
				echo $mainrow['name'] . ' ' . $mainrow['rollno'];					
							
				while($row=mysqli_fetch_array($result))
				{
						if($row['id'] != $mainrow['profile'])
							echo '<a href="assign.php?id=' . $mainrow['id'] . '&pro=' . $row['id'].'">';
						echo ' <button class="uk-button';
						if($row['id'] == $mainrow['profile'])
							echo ' uk-button-large uk-button-success';
						echo '">'.$row['catName'].'</button>  ';
						if($row['id'] != $mainrow['profile'])
							echo '</a>';
						
						
						
				}
				echo '</div><br>';
				$result=mysqli_query($dbc,$query)
					or die('Error querying');
			}
			
			mysqli_close($dbc);
	?>
	
		 <h1 class="tm-article-title">Add new category</h1>
		    
		    <form class="uk-form uk-form-horizontal" method = "post" action="addcat.php">
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Category name</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-it" name="name" placeholder="Category name">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-t">Category description <br>(optional)</label>
				<div class="uk-form-controls">
					<textarea id="form-h-t" cols="30" rows="5" name="desc" placeholder="Category description..."></textarea>
				</div>
			</div>
			
			
			<div class="uk-form-row">
				<div class="uk-form-controls">
				<button type="submit" class="uk-button uk-margin-small-top">Add...</button>
				
				</div>
			</div>
			<!--
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-t">Textarea</label>
				<div class="uk-form-controls">
					<textarea id="form-h-t" cols="30" rows="5" placeholder="Textarea text"></textarea>
				</div>
			</div>
			<div class="uk-form-row">
				<span class="uk-form-label">Checkbox input</span>
				<div class="uk-form-controls uk-form-controls-text">
					<input type="checkbox" id="form-h-c"> <label for="form-h-c">Checkbox input</label><br>
					<input type="checkbox" id="form-h-c1"> <label for="form-h-c1">1</label>
					<label><input type="checkbox"> 2</label>
					<label><input type="checkbox"> 3</label>
				</div>
			</div>
			<div class="uk-form-row">
				<span class="uk-form-label">Mixed controls</span>
				<div class="uk-form-controls uk-form-controls-text">
					<input type="checkbox" id="form-h-mix4"> <label for="form-h-mix4">Checkbox input</label>
					<input type="number" id="form-h-mix5" min="0" max="10" value="5" class="uk-form-width-mini uk-form-small"> <label for="form-h-mix5">Number input</label>
					<select id="form-h-mix6" class="uk-form-small">
						<option selected="selected">Option 01</option>
						<option>Option 02</option>
					</select>
					<label for="form-h-mix6">Select field</label>
				</div>
			</div>
-->
                            </form>
	
     </div>
</div>
	
	</html>
	



