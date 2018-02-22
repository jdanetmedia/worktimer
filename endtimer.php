<?php

  $startTime = $_POST['startTime'];
  $endTime = time("H:m:s");

  $t1 = strtotime($startTime);
  $t2 = strtotime($endTime);

  $workTime = ($st2/3600) - ($st1/3600);

?>

<?php require_once("header.php"); ?>
  <div class="container">
    <h1>You have worked from <?php echo $startTime . " to " . $endTime; ?></h1>
      <p>Worktime is: <?php echo $workTime; ?></p>
  </div>
<?php require_once("footer.php"); ?>
