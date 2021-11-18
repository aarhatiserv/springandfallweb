<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../fav.ico" type="image/ico">
    <title>Spring & Fall | Admin</title>


</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- ------------------------------------------Start Left Nav------------------------ -->
            <?=$this->include('admin/layout/left_nav')?>
            <!-- ------------------------------------------Start Left Nav------------------------ -->

            <!-- ------------------------------------------Start header------------------------ -->
            <?=$this->include('admin/layout/header')?>
            <!-- ------------------------------------------End header-------------------------- -->


            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Admin
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Admin
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form action="/admin/addAdmin" method="POST">
                                        <div>

                                            <label for="username" style="margin-right:219px;">Username</label>
                                            <label for="email" style="margin-right:232px;">Email</label>
                                            <label for="password">Password</label>
                                           
                                            <br>
                                            <input type="hidden" name="types" value="admin"/>
                                            <input type="text" id="username" name="username"
                                                placeholder="Username..."
                                                required style="margin-right:39px;" />
                                          

                                            <input type="text" id="email" name="email"
                                                placeholder="Email..."
                                                required style="margin-right:26px;"/>
                                            

                                            <input type="text" id="password" name="password"
                                                placeholder="Password..."
                                                required />
                                        </div>
                                        <br>

                                        <button class="back"><a href="/admin/home" class="back">Back</a>
                                        </button>
                                        <input type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /page content -->
            <!-- ------------------------------------------Start Footer------------------------ -->
            <?=$this->include('admin/layout/footer')?>
            <!-- ------------------------------------------Start Footer------------------------ -->

        </div>
    </div>


</body>
</html>