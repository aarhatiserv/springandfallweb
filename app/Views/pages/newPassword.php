<?php $session = session();
if ($session->get('token')) : ?>

<h1>Welcome to Spring and fall</h1>

<?php else : ?>
<div class="jumbotron text-center">
    <h1 class="font-weight-light">New Password</h1>
    <!-- <button class="my-5" id="loginBtn" data-toggle="modal" data-target="#loginForm">SIGN IN</button> -->
    <input type="text" name="newPassword" id="newPassword" placeholder="New Password">
    <button class="btn btn-primary font-weight-bold mb-2 mr-2" name="pass" id="pass" type="submit"
                        >Submit</button>
</div>

<?php endif; ?>

<script>

</script>