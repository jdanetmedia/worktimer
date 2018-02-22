<?php

require_once("functions.php");
require_once("../header.php");

$seconds = $_POST["workSeconds"];
$comment = $_POST["comment"];

$timeFormatted = calcSeconds($seconds);

// Include db constants
require_once("./db/dbconstants.php");

// Connect to database
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error) {
  die("Error connecting to database");
}

$sql = "INSERT INTO `time_record` (`recordID`, `recordComment`, `recordTime`) VALUES (NULL, '$comment', '$seconds')";

?>

<?php  if($conn->query($sql) === TRUE) {
  $conn->close(); ?>
  <p><?php echo "Recorded time: " . $timeFormatted; ?></p>
<?php } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<a href="../index.php">Back</a>

<?php require_once("../footer.php"); ?>
