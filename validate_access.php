<?php

	session_start();

	if(!isset($_SESSION['authenticated']) OR $_SESSION['authenticated'] != 'YES') {
		header('Location: index.php?login=err-perm');
	}
