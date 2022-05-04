<?php

	// if(isset($_POST['submit'])) {

	// 	$subject = $_POST['subject'];
	// 	$category = $_POST['category'];
	// 	$description = $_POST['description'];

	// }

	// print_r($_POST);

	// echo '<br>';

	$ticketFile = fopen('tickets.tkt', 'a');

	$toText = str_replace('#', '|', array(

		$_POST['subject'],
		$_POST['category'],
		$_POST['description'] . PHP_EOL));

	$ticketSubmit = implode(' # ', $toText);

	fwrite($ticketFile, $ticketSubmit);

	fclose($ticketFile);

	echo $ticketSubmit;
