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

    
    <!-- Bootstrap -->
    <link href="../../assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../assets/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../assets/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../assets/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../../assets/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
        rel="stylesheet">
    <link href="../../assets/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
        rel="stylesheet">
    <link href="../../assets/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"
        rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../assets/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../assets/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../../assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../assets/backend/build/css/custom.min.css" rel="stylesheet">
    <link href="../../assets/backend/build/css/addColleges.css" rel="stylesheet">

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
<!-- jQuery -->
<script src="../../assets/backend/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../assets/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../assets/backend/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress /..-->
<script src="../../assets/backend/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -/..->
<script src="../../assets/backend/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -/..->
<script src="../../assets/backend/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-/..progressbar -->
<script src="../../assets/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->/..
<script src="../../assets/backend/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons --/..>
<script src="../../assets/backend/vendors/skycons/skycons.js"></script>
<!-- Flot -->/..
<script src="../../assets/backend/vendors/Flot/jquery.flot.js"></script>
<script src="../../assets/backend/vendors/Flot/jquery.flot.pie.js"></script>
<script src="../../assets/backend/vendors/Flot/jquery.flot.time.js"></script>
<script src="../../assets/backend/vendors/Flot/jquery.flot.stack.js"></script>
<script src="../../assets/backend/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugi/..ns -->
<script src="../../assets/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../../assets/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../../assets/backend/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->/..
<script src="../../assets/backend/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->/..
<script src="../../assets/backend/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../../assets/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../../assets/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-/..daterangepicker -->
<script src="../../assets/backend/vendors/moment/min/moment.min.js"></script>
<script src="../../assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
/..
<!-- Custom The/..me Scripts -->
<script src="../../assets/backend/build/js/custom.min.js"></script>
<!-- jQuery Spa/..rklines -->
<script src="../../assets/backend/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
/..
<!-- jQuery Spa/..rklines -->
<script src="../../assets/backend/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- morris.js /..-->
<script src="../../assets/backend/vendors/raphael/raphael.min.js"></script>
<script src="../../assets/backend/vendors/morris.js/morris.min.js"></script>
/..
<!-- Datatables/.. -->
<script src="../../assets/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../../assets/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../../assets/backend/vendors/jszip/dist/jszip.min.js"></script>
<script src="../../assets/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../../assets/backend/vendors/pdfmake/build/vfs_fonts.js"></script>
</html>