<?php

$seconds = $_POST["workSeconds"];
$comment = $_POST["comment"];

$getHours = floor($seconds / 3600);
$getMins = floor(($seconds - ($getHours*3600)) / 60);
$getSecs = floor($seconds % 60);

$timeFormatted = "";

if($getHours < 10) {
  $timeFormatted = "0" . $getHours . ":";
} else {
  $timeFormatted = $getHours . ":";
}

if($getMins < 10) {
  $timeFormatted .= "0" . $getMins . ":";
} else {
  $timeFormatted .= $getMins;
}

if($getSecs <= 10) {
  $timeFormatted .= "0" . $getSecs;
} else {
  $timeFormatted .= $getSecs;
}

// Include db constants
require_once("./db/dbconstants.php");

// Connect to database
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error) {
  die("Error connecting to database");
}

$sql = "INSERT INTO `time_record` (`recordID`, `recordComment`, `recordTime`) VALUES (NULL, '$comment', '$seconds')";

if($conn->query($sql) === TRUE) {
  echo "Recorded time: " . $timeFormatted;
  header("/");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
