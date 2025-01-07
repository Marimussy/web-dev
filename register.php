<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<body>
	<?php 
	if (!isset($_POST['submit'])){
		echo '<h2>Please fill out the following form:</h2>';
		echo '<form method="post" action="">';
		echo'<div class="form-group">';
		echo'<label class="control-label">Username:</label>';
		echo '<input name="username" type="text" class="form-control">';
		echo '<div id="unFeedback"></div>';
		echo'</div>';

		echo'<form method="post" action="">';
		echo'<div class="form-group">';
		echo'<label class="control-label">Password:</label>';
		echo '<input name="password" type="text" class="form-control">';
		echo '<div id="pwFeedback"></div>';
		echo'</div>';

		echo '<button class="btn btn-primary" type="submit" name="submit" value="submit">Register</button>';
		echo '</form>';
	}
	else{
		
		
		include("functions.php");
		$dblink=db_connect('contact_data');
		$username=$_POST['username'];
		$password=$_POST['password'];
		$salt="CS4413fa24";
		$hash=hash('sha256', $username.$password.$salt);
		$sql="Insert into `accounts` (`username`, `hash`) values ('$username','$hash')";
		$dblink->query($sql) or
			die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
		redirect("index.php?page=login");
	}
	
	?>
</body>	
</body>
</html>