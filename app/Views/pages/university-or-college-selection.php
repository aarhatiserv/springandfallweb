<?php
$session = session();

for ($i = 0; $i < count($sectionData); $i++) {
    if ($sectionData[$i]['section_name'] === 'consultation_banner') {

?>
<section id="hero">
    <div class="container mb-4 admin " id="hero-banner">
        <div class="container" style="background-color:  rgba(150, 242, 242, 0.6);">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-center-sm  detailsAdmin">

                    <h3 class="banner-h3"><?= $sectionData[$i]['title'] ?></h3>
                    <p class="pb-1"><?= $sectionData[$i]['discription'] ?></p>

                    <button class=" btn mr-1 mb-2 contact-now text-uppercase" data-toggle="modal"
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
            color: #114694;
            width: 148px;
            margin-bottom: 7px;">Sign Up
                    </button>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-6 text-center text-center-sm mx-auto">
                    <img class="img-fluid text-center" src="assets/images/<?= $sectionData[$i]['image'] ?>"
                        alt="jumbotronimg" title="jumbotronimg" width="640" height="360" />
                </div>
            </div>
        </div>
        <div class="container" style="background-color:  rgba(150, 242, 242, 0.6);">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-center-sm detailsAdmin">
                    <h3 class="animate__animated animate__fadeInDown "><?= $sectionData[$i]['title'] ?></h3>
                    <p><?= $sectionData[$i]['discription'] ?></p>
                    <button class=" btn mr-1 mb-2 contact-now text-uppercase" data-toggle="modal"
                        data-target="#contactNowForm" style="font-size: 14px;">Contact Now
                    </button>
                    <button class="btn signUp text-uppercase" type="button" data-toggle="modal" data-target="#SignUp"
                        style="font-family: 'PT Sans' ;
             font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 32px;
            color: #114694;
            width: 148px;
            margin-bottom: 7px;">Sign Up
                    </button>

                </div>

                <div class="col-lg-6 col-md-6 text-center text-center-sm mx-auto">
                    <img class="img-fluid text-center" src="assets/images/<?= $sectionData[$i]['image'] ?>"
                        alt="jumbotronimg" title="jumbotronimg" width="640" height="360" />
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
    </ul>
    </div>
</section>
<?php }
} ?>
<section id="universityFilter">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <ul class="nav nav-pills mb-3 text-center" id="pills-tab">
                    <?php if (!empty($session->get('flagHome'))) { ?>
                    <li class="nav-item">
                        <button class="nav-link rr mx-2 active" id="pills-countries-tab" data-toggle="pill"
                            href="#pills-countries123" role="tab" aria-controls="pills-countries123"
                            aria-selected="true">COUNTRIES</button>
                    </li>
                    <li class="nav-item pl-2">
                        <button class="nav-link rr mx-2 " id="pills-courses-tab" data-toggle="pill"
                            href="#pills-courses" role="tab" aria-controls="pills-courses" aria-selected="false"
                            onclick="refresh()">COURSES</button>
                    </li>
                    <li class="nav-item pl-2">
                        <button class="nav-link rr mx-2 " id="pills-careers-tab" data-toggle="pill"
                            href="#pills-careers" role="tab" aria-controls="pills-careers"
                            aria-selected="false">CAREERS</button>
                    </li>
                    <?php  } else { ?>
                    <li class="nav-item">
                        <button class="nav-link rr mx-2 active" id="pills-countries-tab" data-toggle="pill"
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
                    <?php } ?>
                </ul>
            </div>


            <!-- ----------------------------------------------------------------------------------------------------------- -->
            <!-- <div class="collapse" id="pills-countries"> -->
            <!-- <div class="card-body">
                            <form>
                                <div class="row"> -->
            <?php if (!empty($session->get('flagHome'))) {

                $session->set('flagHome', 'USA');
                $flag = $session->get('flagHome');

            ?>
            <div class="tab-content border-top border-primary" id="pills-tabContent">
                <div class="" id="pills-countries123" role="tabpanel" aria-labelledby="pills-countries-tab">
                    <ul class="nav nav-pills mb-3 pl-1 pt-2" id="pills-tab" role="tablist">
                        <?php if ($flag === 'USA') {
                            ?>

                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2 active" id="pills-USA-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-USA"
                                aria-selected="false">USA</button>
                        </li>


                        <?php
                                echo '<script type="text/javascript">',
                                'getCollegeInConsultation("USA");',
                                '</script>';
                            } else { ?>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-USA-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-USA" aria-selected="false"
                                onclick="getCollegeInConsultation('USA')">USA</button>
                        </li>
                        <?php }
                            if ($flag === 'UK') { ?>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2 active" id="pills-UK-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-UK"
                                aria-selected="false">UK</button>
                        </li>

                        <?php
                                echo '<script type="text/javascript">',
                                'getCollegeInConsultation("UK");',
                                '</script>';
                            } else { ?>

                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-UK-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-UK" aria-selected="false"
                                onclick="getCollegeInConsultation('UK')">UK</button>
                        </li>
                        <?php }
                            if ($flag === 'Canada') { ?>

                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2 active" id="pills-Canada-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-Canada"
                                aria-selected="false">Canada</button>
                        </li>

                        <?php
                                echo '<script type="text/javascript">',
                                'getCollegeInConsultation("Canada");',
                                '</script>';
                            } else { ?>

                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Canada-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-Canada"
                                aria-selected="false" onclick="getCollegeInConsultation('Canada')">Canada</button>
                        </li>
                        <?php }
                            if ($flag === 'Germany') { ?>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2 active" id="pills-Germany-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-Germany"
                                aria-selected="false">Germany</button>
                        </li>

                        <?php
                                echo '<script type="text/javascript">',
                                'getCollegeInConsultation("Germany");',
                                '</script>';
                            } else { ?>

                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Germany-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-Germany"
                                aria-selected="false" onclick="getCollegeInConsultation('Germany')">Germany</button>
                        </li>
                        <?php }
                            if ($flag === 'France') { ?>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2 active" id="pills-France-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-France"
                                aria-selected="false">France</button>
                        </li>

                        <?php
                                echo '<script type="text/javascript">',
                                'getCollegeInConsultation("France");',
                                '</script>';
                            } else { ?>

                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-France-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-France"
                                aria-selected="false" onclick="getCollegeInConsultation('France')">France</button>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>



            <!-- ----------------------------------------------------------- -->
            <div id="pills-tabContent">

                <!-- -------------------------------------START COUNTRIES TAB---------------------------- -->
                <div class="tab-pane" id="pills-All-Countries" role="tabpanel" aria-labelledby="pills-USA-tab">
                    <ul class="list-unstyled college" id="listColleges">
                    </ul>
                </div>
                <!-- ---------------------------------END COUNTRIES TAB---------------------------------- -->
            </div>
            <?php $session->remove('flagHome');
            } else { ?>
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

                    <ul class="nav nav-pills mb-3 pl-1 pt-2" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-USA-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-USA" aria-selected="false"
                                onclick="getCollegeInConsultation('USA')">USA</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-UK-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-UK" aria-selected="false"
                                onclick="getCollegeInConsultation('UK')">UK</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Canada-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-Canada"
                                aria-selected="false" onclick="getCollegeInConsultation('Canada')">Canada</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Germany-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-Germany"
                                aria-selected="false" onclick="getCollegeInConsultation('Germany')">Germany</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-France-tab" data-toggle="pill"
                                href="#pills-All-Countries" role="tab" aria-controls="pills-France"
                                aria-selected="false" onclick="getCollegeInConsultation('France')">France</button>
                        </li>
                    </ul>
                </div>


                <div class="tab-pane fade" id="pills-courses" role="tabpanel" aria-labelledby="pills-courses-tab"
                    style="display: block !important; opacity:1 !important;">

                    <!-- ------------------------------- Start Courses Country------------------------------------------------------------- -->
                    <ul class="nav nav-pills mb-3 pl-1 pt-2" id="pills-tab" role="tablist">
                        <li class="nav-item active">
                            <button class="nav-link rr1 mx-2" id="pills-USA2-tab" data-toggle="pill"
                                href="#pills-course" role="tab" aria-controls="pills-USA2" aria-selected="false"
                                onclick="getCollegeWithCountry('USA')">USA</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-UK2-tab" data-toggle="pill" href="#pills-course"
                                role="tab" aria-controls="pills-UK2" aria-selected="false"
                                onclick="getCollegeWithCountry('UK')">UK</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Canada2-tab" data-toggle="pill"
                                href="#pills-course" role="tab" aria-controls="pills-Canada2" aria-selected="false"
                                onclick="getCollegeWithCountry('Canada')">Canada</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-Germany2-tab" data-toggle="pill"
                                href="#pills-course" role="tab" aria-controls="pills-Germany2" aria-selected="false"
                                onclick="getCollegeWithCountry('Germany')">Germany</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rr1 mx-2" id="pills-France2-tab" data-toggle="pill"
                                href="#pills-course" role="tab" aria-controls="pills-France2" aria-selected="false"
                                onclick="getCollegeWithCountry('France')">France</button>
                        </li>
                    </ul>
                    <!-- ------------------------------- End Courses Country------------------------------------------------------------- -->

                    <!-- ------------------------------- Start Courses Course------------------------------------------------------------- -->
                    <div class="tab-pane fade" id="pills-course" role="tabpanel" aria-labelledby="pills-course-tab">

                        <ul class="nav nav-pills mb-3 pl-1 pt-1" id="pills-tab" role="tablist">
                            <li class="nav-item  pb-3">
                                <button class="nav-link rr1 mx-2" id="pills-engineering-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-engineering"
                                    aria-selected="false"
                                    onclick="getCollegeWithCourse('Engineering')">Engineering</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link rr1 mx-2" id="pills-management-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-management"
                                    aria-selected="false"
                                    onclick="getCollegeWithCourse('Management')">Management</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link rr1 mx-2" id="pills-medical-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-medical"
                                    aria-selected="false" onclick="getCollegeWithCourse('Medical')">Medical</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link rr1 mx-2" id="pills-design-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-design"
                                    aria-selected="false" onclick="getCollegeWithCourse('Design')">Design</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link rr1 mx-2" id="pills-other-tab" data-toggle="pill"
                                    href="#pills-all-course" role="tab" aria-controls="pills-other"
                                    aria-selected="false" onclick="getCollegeWithCourse('Other')">Other</button>
                            </li>
                        </ul>
                    </div>
                    <!-- ------------------------------- End Courses Course------------------------------------------------------------- -->

                </div>
                <!-- ------------------------------- Start career------------------------------------------------------------- -->
                <div class="tab-pane fade" id="pills-careers" role="tabpanel" aria-labelledby="pills-careers-tab">
                    <ul class="nav nav-pills mb-3 pl-2 pt-2" id="pills-tab" role="tablist">
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
        <?php } ?>
        <!-- ---------------------------------------------------Data--------------------------------------- -->
    </div>
</section>

<?= $this->include('templates/calltoaction') ?>