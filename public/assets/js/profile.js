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
    var fullName = $("#profileFullName").val();
    var email = $("#profileEmail").val();
    var phone = $("#profilePhone").val();
    var password = $("#profilePassword").val();
    alert(fullName+" "+email+" "+phone+" "+password);
});