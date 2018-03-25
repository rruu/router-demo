<?php @include 'connect.php' ?>
<?php require_once('session.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<div style="display: inline-block;">
		<fieldset>
			<legend>Register</legend>
			<form method="post" action="add-user.php" autocomplete="off">
				<input type="text" name="Username" placeholder="Username" autofocus="" pattern="[a-zA-Z0-9-]+" title="Only letters and numbers are allowed." required="">
				<input type="password" name="Password" placeholder="Password" required="">
				<input type="submit">
			</form>
		</fieldset>
		<p>Already registred?</p>
		<a href="login.php">Log in</a>
	</div>
</body>
</html>