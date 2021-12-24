<?php $session = session();
if ($session->get('token')) : ?>

<h1>Welcome to Spring and fall</h1>

<?php else : ?>
<div class="jumbotron text-center">
    <h1 class="font-weight-light">New Password</h1>
    <!-- <button class="my-5" id="loginBtn" data-toggle="modal" data-target="#loginForm">SIGN IN</button> -->
    <input type="text" name="newPassword" id="newPassword" placeholder="New Password">
    <button role="button" id="submit">Submit</button>
</div>

<?php endif; ?>

<script>
$(document).ready(function () {
  $("#submit").click(function () {
    var newPasswordText =  $("#newPassword").val();
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
              swal({ title:"Thank you!", text:res.message, type:"success"}, function () {
                    $('#loginForm').modal('show');
                  });
          } else if (res.status === 2) {
            
              swal({ title: "Opps.!!", text: res.message, type: "error" });
              
        }else if (res.status === 3) {  
            swal({ title: "Opps.!!", text: res.message, type: "error" });
          
      } else {
            swal({ title: "Opps.!!", text: res.message, type: "error" });
        }
      }
    })
    })
  });
</script>