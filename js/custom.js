$(document).ready(function(){
    $(".stopTimer").click(function(){
        var endTime = new Date();
        var timeString = endTime.getHours() + ':' + endTime.getMinutes();
        document.getElementById('endTime').value = timeString;
    });
});
