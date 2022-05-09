<?php

	require_once('validate-access.php');

	include('top-bar.php');

?>

<!DOCTYPE HTML>

<html lang="en">

<head>

	<title>Whoosh! Help Desk | Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

	<section>
		<div class="container">
			<div class="">
				<div class="card mt-5 align-middle">
				  <div class="card-header">
				    Dashboard
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Welcome, Fulano!</h5>
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

	<footer>
        <?php include('footer.php'); ?>
    </footer>

</body>

</html>
