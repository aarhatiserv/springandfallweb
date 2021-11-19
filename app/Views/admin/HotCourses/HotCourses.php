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
            <?= $this->include('admin/layout/left_nav') ?>
            <!-- ------------------------------------------Start Left Nav------------------------ -->

            <!-- ------------------------------------------Start header------------------------ -->
            <?= $this->include('admin/layout/header') ?>
            <!-- ------------------------------------------End header-------------------------- -->


            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Hot Courses
                                <!-- <small>Some examples to get you started</small> -->
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">


                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Hot Course Data
                                        <!-- <small>Users</small> -->
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <button role="button"><a href="/admin/addHotCourses"><i class="fa fa-plus"></i> Add
                                            Hot Course</a> </button>
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Title</th>
                                                <th>Discription</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php 
                                               foreach($hCourseData as $rcd){
                                              
                                                ?>
                                                
                                            <tr>
                                                <td><?= $rcd['name']?></td>
                                                <td><?= $rcd['title']?></td>
                                                <td><?= $rcd['discription']?></td>                                              
                                                <td><a href="../uploads/HotCoursesImage/<?= $rcd['image']?>"target="_blank"><img src="../uploads/HotCoursesImage/<?= $rcd['image']?>" alt="image" heiht="360" width="640" style="height:100px; width:100px"/></a></td>
                                                <td><a href="/admin/editHotCourses/<?= $rcd['id']?>"><i class="fa fa-edit"></i></a> | <a onClick="javascript: ConfirmDelete(<?= $rcd['id']?>)"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <?php
                                               }
                                            ?>
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
      function ConfirmDelete(id)
      {
        var conf = confirm('Are you sure want to delete this record?');
            if (conf)
                 location.href='/admin/deleteHotCourses/'+id;
      }
  </script>
</html>