<script src="assets/js/jquery-3.5.1.js"></script>

<?php
if (isset($_GET['sid'])){
	
	include("functions.php");
	$dblink=db_connect("contact_data");
	$sid=$_GET['sid'];
	$sql="Select `auto_id` from `accounts` where `session_id`='$sid'";
	$result=$dblink->query($sql) or
		die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
	
	if ($result->num_rows<=0)//no valid sid was found
		redirect("index.php?page=login&error=invalidSID");
	echo '<section id="home">';
	echo '<div class="row"';
	echo '<div class="container">';
	echo '<h2> Database Entries</h2>';
	echo '<table class="table table-striped">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Auto ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Username</th><th>Password</th><th>Comments</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody id="results">';
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
	echo '</div>';
	echo '</section>';
}
else{
	redirect("index.php?page=login&error=invalidSID");
}
?>
<script>	
	function refresh_data(){
		$.ajax({
			type:'post',
			url: 'https://ec2-18-117-134-9.us-east-2.compute.amazonaws.com/hw20/query_contacts.php',
			success: function(data){
				$('#results').html(data);
			}
		});
	}
	setInterval(function() { refresh_data();},500);//call the newly created and refresh data function every 500 ms

</script>