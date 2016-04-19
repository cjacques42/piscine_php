<?php

include ROOT . 'lib/msqli.php';
include ROOT . 'lib/check_perms.php';

function config_perms($config_dir)
{
	$perms = fileperms($config_dir);	
	if (($perms & 0x0080) && ($perms & 0x0100) && ($perms & 0x4000) == 0x4000)
		return true;
	return false;
}

mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
if (config_perms(ROOT . "config") && !file_exists(ROOT . "config/db.php") && isset($_POST['submit'])) {
	$config = "<?php
	return array(
		\"db_hostname\"       =>  \"{$_POST['db_hostname']}\",
		\"db_username\"       =>  \"{$_POST['db_username']}\",
		\"db_passwd\"         =>  \"{$_POST['db_passwd']}\"
	);";
	if (file_put_contents(ROOT . "config/db.php", $config)) {
		$config = require ROOT . "config/db.php";
		if (($connexion = db_connect($config)) === NULL) {
			echo "bd connexion error\n";
			unlink(ROOT . "config/db.php");
		} else {
			$query = file_get_contents(ROOT . "config/struct.sql");
			if (mysqli_multi_query($connexion, $query)) {
				do {
					if (($result = mysqli_store_result($connexion))) {
						mysqli_free_result($result);
					}
				} while (mysqli_more_results($connexion) && mysqli_next_result($connexion));
				echo "chmod 755 config folder and remove or chmod 000 install.php\n";
			}
		}
	} else if (!check_perms(ROOT . "config")) {
		echo "chmod 777 config folder\n";
	}
}

?>

<form method="post">
	<label>db host name</label>	
	<input type="text" name="db_hostname" value="localhost" /><br />
	<label>db user name</label>	
	<input type="text" name="db_username" value="db_username" /><br />
	<label>db password</label>	
	<input type="password" name="db_passwd" value="db_passwd" /><br />
	<input type="submit" name="submit" value="submit" /><br />
</form>
