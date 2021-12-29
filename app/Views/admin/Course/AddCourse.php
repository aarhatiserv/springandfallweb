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

    <style>
    .someclassMax {
        min-height: 670px !important;
    }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- ------------------------------------------Start Left Nav------------------------ -->
            <?= $this->include('admin/layout/left_nav') ?>
            <!-- ------------------------------------------Start Left Nav------------------------ -->

            <!-- ------------------------------------------Start header------------------------ -->
            <?= $this->include('admin/layout/header') ?>
            <!-- ------------------------------------------End header-------------------------- -->


            <!-- page content -->
            <div class="right_col someclassMax" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Courses
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Course
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form action="/admin/addCourse" method="POST">

                                        <div>
                                            <label for="department" style="margin-right:255px">Department</label>
                                            <label for="level" style="margin-right:242px">Levels</label>

                                            <label for="course" style="margin-right:242px">Course</label>
                                            <br>


                                            <select id="department" name="department" style="margin-right:50px" 
                                                >
                                            <?php 
                                            foreach($allDepartmentData as $dd){?>
                                                 <option value="<?= $dd['id']?>"> <?= $dd['name']?></option>
                                            <?php }
                                            ?>

                                            </select>


                                            <select id="level" name="level" style="margin-right:50px" 
                                                >
                                                <?php 
                                            foreach($allDepartmentData as $dd){?>
                                                 <option value="<?= $dd['id']?>"> <?= $dd['name']?></option>
                                            <?php }
                                            ?>
                                            </select>

                                            <textarea name="course" id="course" rows="6" cols="70"
                                                placeholder="Enter Address Here..." style="margin-right:50px">
</textarea>

                                        </div>
                                        <br>


                                        <button class="back"><a href="/admin/colleges" class="back">Back</a>
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
            <?= $this->include('admin/layout/footer')?>
            <!-- ------------------------------------------Start Footer------------------------ -->

        </div>
    </div>


</body>

</html>