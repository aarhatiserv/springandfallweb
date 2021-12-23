<?php $session = session();
if ($session->get('token')) : ?>

<h1>Welcome to Spring and fall</h1>

<?php else : ?>
<div class="jumbotron text-center">
    <h1 class="font-weight-light">New Password</h1>
    <!-- <button class="my-5" id="loginBtn" data-toggle="modal" data-target="#loginForm">SIGN IN</button> -->
    <?php
if(!isset($_COOKIE[$LastID])) { ?>
    <form action="setNewPassword" method="POST">
        <input type="hidden" name="userID" id="userID" value="<?= $LastID ?>" >
    <input type="text" name="newPassword" id="newPassword" placeholder="New Password">
    <input type="submit">
</form>
<?php } ?>
</div>

<?php endif; ?>