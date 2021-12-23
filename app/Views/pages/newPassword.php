<?php $session = session();
if ($session->get('token')) : ?>

<h1>Welcome to Spring and fall</h1>

<?php else : ?>
<div class="jumbotron text-center">
    <h1 class="font-weight-light">New Password</h1>
    <!-- <button class="my-5" id="loginBtn" data-toggle="modal" data-target="#loginForm">SIGN IN</button> -->
    <?php
if(!isset($_COOKIE[$LastID])) { ?>
    
        <input type="hidden" name="userID" id="userID" value="<?= $LastID ?>" >
    <input type="text" name="newPassword" id="newPassword" placeholder="New Password">
    <input type="submit" id="submit">

<?php } ?>
</div>

<?php endif; ?>

<script>
 var userID = document.getElementById("userID");
   var newPassword = document.getElementById("newPassword");
   var btn = document.getElementById("submit");
    btn.onclick = function () {
        let formData = new FormData();
    formData.append('userID', userID);
    formData.append('newPassword', newPassword);
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
    }
</script>