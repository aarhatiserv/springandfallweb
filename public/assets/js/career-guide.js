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

  // When Click next button then calling this function
  $("#next").click(function () {
    // Career-Guide details store in variable
    var firstName = $("#careerFname").val();
    var lastName = $("#careerLname").val();
    var phone = $("#careerPhone").val();
    var email = $("#careerEmail").val();
    var addressline1 = $("#careerAddressline1").val();
    var addressline2 = $("#careerAddressline2").val();
    var city = $("#careerCity").val();
    var state = $("#careerState").val();
    var pin = $("#careerPin").val();
    var qualification = $("#careerQualification").val();
    var passingYear = $("#careerPassingYear").val();
    var higherSecondary = $("#careerHigherSecondary").val();
    var higherSecondaryYear = $("#careerHigherSecondaryYear").val();
    var secondary = $("#careerSecondary").val();
    var secondaryPassingYear = $("#careerSecondaryPassingYear").val();
//call ajac for set session
    addPersonalDetailsInSession(
      firstName,
      lastName,
      phone,
      email,
      addressline1,
      addressline2,
      city,
      state,
      pin,
      qualification,
      passingYear,
      higherSecondary,
      higherSecondaryYear,
      secondary,
      secondaryPassingYear
    );
    
    $("#getstartdSection").hide();
    $("#personalDetails").fadeOut();
    $("#areaOfInterest").fadeIn();
    // $("p").show(); // hiding for later use
  });

  $("input[name=country").on("change", (e) => {});
});

