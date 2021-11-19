<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../fav.ico" type="image/ico">
    <title>Spring & Fall | Admin </title>
</head>
<body>

<div style="text-align:center">
<h2>Forgot Password</h2>
<form action="/admin/forgotPassword" method="POST">
    <?php if(!empty($message)){
        echo $message;
    }?>
  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email" placeholder="Email..." required><br><br>
  <button><a href="/admin/login" type="button" style="text-decoration:none">Back</a></button>&emsp;<input type="submit" value="Submit">
</form> 
</div>
</body>
</html>