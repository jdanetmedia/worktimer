<?php
  $currentTime = time("H:m:s");
?>

<?php require_once("header.php"); ?>
  <div class="container">
    <h1>Timer started at <?php echo $currentTime; ?></h1>
    <form class="timerForm" action="endtimer.php" method="post">
      <input type="hidden" name="startTime" value="<?php echo $currentTime; ?>">
      <!-- <input id="endTime" type="text" name="endTime" value=""> -->
      <input type="submit" class="stopTimer" value="Stop">
    </form>
  </div>
<?php require_once("footer.php"); ?>
