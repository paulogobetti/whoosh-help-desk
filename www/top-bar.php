<?php

	require_once('validate-access.php');

?>

<!DOCTYPE HTML>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Whoosh! Help Desk | Top Bar</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Whoosh! CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="img/whoosh-logo-icon.svg">

</head>

<body>

	<section>
		<div>
			<div>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a href="dashboard.php"><img src="img/whoosh-logo-icon-ng.svg" width="70"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse my-2" id="conteudoNavbarSuportado">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="dashboard.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="open-ticket.php">Open Ticket</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="logoff.php">Logoff</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
