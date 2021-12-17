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
                                    <form action="/admin/addColleges" method="POST" enctype="multipart/form-data">
                                        <div>

                                            <label for="collegeName" style="margin-right:141px">College/University
                                                Name</label>
                                            <label for="url" style="margin-right:262px">URL</label>
                                            <label for="email">Email</label>
                                            <br>

                                            <input type="text" id="collegeName" name="collegeName"
                                                placeholder="College/University Name.." style="margin-right:50px"
                                                required />

                                            <input type="text" id="url" name="url" placeholder="Website Link"
                                                style="margin-right:50px" required />

                                            <input type="text" id="email" name="email" placeholder="Email..." />

                                        </div>
                                        <br>
                                        <div>
                                            <label for="country" style="margin-right:242px">Country</label>
                                            <label for="countryRank" style="margin-right:205px">Country Rank</label>
                                            <label for="globalRank">Global Rank</label> <br>

                                            <select id="country" name="country" style="margin-right:50px" required>
                                                <option value="">Select Country</option>
                                                <option value="USA">USA</option>
                                                <option value="UK">UK</option>
                                                <option value="Canada">CANADA</option>
                                                <option value="Germany">GERMANY</option>
                                                <option value="Ireland">IRELAND</option>
                                                <option value="NZ">NZ</option>
                                                <option value="Australia">AUSTRALIA</option>
                                                <option value="Schengen">SCHENGEN</option>
                                            </select>

                                            <input type="text" id="countryRank" name="countryRank"
                                                placeholder="Country Rank" style="margin-right:50px" />

                                            <input type="text" id="globalRank" name="globalRank"
                                                placeholder="Global Rank" />
                                        </div>

                                        <br>
                                        <div>
                                            <label for="address" style="margin-right:240px">Address</label> <label
                                                for="about">About</label><br>
                                            <textarea name="address" id="address" rows="6" cols="70"
                                                placeholder="Enter Address Here..." style="margin-right:50px" required>
</textarea>
                                            <textarea name="about" id="about" rows="6" cols="70"
                                                placeholder="Enter About Here..." required>
</textarea>
                                        </div>

                                        <br>

                                        <div>
                                            <label for="offers" style="margin-right:255px">Course Offers</label><label
                                                for="course" style="margin-right:242px">Courses</label> <label
                                                for="level">Levels</label><br>
                                            <input type="text" id="offers" name="offers" placeholder="Offers..."
                                                style="margin-right:50px" />


                                            <select id="course" name="course[]" style="margin-right:50px" multiple
                                                required>
                                                <option value="">Select Course</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Management">Management</option>
                                                <option value="Medical">Medical</option>
                                                <option value="Design">Design</option>
                                                <option value="Other">Other</option>
                                            </select>


                                            <select id="level" name="level[]" style="margin-right:50px" multiple
                                                required>
                                                <option value="">Select Levels</option>
                                                <option value="Undergraduate">Under Graduate</option>
                                                <option value="PostGraduate">Post Graduate</option>
                                                <option value="Certification">Certification</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="ExecutiveCourse">Executive Course</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <label for="collegeLogo" style="margin-right:206px">College Logo</label>
                                            <label for="collegeBackground">College Background</label><br>

                                            <div class="file-input">
                                                <input type="file" id="file" name="file" class="file" required />
                                                <label for="file">
                                                    <i class="fa fa-upload"></i>&ensp;Select file
                                                    <div class="file-name">

                                                    </div>

                                                </label>
                                                <input type="hidden" name="image" id="image" value="" />
                                            </div>

                                            <div class="file-input" style="margin-left: 291px; margin-top:-38px">

                                                <input type="file" id="fileBg" name="fileBg" class="file" required />
                                                <label for="fileBg">
                                                    <i class="fa fa-upload"></i>&ensp;Select file
                                                    <div class="file-nameBg">

                                                    </div>

                                                </label>
                                                <input type="hidden" name="imageBg" id="imageBg" value="" />
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
            <?= $this->include('admin/layout/footer')?>
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