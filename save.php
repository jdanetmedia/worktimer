<?php
require_once("includes/functions.php");

$seconds = $_POST["workSeconds"];
$comment = $_POST["comment"];

$timeFormatted = calcSeconds($seconds);

// Include db constants
require_once("includes/db/dbconstants.php");

// Connect to database
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error) {
  die("Error connecting to database");
}

$sql = "INSERT INTO `time_record` (`recordID`, `recordComment`, `recordTime`) VALUES (NULL, '$comment', '$seconds')";

require_once("header.php");

?>

<div class="container center">
  <h1 class="centerTitle">Awesome, you're making money!</h1>
  <?php  if($conn->query($sql) === TRUE) {
    $conn->close(); ?>
    <div class="timeContainer pulse">
      <div class="timeContent">
        <span class="timeLabel">
          Recorded time:
        </span>
        <span class="recordedTime">
          <?php echo $timeFormatted; ?>
        </span>
      </div>
    </div>
  <?php } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  ?>

  <a href="index.php" class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Do some more</a>
</div>

<?php require_once("footer.php"); ?>
