<?php

	session_start();

	$logUser = false;

	$appUsers = array(
		array('id' => 'admin', 'pass' => '123'),
		array('id' => 'user', 'pass' => 'abc'),
	);

	foreach($appUsers as $user) {

		if($user['id'] == $_POST['id'] && $user['pass'] == $_POST['pass']) {
			$logUser = true;
		}

	}

	if($logUser) {
		echo "<script>alert('You are logged in!')</script>";
		$_SESSION['authenticated'] = 'YES';
		header('Location: dashboard.php');
	}

	else {
		$_SESSION['authenticated'] = 'NO';
		header('Location: index.php?login=err');
	}
