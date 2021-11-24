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
    var firstName = $("#fname").val();
    var lastName = $("#lname").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var addressline1 = $("#addressline1").val();
    var addressline2 = $("#addressline2").val();
    var city = $("#city").val();
    var state = $("#state").val();
    var pin = $("#pin").val();
    var qualification = $("#qualification").val();
    var passingYear = $("#passingYear").val();
    var higherSecondary = $("#higherSecondary").val();
    var higherSecondaryYear = $("#higherSecondaryYear").val();
    var secondary = $("#secondary").val();
    var secondaryPassingYear = $("#secondaryPassingYear").val();
    // var input = document.getElementById("file");
    // var file = input.files[0];
    // var formData= new FormData();
    // formData.append("image", file);
    //  const [file] = e.target.files;
    call(firstName,lastName,phone,email,addressline1,addressline2,city,state,pin,qualification,passingYear,higherSecondary,higherSecondaryYear,secondary,secondaryPassingYear);
    // alert(firstName+lastName+phone+email+addressline1+addressline2+city+state+pin+qualification+passingYear+higherSecondary+higherSecondaryYear+secondary+secondaryPassingYear);
    $("#getstartdSection").hide();
    $("#personalDetails").fadeOut();
    $("#areaOfInterest").fadeIn();
    // $("p").show(); // hiding for later use
  });

  $("input[name=country").on("change", (e) => {});
});

function call(firstName,lastName,phone,email,addressline1,addressline2,city,state,pin,qualification,passingYear,higherSecondary,higherSecondaryYear,secondary,secondaryPassingYear){

$.ajax({
  url: "/api/careerGuide",
  method: "POST",
  data: {
    firstName: firstName,
    lastName : lastName,
    phone : phone,
    email : email,
    addressline1 : addressline1,
    addressline2 : addressline2,
    city : city,
    state : state,
    pin : pin,
    qualification : qualification,
    passingYear : passingYear,
    higherSecondary : higherSecondary,
    higherSecondaryYear : higherSecondaryYear,
    secondary : secondary,
    secondaryPassingYear : secondaryPassingYear,
    // fileName: fileName2,
  },
 
  success: function(data) {
      var res = JSON.parse(data);
      if (res.status === 1) {
          swal("Thank you!", res.message, "success");
          // window.location.reload();
      } else if (res.status === 2) {
          swal("Opps.!!", res.message, "error");
      } else {
          swal("Opps.!!", "Something went wrong.!!", "error");
      }
  }
});
}

var fileName2="";
const file = document.querySelector('#file');
file.addEventListener('change', (e) => {
    // Get the selected file
    const [file] = e.target.files;

    // Get the file name and size
    const {
        name: fileName,
        size
    } = file;
    // Convert size in bytes to kilo bytes
    const fileSize = (size / 1000).toFixed(2);
    // Set the text content
    const fileNameAndSize = `${fileName} - ${fileSize}KB`;
     fileName2 = `${fileName}`;
    document.querySelector('.file-nameCareer').textContent = fileNameAndSize;
    // document.getElementById("image").value = fileName2;
});