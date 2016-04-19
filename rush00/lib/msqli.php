<?php
	function db_connect($config) {
		$connexion = mysqli_connect($config['db_hostname'], $config['db_username'], $config['db_passwd']);
		if (mysqli_connect_errno()) {
			return (NULL);
		}
		return ($connexion);
	}

	function db_query($connexion, $query) {
		return (mysqli_query($connexion, $query));
	}

	function db_prepared_query($connexion, $query, $variable) {
		$type = "";
		if ($variable != NULL)
		{ 
			foreach ($variable as $value)
			{
				if (is_int($value) == true)
					$type .= "i";
				else if (is_string($value) == true)
					$type .= "s";
				else if (is_float($value) == true)
					$type .= "d";
				else
					$type .= "b";
			}
		}
		$stmt = mysqli_prepare($connexion, $query);
		array_unshift($variable, $stmp, $type);
		call_user_func_array('mysqli_stmt_bind_param', $variable);
		mysqli_stmt_execute($variable[0]);
		mysqli_stmt_close($variable[0]);
	}
