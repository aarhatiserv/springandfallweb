// For Show new and confirm  password
$(document).ready(function () {
  const personalProfileDetails = document.getElementById(
    "personalProfileDetails"
  );
  const changePasswordPage = document.getElementById("changePassword");
  const backBtnChangePassword = document.getElementById("backChangePassword");
  const backBtn = document.getElementById("back");
  const btn = document.getElementById("changePasswordBtn");
  btn.addEventListener("click", function () {
    if (personalProfileDetails.style.display !== "none") {
      personalProfileDetails.style.display = "none";
      changePasswordPage.style.display = "flex";
      btn.style.display = "none";
      backBtn.style.display = "none";
      backBtnChangePassword.style.display = "inline";
    } else {
      personalProfileDetails.style.display = "flex";
    }
  });
  // when click back button in change password div then it is show profile section
  backBtnChangePassword.addEventListener("click", function () {
    if (changePasswordPage.style.display !== "none") {
      changePasswordPage.style.display = "none";
      personalProfileDetails.style.display = "flex";
      backBtn.style.display = "inline";
      backBtnChangePassword.style.display = "none";
      btn.style.display = "inline";
    } else {
      changePasswordPage.style.display = "block";
    }
  });
});

// For Update Profile
$("#update").click(function () {
  var userId = $("#userId").val();
  var fullName = $("#profileFullName").val();
  var email = $("#profileEmail").val();
  var phone = $("#profilePhone").val();
  var profileHQ_1 = $("#profileHQ").val();
  var profileHQY_2 = $("#profileHQY").val();
  var profileHS_3 = $("#profileHS").val();
  var profileHSY_4 = $("#profileHSY").val();
  var profileS_5 = $("#profileS").val();
  var profileSY_6 = $("#profileSY").val();
  var password = $("#profilePassword").val();
  var cnfPassword = $("#confirmPassword").val();
  if (password !== cnfPassword) {
    swal({
      title: "Opps.!!",
      text: "Password Didn't Match",
      type: "error",
    });
  } else {
    let formData = new FormData();
    formData.append("userId", userId);
    formData.append("name", fullName);
    formData.append("email", email);
    formData.append("phone", phone);
    formData.append("hq", profileHQ_1);
    formData.append("hqy", profileHQY_2);
    formData.append("hs", profileHS_3);
    formData.append("hsy", profileHSY_4);
    formData.append("s", profileS_5);
    formData.append("sy", profileSY_6);
    formData.append("password", password);
    $.ajax({
      url: "/api/editProfile",
      method: "POST",
      data: formData,
      processData: false,
      contentType: false,
      beforeSend: function () {
        $("#update").val("Please wait");
        $("#update").prop("disabled", true);
      },
      success: function (data) {
        $("#update").prop("disabled", false);
        var res = JSON.parse(data);
        if (res.status === 1) {
          swal(
            {
              title: "Thank you!",
              text: res.message,
              type: "success",
            },
            function () {
              window.location.href = "editProfile";
            }
          );

          // window.location.reload();
        } else if (res.status === 2) {
          swal(
            {
              title: "Opps.!!",
              text: res.message,
              type: "error",
            },
            function () {
              window.location.href = "editProfile";
            }
          );
        } else if (res.status === 3) {
          swal(
            {
              title: "Opps.!!",
              text: res.message,
              type: "error",
            },
            function () {
              window.location.href = "editProfile";
            }
          );
        } else {
          swal(
            {
              title: "Opps.!!",
              text: res.message,
              type: "error",
            },
            function () {
              window.location.href = "editProfile";
            }
          );
        }
      },
    });
  }
});
