<?php?>

<!DOCTYPE HTML>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Whoosh! Help Desk | Login</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Whoosh! CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="img/whoosh-logo-icon.svg">

</head>

<body>

	<section id="login-page">
		<div class="fit-to-screen">
			<div class="login-box text-white text-center">
				<h1>Login</h1>
				<p><em>Please, insert your Login and Password</em></p>
				<br>
				<form action="login.php" method="POST">
					<input type="email" name="email" placeholder="Email or ID" class="input-field">
					<br><br>
					<input type="password" name="pass" placeholder="Password" class="input-field">
					<p class="text-right"><small><a href="#">Forgot password?</a></small></p>
					<button type="submit" class="btn submit-button">Log In</button>
				</form>
				<?php
					if(isset($_GET['login']) && $_GET['login'] == 'err') {
				?>
					<div><small>Username or password is invalid.</small></div>
				<?php } ?>
				<?php
					if(isset($_GET['login']) && $_GET['login'] == 'err-perm') {
				?>
					<div><small>Please login before accessing this feature!</small></div>
				<?php } ?>
			</div>
			<div>
				<a href="index.php"><img src="img/whoosh-logo-icon-ng.svg" width="70"></a>
			</div>
		</div>
	</section>

</body>

</html>
