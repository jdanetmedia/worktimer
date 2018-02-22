<div class="row timerCenter">
  <div class="col s12">
    <div class="timerContainer">
      <h2>Timer</h2>
      <div id="visibleTimer" class="visibleTimer">
        <time>00:00:00</time>
      </div>
      <a id="start" class="waves-effect waves-light btn"><i class="material-icons right">play_circle_filled</i>Start</a>
      <a id="stop" class="waves-effect waves-light btn"><i class="material-icons right">stop</i>Stop</a>
      <a id="clear" class="waves-effect waves-light btn"><i class="material-icons right">clear</i>Clear</a>
      <p id="workTime"></p>
    </div>
  </div>
</div>
<div class="row timerCenter">
  <form class="col s12" action="includes/save.php" method="post">
      <!-- TODO: Floating labels not working -->
      <input id="workSeconds" type="hidden" name="workSeconds" value="">
      <div class="row">
        <div class="input-field col s12 m3">
          <input id="workTimeFormatted" type="text" class="validate" placeholder="Time">
        </div>
        <div class="input-field col s12 m9">
          <input id="comment" name="comment" type="text" class="validate" placeholder="Comments">
        </div>
        <div class="col s12">
          <input class="waves-effect waves-light btn right" type="submit" name="saveBtn" value="Save">
        </div>
      </div>
  </form>
</div>
