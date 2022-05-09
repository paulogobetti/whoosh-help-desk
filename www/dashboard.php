<?php

	require_once('validate-access.php');

	include('top-bar.php');

?>

<!DOCTYPE HTML>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Whoosh! Help Desk | Dashboard</title>

</head>

<body>

	<section>
		<div class="container">
			<div>
				<div class="card mt-5 align-middle">
					<div class="card-header">
						Dashboard
					</div>
					<div class="card-body">
					<h5 class="card-title">Welcome, <?= $_SESSION['name'] ?></h5>
					<p class="card-text">
						Open a ticket so that we can assist you.
					</p>
					<a href="open-ticket.php" class="btn btn-primary">Open Ticket</a>
					<a href="consult-ticket.php" class="btn btn-primary">Consult a Ticket</a>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>
