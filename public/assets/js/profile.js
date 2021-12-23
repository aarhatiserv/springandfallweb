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