<!DOCTYPE HTML>

<html>

<head>

	<title>Whoosh! Help Desk | Home</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Whoosh! CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<section class="fit-to-screen">
		<div class="login-box text-white text-center">
			<h1>Login</h1>
			<p><em>Please, insert your Login and Password</em></p>
			<br>
			<form action="login.php" method="POST">
				<input type="text" name="id" placeholder="Email or ID" class="input-field">
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
				<div><small>Faça login antes de acessar este recurso!</small></div>
			<?php } ?>
		</div>
		<div>
			<a href="index.php"><img src="img/whoosh-logo-icon-ng.svg" width="70"></a>
		</div>
	</section>

</body>

</html>
