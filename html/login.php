<?php @include 'connect.php' ?>
<?php require_once('session.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<fieldset style="display: inline;">
		<legend>Login</legend>
			<form action="login-user.php" method="post" autocomplete="off">
				<input type="text" name="Username" placeholder="Username" autofocus="" pattern="[a-zA-Z0-9-]+" title="Only letters and numbers are allowed." required="">
				<input type="password" name="Password" placeholder="Password" required="">
				<input type="submit">
			</form>
	</fieldset>
	<p>Not registred?</p>
	<a href="register.php">Register</a>
</body>
</html>