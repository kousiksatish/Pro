<?php
	require 'sqlconfig.php';
	if(isset($_POST['submit'])
	{
		$name = $_POST['name'];
		$rollno = $_POST['rollno'];
		$dept = $_POST['dept'];
		$sex = $_POST['sex'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$admin = 0;
		$approved = 0;
		
		if(
		
		$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
							or die ('Error connecting to the database server');
		$query = "INSERT INTO register (name, rollno, dept, sex, password, contact, email, admin, approved) 
						VALUES ('$name', '$rollno', '$dept', '$sex','$pass',  '$contact', '$email', '$admin', '$approved');";
					
		$result = mysqli_query($dbc, $query)
			or die ('Error querying database');
		echo 'Successfully registered!!';
		echo ' <br><a href="index1.php">Click here</a> to register once more!';
		mysqli_close($dbc);
	}
?>




<!--Register page-->

<!DOCTYPE html>

<head>
	
	<link id="data-uikit-theme" rel="stylesheet" href="css/uikit.docs.min.css">
	<link rel="stylesheet" href="css/docs.css">

</head>

<body class="tm-background">
	
	<nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">

                <a class="uk-navbar-brand uk-hidden-small" href="../index.html"><img class="uk-margin uk-margin-remove" src="images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></a>

                <ul class="uk-navbar-nav uk-hidden-small">
                    <li><a href="index.php">Login</a></li>
                    <li class="uk-active"><a href="login.php">Register</a></li>
                    
                </ul>

        <!--        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></div>

            </div>
        </nav>

 <div class="tm-middle">
	 <div class="uk-container uk-container-center">
		 <form class="uk-form uk-form-horizontal" method = "post" action="register.php">
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Name *</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-it" name="name" placeholder="Name">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Roll no *</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="rollno" placeholder="Rollno.">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-s">Department *</label>
				<div class="uk-form-controls">
					<select id="form-h-s" name="dept">
						<option value="chem">CHEM</option>
						<option value="civ">CIV</option>
						<option value="cse">CSE</option>
						<option value="ece">ECE</option>
						<option value="eee">EEE</option>
						<option value="ice">ICE</option>
						<option value="mech">MECH</option>
						<option value="meta">META</option>
						<option value="prod">PROD</option>
					</select>
				</div>
			</div>
			

			<div class="uk-form-row">
				<span class="uk-form-label">Sex *</span>
				<div class="uk-form-controls uk-form-controls-text">
				<!--	<input type="radio" id="form-h-r" name="radio"> <label for="form-h-r">Radio input</label><br>-->
					<input type="radio" id="form-h-r1" name="sex" value="M"> <label for="form-h-r1">Male</label>
					<label><input type="radio" name="sex" value="F">Female</label>
					
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Password *</label>
				<div class="uk-form-controls">
					<input type="password" id="form-h-it" name="pass" placeholder="Password">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Confirm password *</label>
				<div class="uk-form-controls">
					<input type="password" id="form-h-ip" name="repass" placeholder="Retype password">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Contact number *</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="contact" placeholder="Contact number">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Email</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="email" placeholder="Email">
				</div>
			</div>
			
			<div class="uk-form-row">
				<div class="uk-form-controls">
				<button type="submit" name="submit" class="uk-button uk-margin-small-top">Submit</button>
				
				</div>
			</div>
             </form>
                            
     </div>
</div>

