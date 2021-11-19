<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../fav.ico" type="image/ico">
    <title>Spring & Fall | Admin </title>

    <style>
        .submit{

        }
        .submit:hover{
             color: white;
        }

    </style>
</head>


<body class="login">
    <div>
        <div class="login_wrapper">
       
            <div class="animate form login_form">

                <section class="login_content">
                <img src="../assets/images/logo/logo.png" alt="logo" >
                    <form action="/admin/login" method="POST">
                        
                        <h1>Admin Login Form</h1>
                        <?php if(!empty($message)){ ?>
                            
                             <p style="color:red; font-size:14px; margin-right: 230px;"> <?= $message?></p>
                        <?php } ?>
                        <div>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <!-- <a  href="index.html">Log in</a> -->
                            <input type="submit" value="Log in" class="btn btn-default submit"/>
                            <a class="reset_pass" href="/admin/forgotPassword">Lost your password?</a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                        </div> -->
                    </form>
                </section>
            </div>

           
        </div>
    </div>
</body>

</html>