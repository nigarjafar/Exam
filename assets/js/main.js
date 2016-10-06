//First-type-div properties
firstwidth=$('.first-type').width();
firstheight=$('.first-type').height();
firstcolor=$('.first-type').css("background-color");
//Second-type-div proerties
secondwidth=$('.second-type').width();
secondheight=$('.second-type').height();
secondcolor=$('.second-type').css("background-color");

//Sending to php
$.ajax({
type: "POST",
url: "db.php",
data:{ firstWidth: firstwidth,
        firstHeight: firstheight,
        firstColor: firstcolor,
        secondWidth: secondwidth,
        secondHeight: secondheight,
        secondColor: secondcolor},
 success: function(response) {
  //Reload for updating data
  $("#main").load(location.href+" #main");
  }

});
