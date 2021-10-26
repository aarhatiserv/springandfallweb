// code for hiding sections in career guide
$(document).ready(function () {
  // $("#personalDetails").hide(); // hide this personal details onload
  $("#getStarted").click(function () {
    // this is event invokes on
    $("#getstartdSection").fadeOut();
    // $("#personalDetails").show();
    $("#personalDetails").fadeIn();
    // $("#areaOfInterest").show();
    // $("#personalDetails").hide();
  });

  $("#next").click(function () {
    // alert("from submitted");
    $("#getstartdSection").hide();
    $("#personalDetails").fadeOut();
    $("#areaOfInterest").fadeIn();
    // $("p").show(); // hiding for later use
  });

  $("input[name=country").on("change", (e) => {});
});
