<?php

// Function for formatting seconds INT stored in the database
function calcSeconds($seconds) {
  $getHours = floor($seconds / 3600);
  $getMins = floor(($seconds - ($getHours*3600)) / 60);
  $getSecs = floor($seconds % 60);

  $timeFormatted = "";

  // Add extra 0 if the value is one digit
  if($getHours < 10) {
    $timeFormatted = "0" . $getHours . ":";
  } else {
    $timeFormatted = $getHours . ":";
  }

  if($getMins < 10) {
    $timeFormatted .= "0" . $getMins . ":";
  } else {
    $timeFormatted .= $getMins . ":";
  }

  if($getSecs <= 10) {
    $timeFormatted .= "0" . $getSecs;
  } else {
    $timeFormatted .= $getSecs;
  }

  return $timeFormatted;
}
