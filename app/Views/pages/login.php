<?php $session = session();
if ($session->get('token')) : ?>

<h1>Welcome to Spring and fall</h1>

<?php else : ?>
<div class="jumbotron text-center">
    <h1 class="font-weight-light">Sing in to get more benefits</h1>
    <button class="my-5" id="loginBtn" data-toggle="modal" data-target="#loginForm">SIGN IN</button>
</div>

<?php endif; ?>