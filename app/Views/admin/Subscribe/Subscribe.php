<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../fav.ico" type="image/ico">
    <title>Admin | Spring & Fall</title>

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
                            <h3>Subscribe
                                <!-- <small>Some examples to get you started</small> -->
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">


                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Subscribe Data
                                        <!-- <small>Users</small> -->
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <!-- <button role="button"><a href="/admin/addPages"><i class="fa fa-plus"></i> Add
                                            Pages</a> </button> -->
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php 
                                               foreach($subscribeData as $sd){
                                              
                                                ?>
                                                
                                            <tr>
                                                <td><?= $sd['email']?></td>                                          
                                                <td><a onClick="javascript: ConfirmDelete(<?= $sd['id']?>)"><i class="fa fa-trash"></i></a></td>
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
                 location.href='/admin/deleteSubscribe/'+id;
      }
  </script>
</html>