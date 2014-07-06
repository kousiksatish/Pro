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
                    <li><a href="members.php">Members</a></li>
                    <li><a href="meeting.php">Meetings</a></li>
                    <li class="uk-active"><a href="tasks.php">Tasks</a></li>
                </ul>

        <!--        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="../images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></div>

            </div>
        </nav>

 <div class="tm-middle">
	 <div class="uk-container uk-container-center">
		 <a href="tasks.php" class="uk-icon-button uk-icon-arrow-circle-left"></a> Go back
	<h1 class="uk-article-title">Create new task</h1>
	<form class="uk-form uk-form-horizontal" method = "post" action="register.php">
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Task name</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-it" name="name" placeholder="Name">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-t">Task description</label>
				<div class="uk-form-controls">
					<textarea id="form-h-t" cols="30" rows="5" placeholder="Task description..."></textarea>
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">No. of people</label>
				<div class="uk-form-controls">
					<input type="number" id="form-h-mix5" min="1" max="10" value="1" class="uk-form-width-mini uk-form-small">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-s">Complexity</label>
				<div class="uk-form-controls">
					<select id="form-h-s" name="dept">
						<option value="easy">Easy</option>
						<option value="med">Medium</option>
						<option value="diff">Difficult</option>
						
					</select>
				</div>
			</div>
			
			<div class="uk-form-row">
				<span class="uk-form-label">Task profile</span>
				<div class="uk-form-controls uk-form-controls-text">
					<?php
						$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
						or die ('Error connecting to the database server');		

						$query="SELECT * FROM Categories;"
						or die('Error querying');
						$result=mysqli_query($dbc,$query);
						while($row=mysqli_fetch_array($result))
						{
								echo '<label>';
								echo '<input type="checkbox" value='.$row['id'].'> '.$row['catName'];
							
								echo '</label><br>';
						}
						echo '<br>';
						mysqli_close($dbc);
					?>
					
					
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Deadline</label>
				<div class="uk-form-controls">
					<input type="date" id="form-h-ip" name="contact" placeholder="MM/DD/YYYY">
				</div>
			</div>
			
		
			
			<div class="uk-form-row">
				<div class="uk-form-controls">
				<button type="submit" class="uk-button uk-margin-small-top">Suggest people</button>
				
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
	

