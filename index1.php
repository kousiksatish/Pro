<!DOCTYPE html>

<head>
	
	<link id="data-uikit-theme" rel="stylesheet" href="css/uikit.docs.min.css">
	<link rel="stylesheet" href="css/docs.css">

</head>

<body class="tm-background">
	
	<nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">

                <a class="uk-navbar-brand uk-hidden-small" href="../index.html"><img class="uk-margin uk-margin-remove" src="images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></a>

                <ul class="uk-navbar-nav uk-hidden-small">
                    <li><a href="login.php">Login</a></li>
                    <li class="uk-active"><a href="index1.php">Register</a></li>
                    <li><a href="addons.html">Add-ons</a></li>
                    <li><a href="customizer.html">Customizer</a></li>
                </ul>

        <!--        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></div>

            </div>
        </nav>

 <div class="tm-middle">
	 <div class="uk-container uk-container-center">
		 <form class="uk-form uk-form-horizontal" method = "post" action="register.php">
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Name</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-it" name="name" placeholder="Name">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Roll no</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="rollno" placeholder="Rollno.">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-s">Department</label>
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
				<span class="uk-form-label">Sex</span>
				<div class="uk-form-controls uk-form-controls-text">
				<!--	<input type="radio" id="form-h-r" name="radio"> <label for="form-h-r">Radio input</label><br>-->
					<input type="radio" id="form-h-r1" name="sex" value="M"> <label for="form-h-r1">Male</label>
					<label><input type="radio" name="sex" value="F">Female</label>
					
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Password</label>
				<div class="uk-form-controls">
					<input type="password" id="form-h-it" name="pass" placeholder="Password">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Confirm password</label>
				<div class="uk-form-controls">
					<input type="password" id="form-h-ip" name="repass" placeholder="Retype password">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Contact number</label>
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
				<button type="submit" class="uk-button uk-margin-small-top">Submit</button>
				
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
