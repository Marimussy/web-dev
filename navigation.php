<?php
echo '<label class="navbar-toggle" for="navbar-toggle">
    <span></span>
    <span></span>
    <span></span>
</label>
<input type="checkbox" id="navbar-toggle">
<ul class="nav">';

$page=$_GET['page'];

switch($page){
	case "work":
		echo '<li class="active"><a href="index.php?page=work">Work</a></li>';
		echo '<li><a href="index.php?page=school">School</a></li>';
		echo '<li><a href="index.php?page=contact">Contact</a></li>';
		echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
		echo '<li><a href="index.php?page=login">Log In</a></li>';
		echo '<li><a href="index.php">Home</a></li>';
		break;
	case "school":
		echo '<li class="active"><a href="index.php?page=school">School</a></li>';
		echo '<li><a href="index.php?page=work">Work</a></li>';
		echo '<li><a href="index.php?page=contact">Contact</a></li>';
		echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
		echo '<li><a href="index.php?page=login">Log In</a></li>';
		echo '<li><a href="index.php">Home</a></li>';
		break;
	case "hobbies":
		echo '<li class="active"><a href="index.php?page=hobbies">Hobbies</a></li>';
		echo '<li><a href="index.php?page=work">Work</a></li>';
		echo '<li><a href="index.php?page=school">School</a></li>';
		echo '<li><a href="index.php?page=contact">Contact</a></li>';
		echo '<li><a href="index.php?page=login">Log In</a></li>';
		echo '<li><a href="index.php">Home</a></li>';
		break;
	case "contact":
		echo '<li class="active"><a href="index.php?page=contact">Contact</a></li>';
		echo '<li><a href="index.php?page=work">Work</a></li>';
		echo '<li><a href="index.php?page=school">School</a></li>';
		echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
		echo '<li><a href="index.php?page=login">login</a></li>';
		echo '<li><a href="index.php?page=login">Log In</a></li>';
		echo '<li><a href="index.php">Home</a></li>';
		break;
		case "login":
		echo '<li class="active"><a href="index.php?page=login">Log In</a></li>';
		echo '<li><a href="index.php?page=work">Work</a></li>';
		echo '<li><a href="index.php?page=school">School</a></li>';
		echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
		echo '<li><a href="index.php?page=contact">Contact</a></li>';
		echo '<li><a href="index.php">Home</a></li>';
		break;
	default:
		echo '<li class="active"><a href="index.php">Home</a></li>';
		echo '<li><a href="index.php?page=work">Work</a></li>';
		echo '<li><a href="index.php?page=school">School</a></li>';
		echo '<li><a href="index.php?page=contact">Contact</a></li>';
		echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
		echo '<li><a href="index.php?page=login">Log In</a></li>';
		break;
}    
echo '</ul>';
?>
