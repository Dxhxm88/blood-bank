<?php
/*
 * --------------------------------------------------------------------
 * LOAD THE CUSTOM FILE CONFIGURATIONS
 * --------------------------------------------------------------------
 *
 */
// configure enviroment / set true if it is in live server
$PRODUCTION = false;
define('PRODUCTION', $PRODUCTION);

$BASE_URL = (PRODUCTION) ? "http://www.test.com/blood_bank" : "http://localhost/blood_bank";

define('BASE_URL', $BASE_URL);



/**
 * Configuration for database
 */
$HOSTNAME = (PRODUCTION) ? "" : "localhost";
$USERNAME = (PRODUCTION) ? "" : "root";
$PASSWORD = (PRODUCTION) ? "" : "";
$DATABASE = (PRODUCTION) ? "" : "blood_bank";
$PREFIX   = (PRODUCTION) ? "" : "bb_";

define('HOSTNAME', $HOSTNAME);
define('USERNAME', $USERNAME);
define('PASSWORD', $PASSWORD);
define('DATABASE', $DATABASE);
define('PREFIX'  , $PREFIX);

define('MAINTENANCE_MODE', false);
define('ENCRYPTION_KEY', '');

define('EMAIL_API', '');


?>