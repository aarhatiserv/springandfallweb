<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript">
function getCollege(country) {

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
                                <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image + `" class="mr-3" alt="..."
                                    title="hrl" width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
                                            <p>` + item.country + ` </p>
                                            <p>` + item.courses + ` </p>
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
            console.log(`error`, err);
            $('.ajaxError').html("Countries");
            $('.ajaxError').prop("disabled", false);
            if (err) {
                swal("Oh noes!", "The AJAX request failed!", "error");
            }
        }
    });
}

var country = "";
var courses = "";

function getCollegeWithCourse(country) {
    if (country != "") {
        this.country = country;
        ff();
    } else {
        console.log("Please Select Any Country");
    }
}

function getCollegeWithCourse1(courses) {
    if (courses != "") {
        this.courses = courses;
        ff();
    } else {
        console.log("Please Select Any Course");
    }

}

function ff() {

    // if (country === "" || courses === "") {
    //     console.log('courses and country', courses, country);
    // $('.college').html("Country and Courses must be filled");
    // $('.college').prop("disabled", true);
    // } else {

    $('.collegeWithCourse').html("Please wait...");
    $('.collegeWithCourse').prop("disabled", true);

    $.ajax({
        url: '/api2/college/' + country + '/' + courses,
        type: 'GET',
        success: function(res) {
            let collegeData = JSON.parse(res);
            let dt = [];
            console.log('res', collegeData);
            if (collegeData.status !== undefined) {

                if (collegeData.data.length == 0) {
                    $('.collegeWithCourse').html("No Record Found");
                    $('.collegeWithCourse').prop("disabled", false);
                } else {
                    collegeData.data.map((item) => (
                        dt.push(
                            ` <li class="media my-4 bg-light">
                                <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image + `" class="mr-3" height="" width="" alt="..." title="hrl" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
                                            <p>` + item.country + ` </p>
                                            <p>` + item.courses + ` </p>
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
                    $('.collegeWithCourse').html(dt);
                    $('.collegeWithCourse').prop("disabled", false);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            var errorMsg = 'Ajax request failed: ' + xhr.responseText;
            console.log(`error`, err);
            $('.ajaxError').html("Countries");
            $('.ajaxError').prop("disabled", false);
            if (err) {
                swal("Oh noes!", "The AJAX request failed!", "error");
            }
        }
    });
    // }
}
</script>
<?php 

for( $i = 0; $i < count($sectionData); $i++){
    if($sectionData[$i]['section_name'] === 'consultation_banner'){
    ?>
<section id="hero">
    <div class="container mb-4 admin " id="hero-banner">
        <div class="container" style="background-color:  rgba(150, 242, 242, 0.6);">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-center-sm  detailsAdmin">

                    <h3 class="banner-h3"><?= $sectionData[$i]['title']?></h3>
                    <p><?= $sectionData[$i]['discription']?></p>
                    <button class=" btn mr-3 contact-now text-uppercase" data-toggle="modal"
                        data-target="#contactNowForm" style="font-size: 14px;">Contact Now
                    </button>
                    <?php $session = session();
                    if (!$session->get('token')) : ?>
                    <button class="btn signUp text-uppercase" type="button" data-toggle="modal" data-target="#SignUp"
                        style="font-family: 'PT Sans' ;
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 32px;
            color: #114694;">Sign Up
                    </button>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-6 text-center text-center-sm mx-auto">
                    <img class="img-fluid text-center" src="assets/images/<?= $sectionData[$i]['image']?>" alt="jumbotronimg"
                        title="jumbotronimg" width="640" height="360" />
                </div>
            </div>
        </div>
        <div class="container" style="background-color:  rgba(150, 242, 242, 0.6);">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-center-sm detailsAdmin">
                    <h3 class="animate__animated animate__fadeInDown "><?= $sectionData[$i]['title']?></h3>
                    <p><?= $sectionData[$i]['discription']?></p>
                    <button class=" btn mr-3 contact-now text-uppercase" data-toggle="modal"
                        data-target="#contactNowForm" style="font-size: 14px;">Contact Now
                    </button>
                    <button class="btn signUp text-uppercase" type="button" data-toggle="modal" data-target="#SignUp"
                        style="font-family: 'PT Sans' ;
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 32px;
            color: #114694;">Sign Up
                    </button>

                </div>

                <div class="col-lg-6 col-md-6 text-center text-center-sm mx-auto">
                    <img class="img-fluid text-center" src="assets/images/<?= $sectionData[$i]['image']?>" alt="jumbotronimg"
                        title="jumbotronimg" width="640" height="360" />
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
    </ul>
    </div>
</section>
<?php }} ?>
<section id="universityFilter">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <ul class="nav nav-pills mb-3 text-center" id="pills-tab">
                    <li class="nav-item">
                        <button class="nav-link rr mx-2 " id="pills-countries-tab" data-toggle="pill"
                            href="#pills-countries" role="tab" aria-controls="pills-countries"
                            aria-selected="false">COUNTRIES</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rr mx-2 " id="pills-courses-tab" data-toggle="pill"
                            href="#pills-courses" role="tab" aria-controls="pills-courses"
                            aria-selected="false">COURSES</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rr mx-2 " id="pills-careers-tab" data-toggle="pill"
                            href="#pills-careers" role="tab" aria-controls="pills-careers"
                            aria-selected="false">CAREERS</button>
                    </li>
                </ul>
            </div>


            <!-- ----------------------------------------------------------------------------------------------------------- -->
            <!-- <div class="collapse" id="pills-countries"> -->
            <!-- <div class="card-body">
                            <form>
                                <div class="row"> -->

            <!-- <div class="form-check form-check-inline text-left d-flex justify-content-between"> -->
            <!-- <button class="rr"><span><label class="form-check-label " for="country"><img
                                                src="https://flagcdn.com/16x12/us.png" alt="za" title="za" width=""
                                                height="" />USA</label></span></button>
                                                <button><span><label class="form-check-label " for="country"><img
                                                src="https://flagcdn.com/16x12/us.png" alt="za" title="za" width=""
                                                height="" />USA</label></span></button>
                                                <button><span><label class="form-check-label " for="country"><img
                                                src="https://flagcdn.com/16x12/us.png" alt="za" title="za" width=""
                                                height="" />USA</label></span></button>
                                                <button><span><label class="form-check-label " for="country"><img
                                                src="https://flagcdn.com/16x12/us.png" alt="za" title="za" width=""
                                                height="" />USA</label></span></button>
                                                <button><span><label class="form-check-label " for="country"><img
                                                src="https://flagcdn.com/16x12/us.png" alt="za" title="za" width=""
                                                height="" />USA</label></span></button> -->

            <div class="tab-content border-top border-primary" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-countries" role="tabpanel" aria-labelledby="pills-countries-tab">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-USA-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-USA" aria-selected="false"
                                onclick="getCollege('USA')">USA</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-UK-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-UK" aria-selected="false"
                                onclick="getCollege('UK')">UK</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Canada-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-Canada"
                                aria-selected="false" onclick="getCollege('Canada')">Canada</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Germany-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-Germany"
                                aria-selected="false" onclick="getCollege('Germany')">Germany</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-France-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-France"
                                aria-selected="false" onclick="getCollege('France')">France</button>
                        </li>
                    </ul>
                </div>


                <div class="tab-pane fade" id="pills-courses" role="tabpanel" aria-labelledby="pills-courses-tab">

                    <!-- ------------------------------- Start Courses Country------------------------------------------------------------- -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-USA2-tab" data-toggle="pill"
                                href="#pills-course" role="tab" aria-controls="pills-USA2" aria-selected="false"
                                onclick="getCollegeWithCourse('USA')">USA</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-UK2-tab" data-toggle="pill" href="#pills-course"
                                role="tab" aria-controls="pills-UK2" aria-selected="false"
                                onclick="getCollegeWithCourse('UK')">UK</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Canada2-tab" data-toggle="pill"
                                href="#pills-course" role="tab" aria-controls="pills-Canada2" aria-selected="false"
                                onclick="getCollegeWithCourse('Canada')">Canada</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Germany2-tab" data-toggle="pill"
                                href="#pills-course" role="tab" aria-controls="pills-Germany2" aria-selected="false"
                                onclick="getCollegeWithCourse('Germany')">Germany</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-France2-tab" data-toggle="pill"
                                href="#pills-course" role="tab" aria-controls="pills-France2" aria-selected="false"
                                onclick="getCollegeWithCourse('France')">France</button>
                        </li>
                    </ul>
                    <!-- ------------------------------- End Courses Country------------------------------------------------------------- -->

                    <!-- ------------------------------- Start Courses Course------------------------------------------------------------- -->
                    <div class="tab-pane fade" id="pills-course" role="tabpanel" aria-labelledby="pills-course-tab">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link rr1 mx-2" id="pills-engineering-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-engineering"
                                    aria-selected="false"
                                    onclick="getCollegeWithCourse1('Engineering')">Engineering</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link rr1 mx-2" id="pills-management-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-management"
                                    aria-selected="false"
                                    onclick="getCollegeWithCourse1('Management')">Management</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link rr1 mx-2" id="pills-medical-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-medical"
                                    aria-selected="false" onclick="getCollegeWithCourse1('Medical')">Medical</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link rr1 mx-2" id="pills-design-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-design"
                                    aria-selected="false" onclick="getCollegeWithCourse1('Design')">Design</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link rr1 mx-2" id="pills-other-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-other"
                                    aria-selected="false" onclick="getCollegeWithCourse1('Other')">Other</button>
                            </li>
                        </ul>
                    </div>
                    <!-- ------------------------------- End Courses Course------------------------------------------------------------- -->

                </div>
                <!-- ------------------------------- Start career------------------------------------------------------------- -->
                <div class="tab-pane fade" id="pills-careers" role="tabpanel" aria-labelledby="pills-careers-tab">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link rr1" id="pills-career-tab" data-toggle="pill" href="#pills-career"
                                role="tab" aria-controls="pills-career" aria-selected="false">Careers</button>
                        </li>
                    </ul>
                </div>
                <!-- ------------------------------- End Career------------------------------------------------------------- -->
            </div>
        </div>

        <!-- ---------------------------------------------------Data--------------------------------------- -->
        <div class="tab-content" id="pills-tabContent">

            <!-- -------------------------------------START COUNTRIES TAB---------------------------- -->
            <div class="tab-pane fade" id="pills-All-Countries" role="tabpanel" aria-labelledby="pills-USA-tab">
                <ul class="list-unstyled college" id="listColleges">
                </ul>
            </div>
            <!-- ---------------------------------END COUNTRIES TAB---------------------------------- -->

            <!-- -----------------------------Start Courses Tab--------------------------------------------- -->
            <div class="tab-pane fade" id="pills-all-course" role="tabpanel" aria-labelledby="pills-engineering-tab">
                <ul class="list-unstyled collegeWithCourse" id="listCollegeWithCourse">
                    <!-- <div id="loading" class="hide">
                            <div id="loading-content">
                                <img src="assets/images/Spinner.gif" alt="Loading"/>
                            </div>
                        </div> -->
                </ul>
            </div>
            <!-- -----------------------------END Courses Tab--------------------------------------------- -->

            <!-- ----------------------------------Start Careers Tab---------------------------------- -->
            <div class="tab-pane fade" id="pills-career" role="tabpanel" aria-labelledby="pills-career-tab">
                <li class="media my-4 bg-light">
                    <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..." title="..."
                        width="" height="" />
                    <div class="media-body py-3">
                        <div class="row">
                            <div class="col-md-8">
                                <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex
                                    Indian
                                    Sub-Continent
                                    Regional
                                    Undergraduate Scholarship 2021-22 Career</p>
                                <p>All my girls vintage Chanel baby. So you can have your cake. Tonight,
                                    tonight,
                                    tonight,
                                    I'm walking on air. Slowly swallowing down my fear, yeah yeah. </p>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end align-items-center ">
                                <div class="apply px-5">
                                    <p class="h5_2_P_Days">5 Days to go</p>
                                    <button class="btn applyNow">Apply now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <!-- ---------------------------------------End Careers Tab----------------------------------------- -->
        </div>
        <!-- ---------------------------------------------------Data--------------------------------------- -->
    </div>
</section>

<?= $this->include('templates/calltoaction') ?>