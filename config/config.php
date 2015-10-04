<?php
define('DB_HOST', 'localhost');//put your mysql server here
define('DB_NAME', 'research');//database name
define('DB_USER', '');//put your mysql db username here
define('DB_PASS', '');//put your mysql server db password here

if ((null === DB_USER) && (null === DB_PASS)) {
  die("Username or Password is needed to connect to the mysql database");
}

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

?>