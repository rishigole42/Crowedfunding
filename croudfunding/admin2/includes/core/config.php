<?php



$config['database']['host'] = "localhost";
$config['database']['username'] = "root";
$config['database']['password'] = "";
$config['database']['database'] = "croudfunding";
$config['database']['option'] 	=  array(

					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );

?> 