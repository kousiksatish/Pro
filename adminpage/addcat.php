<?php
	require '../sqlconfig.php';
	
	$name = $_POST['name'];
	$desc = $_POST['desc'];
	
	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
						or die ('Error connecting to the database server');
	$query = "INSERT INTO Categories (catName, catDesc) 
					VALUES ('$name', '$desc');";
				
	$result = mysqli_query($dbc, $query)
		or die ('Error querying database');
	echo 'Category added successfully!!';
	echo ' <br><a href="categories.php">Click here</a> to go back!';
	mysqli_close($dbc);
?>
