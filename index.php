<?php
  require_once("header.php");
  require_once("includes/db/dbconstants.php");
  require_once("includes/functions.php");

  // Connect to database
  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  if(!$conn) {
    die("Error connecting to database");
  }
?>
  <div class="timerTop">
    <?php include("includes/timer.php"); ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1>Your activity</h1>
        <table class="responsive-table bordered">
            <thead>
              <tr>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Time spend</th>
              </tr>
            </thead>
            <tbody>
              <?php

                $sql = "SELECT * FROM `time_record`";

                $query = mysqli_query($conn, $sql) or die("Error");

                if($query) { ?>
                  <?php while($item = mysqli_fetch_array($query)) { ?>
                    <tr>
                      <td>
                        <?php
                          $timestamp = $item["recordTimestamp"];
                          $theDate = date("j M Y", strtotime($timestamp));
                          echo $theDate;
                        ?>
                      </td>
                      <td>
                        <?php echo $item["recordComment"] ?>
                      </td>
                      <td>
                        <?php
                          $theTime = calcSeconds($item["recordTime"]);
                          echo $theTime;
                        ?>
                      </td>
                    </tr>
                  <?php }
                } else { ?>
                  <tr>
                    <td>There is nothing to show yet...</td>
                  </tr>
                <?php } ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>
<?php require_once("footer.php"); ?>
