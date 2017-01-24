<?php

function connect_multiForm_db() {
	$multiform_db = array (
	'db_host' => 'localhost',
	'db_user' => 'multiform_dbuser',
	'db_pass' => 'WsG5A6cGB2kpsriG',
	'db_name' => 'MultiForm'
);

	try
		{			
			$connection = new PDO("mysql:host=$multiform_db[db_host];dbname=$multiform_db[db_name]", $multiform_db['db_user'], $multiform_db['db_pass']);
			
		}
		catch(PDOException $e)
		{
			die("Database error activation.");
		}
		return $connection;
 
	}

?>
