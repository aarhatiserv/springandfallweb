// For Show new and confirm  password 
$(document).ready(function () {
    const personalDetails = document.getElementById("personalDetails");
    const changePassword = document.getElementById("changePassword");
    const btn = document.getElementById("changePasswordBtn");
    btn.onclick = function () {
        if (personalDetails.style.display !== "none") {
            personalDetails.style.display = "none";
            changePassword.style.display = "block";
        } else {
            changePassword.style.display = "block";
        }
    }
});


// For Update Profile
$("#update").click(function () {

    var userId = $("#userId").val();
    var fullName = $("#profileFullName").val();
    var email = $("#profileEmail").val();
    var phone = $("#profilePhone").val();
    var password = $("#profilePassword").val();
    var cnfPassword = $("#confirmPassword").val();
    if (password !== cnfPassword) {
        swal({
            title: "Opps.!!",
            text: "Password Didn't Match",
            type: "error"
        });
    } else {
        let formData = new FormData();
        formData.append('userId', userId);
        formData.append('name', fullName);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('password', password);
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
                    swal({
                        title: "Thank you!",
                        text: res.message,
                        type: "success"
                    },
                    function () {
                        window.location.href = "editProfile";
                   });
           
                    // window.location.reload();
                } else if (res.status === 2) {

                    swal({
                        title: "Opps.!!",
                        text: res.message,
                        type: "error"
                    });

                } else if (res.status === 3) {
                    swal({
                        title: "Opps.!!",
                        text: res.message,
                        type: "error"
                    });

                } else {
                    swal({
                        title: "Opps.!!",
                        text: res.message,
                        type: "error"
                    });
                }
            },
        })
    }
});