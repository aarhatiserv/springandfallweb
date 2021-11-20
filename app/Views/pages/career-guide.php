<!-- added by debanjan | 28-jul-2021 -->
<!--Start of Jumbotron-->
<!-- here .. i have show you how to export image from figma..just link here start  -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script language="JavaScript" type="text/javascript">
$(document).ready(function() {

    // ------------------------------------Country--------------------
    $('input:radio[name=country]').change(function() {
        if (this.value == 'USA') {
            getCollege(this.value);
        } else if (this.value == 'UK') {
            getCollege(this.value);
        } else if (this.value == 'Canada') {
            getCollege(this.value);
        } else if (this.value == 'Germany') {
            getCollege(this.value);
        } else if (this.value == 'Ireland') {
            getCollege(this.value);
        } else if (this.value == 'NZ') {
            getCollege(this.value);
        } else if (this.value == 'Australia') {
            getCollege(this.value);
        } else if (this.value == 'Schengen') {
            getCollege(this.value);
        }

    });

    // ------------------------Study---------------------------

    $('input:radio[name=study]').change(function() {
        if (this.value == 'Engineering') {
            getCourses(this.value);
        } else if (this.value == 'Management') {
            getCourses(this.value);
        } else if (this.value == 'Medical') {
            getCourses(this.value);
        } else if (this.value == 'Design') {
            getCourses(this.value);
        } else if (this.value == 'Other') {
            getCourses(this.value);
        }

    });
    // --------------------------------Level---------------------
    $('input:radio[name=level]').change(function() {
        if (this.value == 'Undergraduate') {
            getLevel(this.value);
        } else if (this.value == 'PostGraduate') {
            getLevel(this.value);
        } else if (this.value == 'Certification') {
            getLevel(this.value);
        } else if (this.value == 'Diploma') {
            getLevel(this.value);
        } else if (this.value == 'ExecutiveCourse') {
            getLevel(this.value);
        }

    });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript">
var country = "";
var courses = "";
var levels = "";

function getCollege(country) {


    if (courses != "") {

        if (levels != "") {
            this.country = country;
            countryAndCourseAndLevels();
            // alert(country + " " + courses + " " + levels)
            // call level and country and course api
        } else {
            this.country = country;
            getCourses(courses);
            // call country and course api
        }
    } else if (levels != "") {
        if (courses != "") {
            this.country = country;
            countryAndCourseAndLevels();
            // alert(country + " " + courses + " " + levels)
            // call level and country and course api
        } else {
            this.country = country;
            levelAndCountry();
            //call country and levels api
        }
    } else {
        // call single country api
        this.country = country;
        $('.college').html("Please wait...");
        $('.college').prop("disabled", true);

        $.ajax({
            url: '/api/college/' + country,
            type: 'GET',
            success: function(res) {
                let collegeData = JSON.parse(res);
                let dt = [];
                console.log('res', collegeData);
                if (collegeData.status !== undefined) {

                    if (collegeData.data.length == 0) {
                        $('.college').html("No Record Found");
                        $('.college').prop("disabled", false);
                    } else {
                        collegeData.data.map((item) => (
                            dt.push(
                                ` <li class="media my-4 bg-light">
                                <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` +
                                item.image + `" class="mr-3" alt="..."
                                    title="hrl" width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
                                            <p>` + item.country + ` </p>
                                            <p>` + item.courses + ` </p>
                                            <p>` + item.levels + ` </p>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                            <div class="apply px-5">
                                                <p class="h5_2_P_Days">5 Days to go</p>
                                                <button class="btn applyNow">Apply now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>`
                            )
                        ));
                        // $("#listColleges").html(dt);
                        $('.college').html(dt);
                        $('.college').prop("disabled", false);
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                // console.log(`error`, err);
                $('.ajaxError').html("Countries");
                $('.ajaxError').prop("disabled", false);
                // if (err) {
                //     swal("Oh noes!", "The AJAX request failed!", "error");
                // }
            }
        })
    }
}
// ---------------------------------------------------------------
function getCourses(course) {

    if (levels != "") {
        if (country != "") {
            this.courses = course;
            countryAndCourseAndLevels();
            // alert(country+" "+courses+" "+levels);
            // call level and country and course api
        } else {
            this.courses = course;
            courseAndLevels();
            // alert(levels +" "+ course);
            // call course and level api
        }

    } else if (country != "") {

        if (levels != "") {
            this.courses = course;
            countryAndCourseAndLevels();
            // alert(country+" "+courses+" "+levels);
            // call level and country and course api
        } else {
            // call country and course api
            this.courses = course;
            $('.college').html("Please wait...");
            $('.college').prop("disabled", true);

            $.ajax({
                url: '/api2/college/' + country + '/' + courses,
                type: 'GET',
                success: function(res) {
                    let collegeData = JSON.parse(res);
                    let dt = [];
                    console.log('res', collegeData);
                    if (collegeData.status !== undefined) {

                        if (collegeData.data.length == 0) {
                            $('.college').html("No Record Found");
                            $('.college').prop("disabled", false);
                        } else {
                            collegeData.data.map((item) => (
                                dt.push(
                                    ` <li class="media my-4 bg-light">
                            <img class="p-3 image"  style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` +
                                    item.image + `" class="mr-3" alt="..."
                                title="hrl" width="" height="" />
                            <div class="media-body py-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
                                        <p>` + item.country + ` </p>
                                        <p>` + item.courses + ` </p>
                                        <p>` + item.levels + ` </p>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                        <div class="apply px-5">
                                            <p class="h5_2_P_Days">5 Days to go</p>
                                            <button class="btn applyNow">Apply now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>`
                                )
                            ));
                            // $("#listColleges").html(dt);
                            $('.college').html(dt);
                            $('.college').prop("disabled", false);
                        }
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    // console.log(`error`, err);
                    $('.ajaxError').html("Countries");
                    $('.ajaxError').prop("disabled", false);
                    // if (err) {
                    //     swal("Oh noes!", "The AJAX request failed!", "error");
                    // }
                }
            });
        }
    } else {
        /// call course api
        this.courses = course;
        $('.college').html("Please wait...");
        $('.college').prop("disabled", true);

        $.ajax({
            url: '/api/course/' + courses,
            type: 'GET',
            success: function(res) {
                let collegeData = JSON.parse(res);
                let dt = [];
                console.log('res', collegeData);
                if (collegeData.status !== undefined) {

                    if (collegeData.data.length == 0) {
                        $('.college').html("No Record Found");
                        $('.college').prop("disabled", false);
                    } else {
                        collegeData.data.map((item) => (
                            dt.push(
                                ` <li class="media my-4 bg-light">
                                <img class="p-3 image"  style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` +
                                item.image + `" class="mr-3" alt="..."
                                    title="hrl" width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
                                            <p>` + item.country + ` </p>
                                            <p>` + item.courses + ` </p>
                                            <p>` + item.levels + ` </p>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                            <div class="apply px-5">
                                                <p class="h5_2_P_Days">5 Days to go</p>
                                                <button class="btn applyNow">Apply now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>`
                            )
                        ));
                        // $("#listColleges").html(dt);
                        $('.college').html(dt);
                        $('.college').prop("disabled", false);
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                // console.log(`error`, err);
                $('.ajaxError').html("Countries");
                $('.ajaxError').prop("disabled", false);
                // if (err) {
                //     swal("Oh noes!", "The AJAX request failed!", "error");
                // }
            }
        })
    }
}
// ---------------------------------------------Level--------------------------
function getLevel(level) {

    if (country != "") {
        if (courses != "") {
            this.levels = level;
            countryAndCourseAndLevels();
            // alert(country+" "+courses+" "+levels)
            // call 3 api
        } else {
            this.levels = level;
            levelAndCountry();
            // call country and course api
        }

    } else if (courses != "") {
        if (country != "") {
            this.levels = level;
            countryAndCourseAndLevels();
            // alert(country+" "+courses+" "+levels)
            // call 3 api
        } else {
            this.levels = level;
            courseAndLevels();
            // alert(levels + " " + courses);
            // call courses and levels api
        }

    } else {
        // single parameter pass only level
        this.levels = level;
        $('.college').html("Please wait...");
        $('.college').prop("disabled", true);

        $.ajax({
            url: '/api/level/' + levels,
            type: 'GET',
            success: function(res) {
                let collegeData = JSON.parse(res);
                let dt = [];
                console.log('res', collegeData);
                if (collegeData.status !== undefined) {

                    if (collegeData.data.length == 0) {
                        $('.college').html("No Record Found");
                        $('.college').prop("disabled", false);
                    } else {
                        collegeData.data.map((item) => (
                            dt.push(
                                ` <li class="media my-4 bg-light">
                                <img class="p-3 image"  style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` +
                                item.image + `" class="mr-3" alt="..."
                                    title="hrl" width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
                                            <p>` + item.country + ` </p>
                                            <p>` + item.courses + ` </p>
                                            <p>` + item.levels + ` </p>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                            <div class="apply px-5">
                                                <p class="h5_2_P_Days">5 Days to go</p>
                                                <button class="btn applyNow">Apply now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>`
                            )
                        ));
                        // $("#listColleges").html(dt);
                        $('.college').html(dt);
                        $('.college').prop("disabled", false);
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                // console.log(`error`, err);
                $('.ajaxError').html("Countries");
                $('.ajaxError').prop("disabled", false);
                // if (err) {
                //     swal("Oh noes!", "The AJAX request failed!", "error");
                // }
            }
        })
    }
}


function levelAndCountry() {
    $('.college').html("Please wait...");
    $('.college').prop("disabled", true);

    $.ajax({
        url: '/api2/countryAndLevels/' + country + '/' + levels,
        type: 'GET',
        success: function(res) {
            let collegeData = JSON.parse(res);
            let dt = [];
            console.log('res', collegeData);
            if (collegeData.status !== undefined) {

                if (collegeData.data.length == 0) {
                    $('.college').html("No Record Found");
                    $('.college').prop("disabled", false);
                } else {
                    collegeData.data.map((item) => (
                        dt.push(
                            ` <li class="media my-4 bg-light">
                            <img class="p-3 image"  style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` +
                            item.image + `" class="mr-3" alt="..."
                                title="hrl" width="" height="" />
                            <div class="media-body py-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
                                        <p>` + item.country + ` </p>
                                        <p>` + item.courses + ` </p>
                                        <p>` + item.levels + ` </p>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                        <div class="apply px-5">
                                            <p class="h5_2_P_Days">5 Days to go</p>
                                            <button class="btn applyNow">Apply now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>`
                        )
                    ));
                    // $("#listColleges").html(dt);
                    $('.college').html(dt);
                    $('.college').prop("disabled", false);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            var errorMsg = 'Ajax request failed: ' + xhr.responseText;
            // console.log(`error`, err);
            $('.ajaxError').html("Countries");
            $('.ajaxError').prop("disabled", false);
            // if (err) {
            //     swal("Oh noes!", "The AJAX request failed!", "error");
            // }
        }
    });
}

function courseAndLevels() {
    $('.college').html("Please wait...");
    $('.college').prop("disabled", true);

    $.ajax({
        url: '/api2/courseAndLevel/' + courses + '/' + levels,
        type: 'GET',
        success: function(res) {
            let collegeData = JSON.parse(res);
            let dt = [];
            console.log('res', collegeData);
            if (collegeData.status !== undefined) {

                if (collegeData.data.length == 0) {
                    $('.college').html("No Record Found");
                    $('.college').prop("disabled", false);
                } else {
                    collegeData.data.map((item) => (
                        dt.push(
                            ` <li class="media my-4 bg-light">
                            <img class="p-3 image"  style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` +
                            item.image + `" class="mr-3" alt="..."
                                title="hrl" width="" height="" />
                            <div class="media-body py-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
                                        <p>` + item.country + ` </p>
                                        <p>` + item.courses + ` </p>
                                        <p>` + item.levels + ` </p>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                        <div class="apply px-5">
                                            <p class="h5_2_P_Days">5 Days to go</p>
                                            <button class="btn applyNow">Apply now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>`
                        )
                    ));
                    // $("#listColleges").html(dt);
                    $('.college').html(dt);
                    $('.college').prop("disabled", false);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            var errorMsg = 'Ajax request failed: ' + xhr.responseText;
            // console.log(`error`, err);
            $('.ajaxError').html("Countries");
            $('.ajaxError').prop("disabled", false);
            // if (err) {
            //     swal("Oh noes!", "The AJAX request failed!", "error");
            // }
        }
    });
}

function countryAndCourseAndLevels() {
    $('.college').html("Please wait...");
    $('.college').prop("disabled", true);

    $.ajax({
        url: '/api2/countryAndCourseAndLevel/' + country + '/' + courses + '/' + levels,
        type: 'GET',
        success: function(res) {
            let collegeData = JSON.parse(res);
            let dt = [];
            console.log('res', collegeData);
            if (collegeData.status !== undefined) {

                if (collegeData.data.length == 0) {
                    $('.college').html("No Record Found");
                    $('.college').prop("disabled", false);
                } else {
                    collegeData.data.map((item) => (
                        dt.push(
                            ` <li class="media my-4 bg-light">
                            <img class="p-3 image"  style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` +
                            item.image + `" class="mr-3" alt="..."
                                title="hrl" width="" height="" />
                            <div class="media-body py-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
                                        <p>` + item.country + ` </p>
                                        <p>` + item.courses + ` </p>
                                        <p>` + item.levels + ` </p>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                        <div class="apply px-5">
                                            <p class="h5_2_P_Days">5 Days to go</p>
                                            <button class="btn applyNow">Apply now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>`
                        )
                    ));
                    // $("#listColleges").html(dt);
                    $('.college').html(dt);
                    $('.college').prop("disabled", false);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            var errorMsg = 'Ajax request failed: ' + xhr.responseText;
            // console.log(`error`, err);
            $('.ajaxError').html("Countries");
            $('.ajaxError').prop("disabled", false);
            // if (err) {
            //     swal("Oh noes!", "The AJAX request failed!", "error");
            // }
        }
    });
}
</script>
<section id="getstartdSection">
    <div class="container">
        <div class="row">
            <!-- contetn for get started -->
            <div class="col-6 mt-5">
                <h1 class="career-guide-text mt-5">CAREER GUIDE</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                    Ut enim ad minim veniam,<br> quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                </p>
                <button class="btn get-started flot-right" id="getStarted" role="button">Get Started</button>
            </div>
            <div class="col-sm-6 p-5">
                <img class="img-fluid" src="./assets/images/caree-guide/career-guide-image.png" alt="career-guide-image"
                    width="640" height="360" title="career-guide-image">
            </div>
        </div>
    </div>
</section>
<!-- ends here -->
<!-- personal details form section -->
<section id="personalDetails" style="display: none;">
    <div class="container">
        <div class="row">
        <h5 class="pl-3" style="margin-bottom: -25px;">Personal details</h5>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <!-- image -->
                    <div class="form-row">
                   
                        <div class="col mb-3 mx-2">
                            <div class="file-inputCareer">

                                <input type="file" id="file" name="file" class="fileCareer" required />
                                <label for="file">
                                    <i class="fa fa-upload"></i>&ensp;Select file
                                </label>
                            </div>
                        </div>

                        <div class="col mb-3 mx-2">
                            <div class="file-nameCareer">
                            </div>
                        </div>
                    </div>
                    <!-- image -->


                    <div class="form-row">
                        <!-- <div class="col-md-6 mb-3 mx-2"> -->
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                        </div>
                        <!-- <div class="col-md-6 mb-3 mx-2"> -->
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="addressline1" id="address"
                                placeholder="Address Line1">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="address" class="form-control" name="addressline2" id="addressline2"
                                placeholder="Address Line2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="city" id="city"
                                placeholder="City/Town/Village">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="state" id="state" placeholder="State">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="pin" id="pin" placeholder="Pincode">
                        </div>
                    </div>
                </form>
                <div class="row">
                    <h5 class="pl-3" style="padding-bottom:20px;padding-top:16px">Qualification</h5>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form>
                            <div class="form-row">
                                <!-- <div class="col-md-6 mb-3 mx-2"> -->
                                <div class="col mb-3 mx-2">
                                    <input type="text" class="form-control" name="qualification" id="qualification"
                                        placeholder="Highest Qualification">
                                </div>
                                <!-- <div class="col-md-6 mb-3 mx-2"> -->
                                <div class="col mb-3 mx-2">
                                    <input type="text" class="form-control" name="passingYear" id="passingYear"
                                        placeholder="Year of Passing">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mb-3 mx-2">
                                    <input type="text" class="form-control" name="higherSecondary" id="higherSecondary"
                                        placeholder="12th">
                                </div>
                                <div class="col mb-3 mx-2">
                                    <input type="text" class="form-control" name="higherSecondaryYear"
                                        id="higherSecondaryYear" placeholder="Year of Passing">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mb-3 mx-2">
                                    <input type="text" class="form-control" name="secondary" id="secondary"
                                        placeholder="10th">
                                </div>
                                <div class="col mb-3 mx-2">
                                    <input type="email" class="form-control" name="secondaryPassingYear"
                                        id="secondaryPassingYear" placeholder="Year of Passing">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row p-1 float-right">
                    <button class="btn btn-primary  font-weight-bold mb-2 mr-2" id="next">Next</button>
                </div>
            </div>
</section>
<!-- personal details form section ends here -->
<!-- added by debanjan | 28-jul-2021 -->

<!-- Area of Interest Section -->
<!-- added by debanjan | 30-jul-2021 -->
<section id="areaOfInterest" style="display: none;">
    <div class="container">
        <div class="row ml-5">
            <h3>Area of Interest </h3>
        </div>
        <div class="row ml-5 my-md-3">
            <div class="col-lg-2">
                <h5>Country</h5>
            </div>
            <div class="col-lg-10">
                <div class="form-check form-check-inline text-left d-flex justify-content-between">
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="USA">
                        <label class="form-check-label " for="country">USA</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="UK">
                        <label class="form-check-label" for="country">UK</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Canada">
                        <label class="form-check-label" for="country">Canada</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Germany">
                        <label class="form-check-label" for="country">Germany</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Ireland">
                        <label class="form-check-label" for="country">Ireland</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="NZ">
                        <label class="form-check-label" for="country">NZ</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Australia">
                        <label class="form-check-label" for="country">Australia</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Schengen">
                        <label class="form-check-label" for="country">Schengen</label>
                    </div>
                </div>

            </div>
        </div>
        <div class="row ml-5 my-md-3">
            <div class="col-lg-2">
                <h5>Level</h5>
            </div>
            <div class="col-lg-10">
                <div class="form-check form-check-inline text-left d-flex justify-content-between">
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="Undergraduate">
                        <label class="form-check-label " for="level">Under Graduate</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="PostGraduate">
                        <label class="form-check-label" for="level">Post Graduate</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="Certification">
                        <label class="form-check-label" for="level">Certification</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="Diploma">
                        <label class="form-check-label" for="level">Diploma</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="ExecutiveCourse">
                        <label class="form-check-label" for="level">Executive Course</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ml-5 my-md-3">
            <div class="col-lg-2">
                <h5>Area of Study</h5>
            </div>
            <div class="col-lg-10">
                <div class="form-check form-check-inline text-left d-flex justify-content-between">
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Engineering">
                        <label class="form-check-label " for="study">Engineering</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Management">
                        <label class="form-check-label" for="study">Management</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Medical">
                        <label class="form-check-label" for="study">Medical</label>
                    </div>
                    <div class="form-group mr-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Design">
                        <label class="form-check-label" for="study">Design</label>
                    </div>
                    <div class="form-group mr-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Other">
                        <label class="form-check-label" for="study">Other</label>
                    </div>
                </div>

            </div>
        </div>


        <!-- <div class="row ml-5"> -->
        <section id="universityFilter">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <!-- <div class="row ml-5 my-md-3 p-1"> -->
                        <div class="row my-md-3 p-1">
                            <h4>Your Opportunity </h4>
                        </div>


                        <div class="tab-content border-top border-primary" id="pills-tabContent">


                            <ul class="list-unstyled brd college" id="listColleges">

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>
<!-- added by nazim | 28-jul-2021 -->

<!-- added by greddy | 28-jul-2021 -->


<section class="bg-light">
    <?= $this->include('templates/calltoaction') ?>

</section>