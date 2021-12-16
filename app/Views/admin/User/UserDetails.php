<script>
function getval(sel)
{

    let formData = new FormData();
    formData.append('filter', sel);
    $.ajax({
      url: "/admin/PreviousData",
      method: "POST",
      data: formData,
      processData: false,
      contentType: false,
    //   beforeSend: function () {
    //     $("#apply").val("Please wait");
    //     $("#apply").prop("disabled", true);
    //   },
      success: function (data) {
        // $("#apply").prop("disabled", false);
        var res = JSON.parse(data);
        if (res.status === 1) {
        //   alert("Previous Data Display", res.message, "success");
          // window.location.reload();
        } else if (res.status === 2) {
          alert(res.message);
        } else {
        //   alert("Opps.!!", "Something went wrong.!!", "error");
        }
      },
    });
}
</script>

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
                                                   $PreviousDate =  date('Y-m-d', strtotime($currentdate.' - 1 day')); ?>
                                    Filter By <select name="filter" id="" onchange="getval(this);">
                                        <option value="all">Last all Days</option>
                                        <option value="<?php echo $PreviousDate ?>">Previous Day</option>
                                        <option value="2">Last 2 Days</option>
                                        <option value="3">Last 3 Days</option>
                                        <option value="4">Last 4 Days</option>
                                    </select>
                                    <table id="datatable-buttons" class="table table-striped table-bordered"
                                        style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Email ID</th>
                                                <th>Phone No.</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php 
                                               foreach($userData as $ud){
                                              
                                                ?>

                                            <tr>
                                                <td><?= $ud['name']?></td>
                                                <td><?= $ud['email']?></td>

                                                <td><?= $ud['phone']?></td>
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
function ConfirmDelete(id) {
    var conf = confirm('Are you sure want to delete this record?');
    if (conf)
        location.href = '/admin/deleteCollege/' + id;
}
</script>

</html>