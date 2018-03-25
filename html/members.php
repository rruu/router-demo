<?php @include ('connect.php'); ?>
<?php session_start(); ?>
<?php
//this page will only allow users that are logged in
if (isset($_SESSION['username'])) {
	echo "You are logged in, welcome to the members-only area, ". $_SESSION['username'] . ".<br>";
	echo "<a href='logout.php'>Log out</a>";	
}
else {
	echo "You can't view this page without logging in. <br>";
	echo "<a href='login.php'>Log in</a> or <a href='register.php'>Register</a>";
}
?>
