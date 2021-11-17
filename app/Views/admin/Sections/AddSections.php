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
                            <h3>Sections
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Section
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form action="/admin/addSections" method="POST" enctype="multipart/form-data">
                                        <div>

                                            <label for="name" style="margin-right:205px">Section Name</label>
                                            <label for="title" style="margin-right:267px">Title</label>
                                            <label for="pages">Pages</label>
                                            <br>

                                            <input type="text" id="name" name="name" placeholder="Name..."
                                                style="margin-right:50px" required />

                                            <input type="text" id="title" name="title" placeholder="Title..."
                                                style="margin-right:50px" required />

                                            <select id="pages_id" name="pages_id" style="margin-right:50px" required>
                                                <option value="">Select Page</option>
                                                <?php 
                                                foreach($pageData as $pd){
                                                    ?>
                                                <option value="<?= $pd['id']?>"><?= strtoupper($pd['name'])?></option>
                                                <?php
                                                }
                                                ?>

                                            </select>


                                        </div>
                                        <br>
                                        <div>
                                            <label for="discription">Discription</label>
                                            <br>
                                            <textarea name="discription" id="discription" rows="6" cols="70"
                                                placeholder="Enter discription Here..." required>
</textarea>
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
            <?=$this->include('admin/layout/footer')?>
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

</html>