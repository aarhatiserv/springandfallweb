$(document).ready(function () {
    $("#pass").click(function () {
        var newPasswordText = $("#newPassword").val();
        let formData = new FormData();
        formData.append('newPasswordGuest', newPasswordText);
        $.ajax({
            url: "/setNewPassword",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#submit").val("Please wait");
                $("#submit").prop("disabled", true);
            },
            success: function (data) {
                $("#submit").prop("disabled", false);
                var res = JSON.parse(data);
                if (res.status === 1) {
                    swal({ title: "Thank you!", text: res.message, type: "success" }, function () {
                        $('#loginForm').modal('show');
                    });
                } else if (res.status === 2) {
            
                    swal({ title: "Opps.!!", text: res.message, type: "error" });
              
                } else if (res.status === 3) {
                    swal({ title: "Opps.!!", text: res.message, type: "error" });
          
                } else {
                    swal({ title: "Opps.!!", text: res.message, type: "error" });
                }
            }
        })
    })
});