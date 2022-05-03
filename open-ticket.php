<?php

	require_once('validate_access.php');

	include('top-bar.php');

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Whoosh! Help Desk | Open Ticket</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

	<section>
		<div class="container">
			<div>
				<div>
					<div class="card mt-5 align-middle">
					  <div class="card-header">
					    Open a New Ticket
					  </div>
					  <div id="open-ticket-box">
						<form>
						  <div class="form-group">
						    <label for="exampleFormControlInput1">Email Address</label>
						    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@youremail.com">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Category</label>
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>Technical Support</option>
						      <option>Financial</option>
						    </select>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Description</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>
						  <button type="submit" class="btn btn-primary">Open Ticket</button>
						</form>
					  </div>
					</div>
				</div>

			</div>
		</div>
	</section>

</body>

</html>
