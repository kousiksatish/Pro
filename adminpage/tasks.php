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

	<h1>Welcome admin</h1>
		<a href="newtask.php"><button class="uk-button uk-button-large">Create new task</button></a>
		<a href="categories.php"><button class="uk-button uk-button-large">Manage categories</button></a>
     </div>
</div>
