<?php

// Include db constants
require_once("./dbconstants.php");

// Connect to database
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if(!$conn) {
  die("Error connecting to database");
}
