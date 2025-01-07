<?php
echo '<section id="home">';
echo '<div class="row"';
echo '<div class="container">';
echo '<h2> Please Log In to Continue</h2>';

echo'<form method="post" action="">';
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

echo '<button class="btn btn-primary" type="submit" name="submit" value="submit">Log In</button>';

echo'</form>';
echo'</div>';
echo'</div>';
echo'</section>';

if (isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	include("functions.php");
	
	$dblink=db_connect('contact_data');

	$salt="CS4413fa24";
	$hash=hash('sha256', $username.$password.$salt);
	$sql="Select `auto_id` from `accounts` where hash='$hash'";
	$result=$dblink->query($sql) or
		die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
	if($result->num_rows>0)//password matched
	{
		$data=$result->fetch_array(MYSQLI_ASSOC);
		$SIDsalt=microtime();//randomized salts
		$sid=hash('sha256', $hash.$SIDsalt);
		$sql="Update `accounts` set `session_id`='$sid' where `auto_id`='$data[auto_id]'";
		$dblink->query($sql) or
			die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
		redirect("index.php?page=results&sid=$sid");
	}//password didnt match
	else
		redirect("index.php?page=login&error=authError");
	
}
?>