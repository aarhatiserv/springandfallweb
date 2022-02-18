// Display please wait when click tab of country and courses and career
// $(document).ready(function() {
//     $('.college').html("Please wait...");

//     $('.college').prop("disabled", true);
// });

function refresh() {
  window.location.href = "university-or-college-selection";
}

// apply for collages
function applyForCollegeInConsultation(id) {
  let formData = new FormData();
  formData.append("id", id);
  $.ajax({
    url: "/api/applyForCollegeInConsultation",
    method: "POST",
    data: formData,
    processData: false,
    contentType: false,
    beforeSend: function () {
      $("#apply").val("Please wait");
      $("#apply").prop("disabled", true);
    },
    success: function (data) {
      $("#apply").prop("disabled", false);
      var res = JSON.parse(data);
      if (res.status === 1) {
        swal({ title: "Thank you!", text: res.message, type: "success" });
        // window.location.reload();
      } else if (res.status === 2) {
        swal(
          { title: "Opps.!!", text: res.message, type: "error" },
          function () {
            $("#loginForm").modal("show");
          }
        );
      } else if (res.status === 3) {
        swal({ title: "Opps.!!", text: res.message, type: "error" });
      } else {
        swal(
          { title: "Opps.!!", text: res.message, type: "error" },
          function () {
            $("#loginForm").modal("show");
          }
        );
      }
    },
  });
}
// apply for collages code ends here

// getCountry in consultation
function getCollegeInConsultation(country) {
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
          collegeData.data.map((item2) =>
            item2.map((item) =>
              dt.push(
                ` <li class="media my-4 bg-light">
                                <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` +
                  item.country +
                  `/logo/` +
                  item.image +
                  `" class="mr-3" alt="..."
                                    title="hrl" width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                        <a href="/college/` +
                  item.country +
                  `/` +
                  item.college_id +
                  `"><p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` +
                  item.college_name +
                  `</p></a>
                                            <p>` +
                  item.country +
                  ` </p>
                                            <p>` +
                  item.d_name +
                  ` </p>
                                            
                                          </div>
                                        <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                            <div class="apply px-5">
                                                
                                                <button class="btn applyNow" onclick="applyForCollegeInConsultation(` +
                  item.course_id +
                  `)">Apply now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>`
              )
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
      console.log(`error`, err);
      $(".ajaxError").html("Countries");
      $(".ajaxError").prop("disabled", false);
      if (err) {
        swal("Oh noes!", "The AJAX request failed!", "error");
      }
    },
  });
}

var country = "";
var courses = "";

// getCollegeWithCountry in consultation
function getCollegeWithCountry(country) {
  if (country != "") {
    this.country = country;
    getCollegeWithCountryAndCoursesInConsultation();
  } else {
    console.log("Please Select Any Country");
  }
}

// getCollegeWithCourse in consultation

function getCollegeWithCourse(courses) {
  if (courses != "") {
    this.courses = courses;
    getCollegeWithCountryAndCoursesInConsultation();
  } else {
    console.log("Please Select Any Course");
  }
}

// getCollegeWithCourse in consultation And // getCollegeWithCountry in consultation

function getCollegeWithCountryAndCoursesInConsultation(country, courses) {
  $("#collegeListContainer").html("Please wait...");
  $("#collegeListContainer").prop("disabled", true);

  $.ajax({
    url: "/api2/college/" + country + "/" + courses,
    type: "GET",
    success: function (res) {
      let collegeData = res;
      let dt = [];
      console.log("res", collegeData);
      if (collegeData.status !== undefined) {
        if (collegeData.data.length == 0) {
          $("#collegeListContainer").html("No Record Found");
          $("#collegeListContainer").prop("disabled", false);
        } else {
          collegeData.data.map((item2) =>
            item2.map((item) =>
              dt.push(
                `  <li class="media my-4 bg-light">
                          <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` +
                  item.country +
                  `/logo/` +
                  item.image +
                  `" class="mr-3" alt="..."
                              title="hrl" width="" height="" />
                          <div class="media-body py-3">
                              <div class="row">
                                  <div class="col-md-8">
                                  <a href="/college/` +
                  item.country +
                  `/` +
                  item.college_id +
                  `"><p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` +
                  item.college_name +
                  `</p></a>
                                      <p>` +
                  item.country +
                  ` </p>
                                      <p>` +
                  item.d_name +
                  ` </p>
                                      
                                    </div>
                                  <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                      <div class="apply px-5">
                                          
                                          <button class="btn applyNow" onclick="applyForCollegeInConsultation(` +
                  item.course_id +
                  `)">Apply now</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>`
              )
            )
          );
          // $("#listColleges").html(dt);
          $("#collegeListContainer").html(dt);
          $("#collegeListContainer").prop("disabled", false);
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      var errorMsg = "Ajax request failed: " + xhr.responseText;
      console.log(`error`, err);
      $(".ajaxError").html("Countries");
      $(".ajaxError").prop("disabled", false);
      if (err) {
        swal("Oh noes!", "The AJAX request failed!", "error");
      }
    },
  });
}