var country = "";
var courses = "";
var levels = "";
// #############################################Start Get All Colleges #################################
function getCollege(country) {
  if (courses != "") {
    if (levels != "") {
      this.country = country;
      countryAndCourseAndLevels();
      // call level and country and course api
    } else {
      this.country = country;
      getCourses(courses);
      // call country and course api
    }
  } else if (levels != "") {
    if (courses != "") {
      this.country = country;
      countryAndCourseAndLevels();
      // call level and country and course api
    } else {
      this.country = country;
      levelAndCountry();
      //call country and levels api
    }
  } else {
    // call single country api
    this.country = country;
    $(".college").html("Please wait...");
    $(".college").prop("disabled", true);

    $.ajax({
      url: "/api/college/" + country,
      type: "GET",
      success: function (res) {
        let collegeData = JSON.parse(res);
        let dt = [];
        console.log("res", collegeData);
        if (collegeData.status !== undefined) {
          if (collegeData.data.length == 0) {
            $(".college").html("No Record Found");
            $(".college").prop("disabled", false);
          } else {
            collegeData.data.map((item) =>
              dt.push(
                ` <li class="media my-4 bg-light">
                    <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image +`" class="mr-3" alt="..." title="hrl" width="" height="" />
                      <div class="media-body py-3">
                        <div class="row">
                          <div class="col-md-8">
                              <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names +`</p>
                              <p>` + item.country +` </p>
                              <p>` + item.courses +` </p>
                              <p>` + item.levels +` </p>
                          </div>
                        <div class="col-md-4 d-flex justify-content-end align-items-center ">
                      <div class="apply px-5">
                        <p class="h5_2_P_Days">5 Days to go</p>
                        <button class="btn applyNow" onclick="applyForCollages(` + item.id +`)">Apply now</button>
                                                
                      </div>
                    </div>
                  </div>
                </div>
              </li>`
              )
            );
            // $("#listColleges").html(dt);
            $(".college").html(dt);
            $(".college").prop("disabled", false);
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        var errorMsg = "Ajax request failed: " + xhr.responseText;
        // console.log(`error`, err);
        $(".ajaxError").html("Countries");
        $(".ajaxError").prop("disabled", false);
        // if (err) {
        //     swal("Oh noes!", "The AJAX request failed!", "error");
        // }
      },
    });
  }
}
// #############################################End Get All Colleges #################################

// #############################################Start Get All Courses #################################
function getCourses(course) {
  if (levels != "") {
    if (country != "") {
      this.courses = course;
      countryAndCourseAndLevels();
      // alert(country+" "+courses+" "+levels);
      // call level and country and course api
    } else {
      this.courses = course;
      courseAndLevels();
      // alert(levels +" "+ course);
      // call course and level api
    }
  } else if (country != "") {
    if (levels != "") {
      this.courses = course;
      countryAndCourseAndLevels();
      // alert(country+" "+courses+" "+levels);
      // call level and country and course api
    } else {
      // call country and course api
      this.courses = course;
      $(".college").html("Please wait...");
      $(".college").prop("disabled", true);

      $.ajax({
        url: "/api2/college/" + country + "/" + courses,
        type: "GET",
        success: function (res) {
          let collegeData = JSON.parse(res);
          let dt = [];
          console.log("res", collegeData);
          if (collegeData.status !== undefined) {
            if (collegeData.data.length == 0) {
              $(".college").html("No Record Found");
              $(".college").prop("disabled", false);
            } else {
              collegeData.data.map((item) =>
                dt.push(
                  ` <li class="media my-4 bg-light">
                  <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image +`" class="mr-3" alt="..." title="hrl" width="" height="" />
                    <div class="media-body py-3">
                      <div class="row">
                        <div class="col-md-8">
                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names +`</p>
                            <p>` + item.country +` </p>
                            <p>` + item.courses +` </p>
                            <p>` + item.levels +` </p>
                        </div>
                      <div class="col-md-4 d-flex justify-content-end align-items-center ">
                    <div class="apply px-5">
                      <p class="h5_2_P_Days">5 Days to go</p>
                      <button class="btn applyNow"  onclick="applyForCollages(` + item.id +`)">Apply now</button>
                                              
                    </div>
                  </div>
                </div>
              </div>
            </li>`
                )
              );
              // $("#listColleges").html(dt);
              $(".college").html(dt);
              $(".college").prop("disabled", false);
            }
          }
        },
        error: function (xhr, ajaxOptions, thrownError) {
          var errorMsg = "Ajax request failed: " + xhr.responseText;
          // console.log(`error`, err);
          $(".ajaxError").html("Countries");
          $(".ajaxError").prop("disabled", false);
          // if (err) {
          //     swal("Oh noes!", "The AJAX request failed!", "error");
          // }
        },
      });
    }
  } else {
    /// call course api
    this.courses = course;
    $(".college").html("Please wait...");
    $(".college").prop("disabled", true);

    $.ajax({
      url: "/api/course/" + courses,
      type: "GET",
      success: function (res) {
        let collegeData = JSON.parse(res);
        let dt = [];
        console.log("res", collegeData);
        if (collegeData.status !== undefined) {
          if (collegeData.data.length == 0) {
            $(".college").html("No Record Found");
            $(".college").prop("disabled", false);
          } else {
            collegeData.data.map((item) =>
              dt.push(
                ` <li class="media my-4 bg-light">
                <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image +`" class="mr-3" alt="..." title="hrl" width="" height="" />
                  <div class="media-body py-3">
                    <div class="row">
                      <div class="col-md-8">
                          <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names +`</p>
                          <p>` + item.country +` </p>
                          <p>` + item.courses +` </p>
                          <p>` + item.levels +` </p>
                      </div>
                    <div class="col-md-4 d-flex justify-content-end align-items-center ">
                  <div class="apply px-5">
                    <p class="h5_2_P_Days">5 Days to go</p>
                    <button class="btn applyNow"  onclick="applyForCollages(` + item.id +`)">Apply now</button>
                                            
                  </div>
                </div>
              </div>
            </div>
          </li>`
              )
            );
            // $("#listColleges").html(dt);
            $(".college").html(dt);
            $(".college").prop("disabled", false);
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        var errorMsg = "Ajax request failed: " + xhr.responseText;
        // console.log(`error`, err);
        $(".ajaxError").html("Countries");
        $(".ajaxError").prop("disabled", false);
        // if (err) {
        //     swal("Oh noes!", "The AJAX request failed!", "error");
        // }
      },
    });
  }
}
// #############################################End Get All Courses #################################

// #############################################Start Get All Levels #################################
function getLevel(level) {
  if (country != "") {
    if (courses != "") {
      this.levels = level;
      countryAndCourseAndLevels();
      // alert(country+" "+courses+" "+levels)
      // call 3 api
    } else {
      this.levels = level;
      levelAndCountry();
      // call country and course api
    }
  } else if (courses != "") {
    if (country != "") {
      this.levels = level;
      countryAndCourseAndLevels();
      // alert(country+" "+courses+" "+levels)
      // call 3 api
    } else {
      this.levels = level;
      courseAndLevels();
      // alert(levels + " " + courses);
      // call courses and levels api
    }
  } else {
    // single parameter pass only level
    this.levels = level;
    $(".college").html("Please wait...");
    $(".college").prop("disabled", true);

    $.ajax({
      url: "/api/level/" + levels,
      type: "GET",
      success: function (res) {
        let collegeData = JSON.parse(res);
        let dt = [];
        console.log("res", collegeData);
        if (collegeData.status !== undefined) {
          if (collegeData.data.length == 0) {
            $(".college").html("No Record Found");
            $(".college").prop("disabled", false);
          } else {
            collegeData.data.map((item) =>
              dt.push(
                ` <li class="media my-4 bg-light">
                    <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image +`" class="mr-3" alt="..." title="hrl" width="" height="" />
                      <div class="media-body py-3">
                        <div class="row">
                          <div class="col-md-8">
                              <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names +`</p>
                              <p>` + item.country +` </p>
                              <p>` + item.courses +` </p>
                              <p>` + item.levels +` </p>
                          </div>
                        <div class="col-md-4 d-flex justify-content-end align-items-center ">
                      <div class="apply px-5">
                        <p class="h5_2_P_Days">5 Days to go</p>
                        <button class="btn applyNow"  onclick="applyForCollages(` + item.id +`)">Apply now</button>
                                                
                      </div>
                    </div>
                  </div>
                </div>
              </li>`
              )
            );
            // $("#listColleges").html(dt);
            $(".college").html(dt);
            $(".college").prop("disabled", false);
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        var errorMsg = "Ajax request failed: " + xhr.responseText;
        // console.log(`error`, err);
        $(".ajaxError").html("Countries");
        $(".ajaxError").prop("disabled", false);
        // if (err) {
        //     swal("Oh noes!", "The AJAX request failed!", "error");
        // }
      },
    });
  }
}
// #############################################Start Get All Country And Levels #################################

function levelAndCountry() {
  $(".college").html("Please wait...");
  $(".college").prop("disabled", true);

  $.ajax({
    url: "/api2/countryAndLevels/" + country + "/" + levels,
    type: "GET",
    success: function (res) {
      let collegeData = JSON.parse(res);
      let dt = [];
      console.log("res", collegeData);
      if (collegeData.status !== undefined) {
        if (collegeData.data.length == 0) {
          $(".college").html("No Record Found");
          $(".college").prop("disabled", false);
        } else {
          collegeData.data.map((item) =>
            dt.push(
              ` <li class="media my-4 bg-light">
              <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image +`" class="mr-3" alt="..." title="hrl" width="" height="" />
                <div class="media-body py-3">
                  <div class="row">
                    <div class="col-md-8">
                        <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names +`</p>
                        <p>` + item.country +` </p>
                        <p>` + item.courses +` </p>
                        <p>` + item.levels +` </p>
                    </div>
                  <div class="col-md-4 d-flex justify-content-end align-items-center ">
                <div class="apply px-5">
                  <p class="h5_2_P_Days">5 Days to go</p>
                  <button class="btn applyNow"  onclick="applyForCollages(` + item.id +`)">Apply now</button>
                                          
                </div>
              </div>
            </div>
          </div>
        </li>`
            )
          );
          // $("#listColleges").html(dt);
          $(".college").html(dt);
          $(".college").prop("disabled", false);
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      var errorMsg = "Ajax request failed: " + xhr.responseText;
      // console.log(`error`, err);
      $(".ajaxError").html("Countries");
      $(".ajaxError").prop("disabled", false);
      // if (err) {
      //     swal("Oh noes!", "The AJAX request failed!", "error");
      // }
    },
  });
}
// #############################################End Get All Country Levels #################################

// #############################################Start Get All Courses and Levels #################################

function courseAndLevels() {
  $(".college").html("Please wait...");
  $(".college").prop("disabled", true);

  $.ajax({
    url: "/api2/courseAndLevel/" + courses + "/" + levels,
    type: "GET",
    success: function (res) {
      let collegeData = JSON.parse(res);
      let dt = [];
      console.log("res", collegeData);
      if (collegeData.status !== undefined) {
        if (collegeData.data.length == 0) {
          $(".college").html("No Record Found");
          $(".college").prop("disabled", false);
        } else {
          collegeData.data.map((item) =>
            dt.push(
              ` <li class="media my-4 bg-light">
                    <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image +`" class="mr-3" alt="..." title="hrl" width="" height="" />
                      <div class="media-body py-3">
                        <div class="row">
                          <div class="col-md-8">
                              <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names +`</p>
                              <p>` + item.country +` </p>
                              <p>` + item.courses +` </p>
                              <p>` + item.levels +` </p>
                          </div>
                        <div class="col-md-4 d-flex justify-content-end align-items-center ">
                      <div class="apply px-5">
                        <p class="h5_2_P_Days">5 Days to go</p>
                        <button class="btn applyNow"  onclick="applyForCollages(` + item.id +`)">Apply now</button>
                                                
                      </div>
                    </div>
                  </div>
                </div>
              </li>`
            )
          );
          // $("#listColleges").html(dt);
          $(".college").html(dt);
          $(".college").prop("disabled", false);
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      var errorMsg = "Ajax request failed: " + xhr.responseText;
      // console.log(`error`, err);
      $(".ajaxError").html("Countries");
      $(".ajaxError").prop("disabled", false);
      // if (err) {
      //     swal("Oh noes!", "The AJAX request failed!", "error");
      // }
    },
  });
}
// #############################################End Get All Courses And Levels #################################

// #############################################Start Get All Country Courses And Levels #################################
function countryAndCourseAndLevels() {
  $(".college").html("Please wait...");
  $(".college").prop("disabled", true);

  $.ajax({
    url: "/api2/countryAndCourseAndLevel/" +
      country +
      "/" +
      courses +
      "/" +
      levels,
    type: "GET",
    success: function (res) {
      let collegeData = JSON.parse(res);
      let dt = [];
      console.log("res", collegeData);
      if (collegeData.status !== undefined) {
        if (collegeData.data.length == 0) {
          $(".college").html("No Record Found");
          $(".college").prop("disabled", false);
        } else {
          collegeData.data.map((item) =>
            dt.push(
              ` <li class="media my-4 bg-light">
              <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image +`" class="mr-3" alt="..." title="hrl" width="" height="" />
                <div class="media-body py-3">
                  <div class="row">
                    <div class="col-md-8">
                        <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names +`</p>
                        <p>` + item.country +` </p>
                        <p>` + item.courses +` </p>
                        <p>` + item.levels +` </p>
                    </div>
                  <div class="col-md-4 d-flex justify-content-end align-items-center ">
                <div class="apply px-5">
                  <p class="h5_2_P_Days">5 Days to go</p>
                  <button class="btn applyNow"  onclick="applyForCollages(` + item.id +`)">Apply now</button>
                                          
                </div>
              </div>
            </div>
          </div>
        </li>`
            )
          );
          // $("#listColleges").html(dt);
          $(".college").html(dt);
          $(".college").prop("disabled", false);
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      var errorMsg = "Ajax request failed: " + xhr.responseText;
      // console.log(`error`, err);
      $(".ajaxError").html("Countries");
      $(".ajaxError").prop("disabled", false);
      // if (err) {
      //     swal("Oh noes!", "The AJAX request failed!", "error");
      // }
    },
  });
}

// apply for collages
function applyForCollages(id) {
  $.ajax({
    url: "/api/apply/" + id,
    method: "POST",
    beforeSend: function () {
      $("#apply").val("Please wait");
      $("#apply").prop("disabled", true);
    },
    success: function (data) {
      $("#apply").prop("disabled", false);
      var res = JSON.parse(data);
      if (res.status === 1) {
        swal("Thank you!", res.message, "success");
        // window.location.reload();
      } else if (res.status === 2) {
        swal("Opps.!!", res.message, "error");
      } else {
        swal("Opps.!!", "Something went wrong.!!", "error");
      }
    },
  });
}
// apply for collages code ends here

// ####################################################
// ######### Add personal Deatils in session #########
// ####################################################

function addPersonalDetailsInSession(
  firstName,
  lastName,
  phone,
  email,
  addressline1,
  addressline2,
  city,
  state,
  pin,
  qualification,
  passingYear,
  higherSecondary,
  higherSecondaryYear,
  secondary,
  secondaryPassingYear
) {
  $.ajax({
    url: "/api/careerGuide",
    method: "POST",
    data: {
      firstName: firstName,
      lastName: lastName,
      phone: phone,
      email: email,
      addressline1: addressline1,
      addressline2: addressline2,
      city: city,
      state: state,
      pin: pin,
      qualification: qualification,
      passingYear: passingYear,
      higherSecondary: higherSecondary,
      higherSecondaryYear: higherSecondaryYear,
      secondary: secondary,
      secondaryPassingYear: secondaryPassingYear,
      // fileName: fileName2,
    },

    success: function (data) {
      var res = JSON.parse(data);
      if (res.status === 1) {
        // swal("Thank you!", res.message, "success");
        // window.location.reload();
      } else if (res.status === 2) {
        swal("Opps.!!", res.message, "error");
      } else {
        swal("Opps.!!", "Something went wrong.!!", "error");
      }
    },
  });
}

// ######################################## Start Career-Guide Dispaly File Name ##########################
// var fileName2 = "";
// const file = document.querySelector("#file");
// file.addEventListener("change", (e) => {
//   // Get the selected file
//   const [file] = e.target.files;

//   // Get the file name and size
//   const {
//     name: fileName,
//     size
//   } = file;
//   // Convert size in bytes to kilo bytes
//   const fileSize = (size / 1000).toFixed(2);
//   // Set the text content
//   const fileNameAndSize = `${fileName} - ${fileSize}KB`;
//   fileName2 = `${fileName}`;
//   document.querySelector(".file-nameCareer").textContent = fileNameAndSize;
//   // document.getElementById("image").value = fileName2;
// });
// ######################################## End Career-Guide Dispaly File Name##########################

// document file upload function    #################### Start Active  Later ####################

// function carrerGuideFileUpload(input) {
//   var file = input.files[0];
//   let formData = new FormData();
//   formData.append("file", file);
//   // alert(file);

//   $.ajax({
//     url: "/api/careerGuide/imageUpload",
//     method: "POST",
//     data: formData,
//     processData: false,
//     contentType: false,

//     success: function (data) {
//       // var res = JSON.parse(data);
//       console.log(data);
//       // if (res.status === 1) {
//       //   swal("Thank you!", res.message, "success");
//       //   // window.location.reload();
//       // } else if (res.status === 2) {
//       //   swal("Opps.!!", res.message, "error");
//       // } else {
//       //   swal("Opps.!!", "Something went wrong.!!", "error");
//       // }
//     },
//   });
// }

// document file upload function    #################### End Active  Later ####################


// #############################################End Get All Country Courses And Levels #################################

// #############################################Start For Calls Country Courses And Levels FUnctions #################################
$(document).ready(function () {

  // ------------------------------------Country--------------------
  $("input:radio[name=country]").change(function () {

    if (this.value == "USA") {
      getCollege(this.value);
    } else if (this.value == "UK") {
      getCollege(this.value);
    } else if (this.value == "Canada") {
      getCollege(this.value);
    } else if (this.value == "Germany") {
      getCollege(this.value);
    } else if (this.value == "Ireland") {
      getCollege(this.value);
    } else if (this.value == "NZ") {
      getCollege(this.value);
    } else if (this.value == "Australia") {
      getCollege(this.value);
    } else if (this.value == "Schengen") {
      getCollege(this.value);
    }
  });

  // ------------------------Study---------------------------

  $("input:radio[name=study]").change(function () {
    if (this.value == "Engineering") {
      getCourses(this.value);
    } else if (this.value == "Management") {
      getCourses(this.value);
    } else if (this.value == "Medical") {
      getCourses(this.value);
    } else if (this.value == "Design") {
      getCourses(this.value);
    } else if (this.value == "Other") {
      getCourses(this.value);
    }
  });
  // --------------------------------Level---------------------
  $("input:radio[name=level]").change(function () {
    if (this.value == "Undergraduate") {
      getLevel(this.value);
    } else if (this.value == "PostGraduate") {
      getLevel(this.value);
    } else if (this.value == "Certification") {
      getLevel(this.value);
    } else if (this.value == "Diploma") {
      getLevel(this.value);
    } else if (this.value == "ExecutiveCourse") {
      getLevel(this.value);
    }
  });
});