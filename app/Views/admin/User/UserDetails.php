<?php $session = session() ?>
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
                            <h3>User
                                <!-- <small>Some examples to get you started</small> -->
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">


                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>User Data
                                        <!-- <small>Users</small> -->
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <!-- <button role="button"><a href="/admin/addColleges"><i class="fa fa-plus"></i> Add
                                            Colleges</a> </button> -->
                                    <?php  $currentdate =  date("Y-m-d");
                                                   $CurrDate =  date('Y-m-d', strtotime($currentdate.' - 0 day'));
                                                   $PreviousDate =  date('Y-m-d', strtotime($currentdate.' - 1 day'));
                                                   $Previous2DaysDate =  date('Y-m-d', strtotime($currentdate.' - 2 days'));
                                                   $Previous3DaysDate =  date('Y-m-d', strtotime($currentdate.' - 3 days'));
                                                   $Previous4DaysDate =  date('Y-m-d', strtotime($currentdate.' - 4 days'));
                                                   $Previous5DaysDate =  date('Y-m-d', strtotime($currentdate.' - 5 days'));
                                                   $Previous6DaysDate =  date('Y-m-d', strtotime($currentdate.' - 6 days'));
                                                   $Previous7DaysDate =  date('Y-m-d', strtotime($currentdate.' - 7 days'));
                                                   ?>
                                    Filter By <select id='filterText' style='display:inline-block' onchange='getval()'>
                                        <option value="all">All Days</option>
                                        <option value="<?= $CurrDate ?>">Today</option>
                                        <option value="<?= $PreviousDate ?>">Previous Day</option>
                                        <option value="<?= $Previous2DaysDate ?>">Last 2 Days</option>
                                        <option value="<?= $Previous3DaysDate ?>">Last 3 Days</option>
                                        <option value="<?= $Previous4DaysDate ?>">Last 4 Days</option>
                                        <option value="<?= $Previous5DaysDate ?>">Last 5 Days</option>
                                        <option value="<?= $Previous6DaysDate ?>">Last 6 Days</option>
                                        <option value="<?= $Previous7DaysDate ?>">Last 7 Days</option>
                                    </select>
                                    <table id="datatable-buttons" class="table table-striped table-bordered"
                                        style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Email ID</th>
                                                <th>Phone No.</th>
                                                <th>Date</th>
                                                <?php 
                                                   if($session->get('adminTypes') === 'superadmin' )
                                                {?>
                                                <th>Action</th>
                                                <?php }?>

                                            </tr>
                                        </thead>


                                        <tbody id="myTable">

                                            <?php 
                                            if(!empty($userData)){
                                               foreach($userData as $ud){
                                              
                                                ?>

                                            <tr class="content">
                                                <td><?= $ud['name']?></td>
                                                <td><?= $ud['email']?></td>

                                                <td><?= $ud['phone']?></td>
                                                <td><?= $ud['registered']?></td>
                                                <?php 
                                                   if($session->get('adminTypes') === 'superadmin' )
                                                {?>
                                                    <td><a href="/admin/editUser/<?= $ud['id']?>"><i class="fa fa-edit"></i></a> | <a onClick="javascript: ConfirmDelete(<?= $ud['id']?>)"><i class="fa fa-trash"></i></a></td>
                                                <?php }?>

                                            </tr>
                                            <?php
                                               }
                                            } else{ ?>
                                            <tr>
                                                No Record Found
                                            </tr>
                                            <?php }
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
function ConfirmDelete(id) {
    var conf = confirm('Are you sure want to delete this record?');
    if (conf)
        location.href = '/admin/deleteUser/' + id;
}
</script>

</html>