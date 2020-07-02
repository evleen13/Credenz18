<?php
    //set off all error for security purposes
	//error_reporting(E_ALL);
	

	//define some contstant
    define( "DB_DSN", "mysql:host=localhost;dbname=credenz_nthdb" );
    define( "DB_USERNAME", "credenz_nthadmin" );
    define( "DB_PASSWORD", "pisbcredenz2017" );
	define( "CLS_PATH", "class" );
	define("LOGGEDINN",false);
	
	//include the classes
	include_once( CLS_PATH . "/user.php" );
	

?>