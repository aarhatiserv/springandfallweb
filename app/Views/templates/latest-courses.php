<section id="latest-courses">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="lastest-courses-carousel">
                    <?php
                    if (!empty($hotCourses)) {
                        foreach ($hotCourses as $h) { ?>


                    <div class="col-md-3">
                        <div class="carousel-course-item">
                            <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">

                                        <img class="img-fluid course-thumbnail"
                                            src="uploads/HotCoursesImage/<?php echo $h['image'] ?>"
                                            alt="university-logo" width="640" height="360" title="university-logo">
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="card-body p-1">
                                            <p class="text-dark course-text"><?php echo $h['name'] ?></p>
                                            <p class="text-dark course-text"><?php echo $h['title'] ?></p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php  }
                    } else { ?>
                    <div class="col-md-3">
                        <div class="carousel-course-item">
                            <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="img-fluid course-thumbnail" src="assets/images/university-logo.png"
                                            alt="university-logo" width="640" height="360" title="university-logo">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-1">
                                            <p class="text-dark course-text">University Of Essex Indian Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="carousel-course-item">
                            <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="img-fluid course-thumbnail" src="assets/images/university-logo.png"
                                            alt="university-logo" width="640" height="360" title="university-logo">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-1">
                                            <p class="text-dark course-text">University Of Essex Indian Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="carousel-course-item">
                            <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="img-fluid course-thumbnail" src="assets/images/university-logo.png"
                                            alt="university-logo" width="640" height="360" title="university-logo">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-1">
                                            <p class="text-dark course-text">University Of Essex Indian Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="carousel-course-item">
                            <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="img-fluid course-thumbnail" src="assets/images/university-logo.png"
                                            alt="university-logo" width="640" height="360" title="university-logo">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-1">
                                            <p class="text-dark course-text">University Of Essex Indian Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>