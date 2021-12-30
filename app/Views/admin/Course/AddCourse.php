<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../fav.ico" type="image/ico">
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
            <?php $session = session();?>
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0; text-align: center">
                        <a href="/admin/home" class="site_title"><img src="../../assets/images/logo/logo.png" alt="logo"
                                style="height:60px; width:75px;" /></a>
                    </div>
                    <h4 style="text-align: center">Spring & Fall</h4>
                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="../../assets/backend/production/images/img.jpg" alt="..."
                                class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?= strtoupper($session->get('username'));?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">

                                <li><a><i class="fa fa-edit"></i> Masters <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/admin/colleges">Colleges</a></li>
                                        <li><a href="/admin/pages">Pages</a></li>
                                        <li><a href="/admin/sections">Sections</a></li>
                                        <li><a href="/admin/reviews">Reviews</a></li>
                                        <li><a href="/admin/hotCourses">Hot Courses</a></li>
                                        <?php 
                              if(($session->get('adminTypes') === 'superadmin' ))
                              {?>
                                        <li><a href="/admin/addAdmin">Add Admin</a></li>
                                        <?php } ?>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/admin/home">Home</a></li>
                                        <!-- <li><a href="/admin/home2">Dashboard2</a></li>
                            <li><a href="/admin/home3">Dashboard3</a></li> -->
                                    </ul>
                                </li>
                               
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="/admin/logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- ------------------------------------------Start Left Nav------------------------ -->

            <!-- ------------------------------------------Start header------------------------ -->
            <?php $session = session();?>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="../../assets/backend/production/images/img.jpg"
                                        alt=""><?= $session->get('username');?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li><a href="/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img
                                                    src="../../assets/backend/production/images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img
                                                    src="../../assets/backend/production/images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img
                                                    src="../../assets/backend/production/images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img
                                                    src="../../assets/backend/production/images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
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
                                        <input type="hidden" name="id" value="<?= $college_id?>">
                                        <div>
                                            <label for="department" style="margin-right:255px">Department</label>
                                            <label for="level" style="margin-right:242px">Levels</label>

                                            <label for="course" style="margin-right:242px">Course</label>
                                            <br>


                                            <select id="department_id" name="department_id" style="margin-right:50px">
                                            
                                            <?php if(!empty($courseDetailsById)) {?>
                                                  <option value="<?= $courseDetailsById->d_id?>"><?= $courseDetailsById->d_name?></option>
                                                  <?php }else{?>
                                                    <option value=""> Select Department</option>
                                                    <?php }?>

                                                <?php 
                                            foreach($allDepartmentData as $dd){?>
                                                <option value="<?= $dd['id']?>"> <?= $dd['name']?></option>
                                                <?php }
                                            ?>

                                            </select>


                                            <select id="level_id" name="level_id" style="margin-right:50px">
                                            <option value=""> Select Level</option>
                                            <?php if(!empty($courseDetailsById)) {?>
                                                  <option value="<?= $courseDetailsById->l_id?>"><?= $courseDetailsById->l_name?></option>
                                                  <?php }?>
                                                <?php 
                                            foreach($allLevelData as $ld){?>
                                                <option value="<?= $ld['id']?>"> <?= $ld['name']?></option>
                                                <?php }
                                            ?>
                                            </select>

                                            <textarea name="course" id="course" rows="6" cols="70"
                                                placeholder="Enter Address Here..." style="margin-right:50px" value="<?=foreach($courseDetailsById as $cdbi) {$cdbi->course_name }?>">
</textarea>

                                        </div>
                                        <br>


                                        <button class="back"><a href="/admin/colleges" class="back">Back</a>
                                        </button>
                                        <input type="submit" value="Submit">
                                    </form>

                                    

                                </div>
                                <div class="x_content">
                                        <!-- <button role="button"><a href="/admin/addDepartment"><i class="fa fa-plus"></i> Add
                                            Department</a> </button> -->
                                        <table id="datatable-buttons" class="table table-striped table-bordered"
                                            style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Department Name</th>
                                                    <th>Levels Name</th>
                                                    <th>Course Name</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php 
                                            if(!empty($courseDetails)){
                                               foreach($courseDetails as $cd){
                                              
                                                ?>
                                                <tr>
                                                    <td><?= $cd->d_name?></td>
                                                <td><?= $cd->l_name?></td>
                                                <td><?= $cd->name?></td>
                                                
                                                 
                                                    <td><a href="/admin/editCourse/<?= $college_id ?>/<?= $cd->course_id?>"><i
                                                                class="fa fa-edit"></i></a> | <a
                                                            onClick="javascript: ConfirmDelete(<?= $college_id ?>,<?= $cd->course_id?>)"><i
                                                                class="fa fa-trash"></i></a></td>
                                                </tr>
                                                <?php }}?>

                                            </tbody>
                                        </table>
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
<script type="text/javascript">
      function ConfirmDelete(collegeId, id)
      {
        var conf = confirm('Are you sure want to delete this record?');
            if (conf)
                 location.href='/admin/deleteCourse/'+ collegeId + '/' + id;
      }
</script>
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