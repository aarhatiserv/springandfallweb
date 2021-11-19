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
                                <!--       <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>-->
                                <!--            <ul class="nav child_menu">-->
                                <!--                <li><a href="form.html">General Form</a></li>-->
                                <!--                <li><a href="form_advanced.html">Advanced Components</a></li>-->
                                <!--                <li><a href="form_validation.html">Form Validation</a></li>-->
                                <!--                <li><a href="form_wizards.html">Form Wizard</a></li>-->
                                <!--                <li><a href="form_upload.html">Form Upload</a></li>-->
                                <!--                <li><a href="form_buttons.html">Form Buttons</a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->
                                <!--        <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>-->
                                <!--            <ul class="nav child_menu">-->
                                <!--                <li><a href="general_elements.html">General Elements</a></li>-->
                                <!--                <li><a href="media_gallery.html">Media Gallery</a></li>-->
                                <!--                <li><a href="typography.html">Typography</a></li>-->
                                <!--                <li><a href="icons.html">Icons</a></li>-->
                                <!--                <li><a href="glyphicons.html">Glyphicons</a></li>-->
                                <!--                <li><a href="widgets.html">Widgets</a></li>-->
                                <!--                <li><a href="invoice.html">Invoice</a></li>-->
                                <!--                <li><a href="inbox.html">Inbox</a></li>-->
                                <!--                <li><a href="calendar.html">Calendar</a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->
                                <!--        <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>-->
                                <!--            <ul class="nav child_menu">-->
                                <!--                <li><a href="tables.html">Tables</a></li>-->
                                <!--                <li><a href="tables_dynamic.html">Table Dynamic</a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->
                                <!--        <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span-->
                                <!--                    class="fa fa-chevron-down"></span></a>-->
                                <!--            <ul class="nav child_menu">-->
                                <!--                <li><a href="chartjs.html">Chart JS</a></li>-->
                                <!--                <li><a href="chartjs2.html">Chart JS2</a></li>-->
                                <!--                <li><a href="morisjs.html">Moris JS</a></li>-->
                                <!--                <li><a href="echarts.html">ECharts</a></li>-->
                                <!--                <li><a href="other_charts.html">Other Charts</a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->
                                <!--        <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>-->
                                <!--            <ul class="nav child_menu">-->
                                <!--                <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>-->
                                <!--                <li><a href="fixed_footer.html">Fixed Footer</a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</div>-->
                                <!--<div class="menu_section">-->
                                <!--    <h3>Live On</h3>-->
                                <!--    <ul class="nav side-menu">-->
                                <!--        <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>-->
                                <!--            <ul class="nav child_menu">-->
                                <!--                <li><a href="e_commerce.html">E-commerce</a></li>-->
                                <!--                <li><a href="projects.html">Projects</a></li>-->
                                <!--                <li><a href="project_detail.html">Project Detail</a></li>-->
                                <!--                <li><a href="contacts.html">Contacts</a></li>-->
                                <!--                <li><a href="profile.html">Profile</a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->
                                <!--        <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>-->
                                <!--            <ul class="nav child_menu">-->
                                <!--                <li><a href="page_403.html">403 Error</a></li>-->
                                <!--                <li><a href="page_404.html">404 Error</a></li>-->
                                <!--                <li><a href="page_500.html">500 Error</a></li>-->
                                <!--                <li><a href="plain_page.html">Plain Page</a></li>-->
                                <!--                <li><a href="login.html">Login Page</a></li>-->
                                <!--                <li><a href="pricing_tables.html">Pricing Tables</a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->
                                <!--        <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>-->
                                <!--            <ul class="nav child_menu">-->
                                <!--                <li><a href="#level1_1">Level One</a>-->
                                <!--                <li><a>Level One<span class="fa fa-chevron-down"></span></a>-->
                                <!--                    <ul class="nav child_menu">-->
                                <!--                        <li class="sub_menu"><a href="level2.html">Level Two</a>-->
                                <!--                        </li>-->
                                <!--                        <li><a href="#level2_1">Level Two</a>-->
                                <!--                        </li>-->
                                <!--                        <li><a href="#level2_2">Level Two</a>-->
                                <!--                        </li>-->
                                <!--                    </ul>-->
                                <!--                </li>-->
                                <!--                <li><a href="#level1_2">Level One</a>-->
                                <!--                </li>-->
                                <!--            </ul>-->
                                <!--        </li>-->
                                <!--        <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span-->
                                <!--                    class="label label-success pull-right">Coming Soon</span></a></li>-->
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
                                            <span class="image"><img src="../../assets/backend/production/images/img.jpg"
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
                                            <span class="image"><img src="../../assets/backend/production/images/img.jpg"
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
                                            <span class="image"><img src="../../assets/backend/production/images/img.jpg"
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
                                            <span class="image"><img src="../../assets/backend/production/images/img.jpg"
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
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Sections
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Edit Section
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form action="/admin/editSections" method="POST" enctype="multipart/form-data">
                                        <?php 
                                        foreach($sectionsData as $sectionsData){ ?>

                                        <input type="hidden" name="id" value="<?= $sectionsData->sid ?>" />
                                        <div>

                                            <label for="name" style="margin-right:205px">Section Name</label>
                                            <label for="title" style="margin-right:267px">Title</label>
                                            <label for="pages">Pages</label>
                                            <br>

                                            <input type="text" id="name" name="name" placeholder="Name..."
                                                style="margin-right:50px" value="<?= $sectionsData->section_name ?>"
                                                required />

                                            <input type="text" id="title" name="title" placeholder="Title..."
                                                style="margin-right:50px" value="<?= $sectionsData->title ?>"
                                                required />


                                            <select id="pages_id" name="pages_id" class="pageData">
                                                <option value="">Select Pages </option>
                                            </select>


                                        </div>

                                        <div>
                                            <label for="discription">Discription</label>
                                            <br>
                                            <textarea name="discription" id="discription" rows="6" cols="70"
                                                placeholder="Enter discription Here..." required><?= $sectionsData->discription ?>
</textarea>

                                            <?php } ?>


                                        </div>
                                        <br>

                                        <div class="file-input">
                                            <input type="file" id="file" name="file" class="file" required />
                                            <label for="file">
                                                <i class="fa fa-upload"></i>&ensp;Select file
                                                <div class="file-name">

                                                </div>

                                            </label>

                                        </div>

                                        <br>
                                        <button class="back"><a href="/admin/sections" class="back">Back</a>
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
<script>
const file = document.querySelector('#file');
file.addEventListener('change', (e) => {
    // Get the selected file
    const [file] = e.target.files;
    // Get the file name and size
    const {
        name: fileName,
        size
    } = file;
    // Convert size in bytes to kilo bytes
    const fileSize = (size / 1000).toFixed(2);
    // Set the text content
    const fileNameAndSize = `${fileName} - ${fileSize}KB`;
    const fileName2 = `${fileName}`;
    document.querySelector('.file-name').textContent = fileNameAndSize;
    // document.getElementById("image").value = fileName2;
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script language="JavaScript" type="text/javascript">
$(document).ready(function() {
    getPage();
});
</script>
<script language="JavaScript" type="text/javascript">
function getPage() {
    $.ajax({
        url: '/admin/allPagesInEdit',
        type: 'GET',
        success: function(res) {
            let pageData = JSON.parse(res);
            let dt = [];

            if (pageData.status !== undefined) {
                pageData.data.map((item) => (

                    dt.push(
                        `<option value="` + item.id + `">` + item.name + `</option>`

                    )
                ));
                // $("#listColleges").html(dt);
                $('.pageData').html(dt);
                $('.PageData').prop("disabled", false);
            }

        },
        error: function(xhr, ajaxOptions, thrownError) {
            var errorMsg = 'Ajax request failed: ' + xhr.responseText;
            // console.log(`error`, err);
            $('.ajaxError').html("");
            $('.ajaxError').prop("disabled", false);
            // if (err) {
            //     swal("Oh noes!", "The AJAX request failed!", "error");
            // }
        }
    })

}
</script>

</html>