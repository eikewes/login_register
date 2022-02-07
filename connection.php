<?php

$dbhost = "localhost";
$dbuser = "db_username";
$dbpass = "db_password";
$dbname = "db_name";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
