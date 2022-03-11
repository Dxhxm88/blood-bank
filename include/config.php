<?php
session_start();
require_once __DIR__ . "/../my_config.php";

// db configration
$server   = HOSTNAME;
$username = USERNAME;
$password = PASSWORD;
$database = DATABASE;

date_default_timezone_set('Asia/Kuala_Lumpur');
$con = mysqli_connect($server, $username, $password, $database) or die("could not connect to mysql");

// some global value
$DATETIME_FORMAT = "l, M j, Y @ g:ia";
$HOSTNAME = BASE_URL;
$COMPANY_NAME = "Blood Bank";
$COMPANY_ADDRESS = "Kolej Universiti Poly-Tech Mara";
$COMPANY_MOBILE = "+60123456789";
$COMPANY_EMAIL = "nasriaatul24@gmail.com";

require_once 'function.php';
