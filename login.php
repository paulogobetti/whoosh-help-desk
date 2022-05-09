<?php

	session_start();

	$loggedUser = false;
	$userID = null;
	$userPermission = null;

	$permissionControl = array(1 => 'Admin', 2 => 'User');

	// USERS
	$appUsers = array(
		array('id' => 1, 'email' => 'admin@admin', 'pass' => '123', 'permission_level' => 1),
		array('id' => 2, 'email' => 'mary@user', 'pass' => 'abc',  'permission_level' => 2),
		array('id' => 3, 'email' => 'john@user', 'pass' => 'abc', 'permission_level' => 2),
	);

	foreach($appUsers as $user) {

		if($user['email'] == $_POST['email'] && $user['pass'] == $_POST['pass']) {
			$loggedUser = true;
			$userID = $user['id'];
			$userPermission = $user['permission_level'];
		}

	}

	if($loggedUser) {
		echo "<script>alert('You are logged in!')</script>";
		$_SESSION['authenticated'] = 'YES';
		$_SESSION['id'] = $userID;
		$_SESSION['permission_level'] = $userPermission;
		header('Location: dashboard.php');
	}

	else {
		$_SESSION['authenticated'] = 'NO';
		header('Location: index.php?login=err');
	}
