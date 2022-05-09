<?php

	session_start();

	// [pendente] Inserir condicional para bloquear o script sem o submit
		$ticketFile = fopen('../private/tickets.tkt', 'a');

		$toText = str_replace('#', '-', array(

			$_SESSION['id'],
			$_POST['subject'],
			$_POST['category'],
			$_POST['description'] . PHP_EOL));

		$ticketSubmit = implode(' # ', $toText);

		fwrite($ticketFile, $ticketSubmit);

		fclose($ticketFile);

	echo $ticketSubmit;
