<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	ini_set('error_reporting', E_ALL);

	set_error_handler
		(
			function ($errno, $errstr, $errfile, $errline, $errcontext) {
				echo "<p>err: {$errstr}(erno: {$errno}) <b>{$errfile}</b> (line:{$errline})<br>";
				echo "<pre>" . print_r($errcontext, true) . "</pre></p>";
				return ;
			}
		);

	define('ROOT', __DIR__ . '/');

	if (file_exists(ROOT . 'config/db.php') || (isset($_GET['s']) && ($_GET['s'] == 1))) {
		require ROOT . 'public/index.php';
	} else {
		require ROOT . 'install.php';
	}
