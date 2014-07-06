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
                    <li class="uk-active"><a href="login.php">Login</a></li>
                    <li><a href="index1.php">Register</a></li>
                    <li><a href="addons.html">Add-ons</a></li>
                    <li><a href="customizer.html">Customizer</a></li>
                </ul>

        <!--        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></div>

            </div>
        </nav>

 <div class="tm-middle">
	 <div class="uk-container uk-container-center">
		 <form class="uk-form uk-form-horizontal" method = "post" action="loggedin.php">
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Roll no</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="rno" placeholder="Rollno.">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Password</label>
				<div class="uk-form-controls">
					<input type="password" id="form-h-it" name="pwd" placeholder="Password">
				</div>
			</div>
			
			<div class="uk-form-row">
				<div class="uk-form-controls">
				<button type="submit" class="uk-button uk-margin-small-top">Login</button>
				
				</div>
			</div>
		</form>
                            
     </div>
</div>

