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
                            <h3>Hot Courses
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Hot Courses
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form action="/admin/addHotCourses" method="POST" enctype="multipart/form-data">
                                        <div>

                                            <label for="name" style="margin-right:252px">Name</label>
                                            <label for="title" style="margin-right:267px">Title</label>
                                            <label for="discription">Discription</label>
                                            <br>

                                            <input type="text" id="name" name="name" placeholder="Name..."
                                                style="margin-right:50px" required />

                                            <input type="text" id="title" name="title" placeholder="Title..."
                                                style="margin-right:50px" required />

                                            <textarea name="discription" id="discription" rows="6" cols="70"
                                                placeholder="Enter discription Here..." required>
</textarea>
                                        </div>
                                        <div>
                                            <label for="city">City</label>
                                            <input type="text" id="city" name="city" placeholder="Title..."
                                                style="margin-right:50px" required />
                                        </div>
                                        <div>
                                            <label for="country">Country </label>
                                            <select name="country" id="country" style="border-radius: 10px;"
                                                class="form-control  border border-primary mt-0" required>
                                                <option>Interested countries</option>
                                                <option value="UK">USA</option>
                                                <option value="UK">UK</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="France">France</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Phillipines">Phillipines</option>
                                            </select>
                                        </div>

                                        <div class="file-input">
                                            <input type="file" id="file" name="file" class="file" required />
                                            <label for="file">
                                                <i class="fa fa-upload"></i>&ensp;Select file
                                                <div class="file-name">

                                                </div>

                                            </label>
                                        </div>
                                        <br>

                                        <button class="back"><a href="/admin/hotCourses" class="back">Back</a>
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
            <?= $this->include('admin/layout/footer') ?>
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