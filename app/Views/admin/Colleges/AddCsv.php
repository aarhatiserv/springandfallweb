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
            <?php //$this->include('admin/layout/left_nav') 
            ?>
            <!-- ------------------------------------------Start Left Nav------------------------ -->

            <!-- ------------------------------------------Start header------------------------ -->
            <?php //$this->include('admin/layout/header') 
            ?>
            <!-- ------------------------------------------End header-------------------------- -->


            <!-- page content -->
            <div class="right_col someclassMax" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Colleges
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Colleges
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="mt-2">
                                        <?php if (session()->has('message')) { ?>
                                        <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                                            <?= session()->getFlashdata('message') ?>
                                        </div>
                                        <?php } ?>
                                        <?php $validation = \Config\Services::validation(); ?>
                                    </div>
                                    <form action="import-csv" method="POST" enctype="multipart/form-data">



                                        <br>
                                        <div>
                                            <label for="collegeLogo" style="margin-right:206px">College CSv</label>


                                            <div class="file-input">
                                                <input type="file" id="file" name="file" class="file" />
                                                <label for="file">
                                                    <i class="fa fa-upload"></i>&ensp;Select file
                                                    <div class="file-name">

                                                    </div>

                                                </label>
                                                <input type="hidden" name="image" id="image" value="" />
                                            </div>


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
            <?php // $this->include('admin/layout/footer') 
            ?>
            <!-- ------------------------------------------Start Footer------------------------ -->

        </div>
    </div>


</body>
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

<script>
const fileBg = document.querySelector('#fileBg');
fileBg.addEventListener('change', (e) => {
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
    document.querySelector('.file-nameBg').textContent = fileNameAndSize;
    // document.getElementById("image").value = fileName2;
});
</script>

</html>