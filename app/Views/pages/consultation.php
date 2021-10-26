<section id="hero">
    <div class="container mb-4 admin " id="hero-banner">
        <div class="container" style="background-color:  rgba(150, 242, 242, 0.6);">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-center-sm  detailsAdmin">

                    <h3 class="banner-h3">Admissions Open</h3>
                    <p>Interested in studying abroad?</p>
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
                    <img class="img-fluid text-center" src="assets/images/jumbotronimg.png" alt="jumbotronimg"
                        title="jumbotronimg" width="640" height="360" />
                </div>
            </div>
        </div>
        <div class="container" style="background-color:  rgba(150, 242, 242, 0.6);">
            <div class="row">


                <div class="col-lg-6 col-md-6 text-center text-center-sm detailsAdmin">
                    <h3 class="animate__animated animate__fadeInDown ">Admissions Open</h3>
                    <p>Interested in studying abroad?</p>
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
                    <img class="img-fluid text-center" src="assets/images/jumbotronimg.png" alt="jumbotronimg"
                        title="jumbotronimg" width="640" height="360" />
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
    </ul>
    </div>
</section>

<section id="universityFilter">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <ul class="nav nav-pills  mb-3">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mr-1 rounded-0 margin active" id="pills-countries-tab" data-toggle="pill"
                            href="#pills-countries" role="tab" aria-controls="pills-countries"
                            aria-selected="true">COUNTRIES</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mr-1 rounded-0 margin " id="pills-courses-tab" data-toggle="pill"
                            href="#pills-courses" role="tab" aria-controls="pills-courses"
                            aria-selected="false">COURSES</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mr-1 rounded-0 margin " id="pills-colleges-tab" data-toggle="pill"
                            href="#pills-colleges" role="tab" aria-controls="pills-colleges"
                            aria-selected="false">COLLEGES</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mr-1 rounded-0 margin" id="pills-university-tab" data-toggle="pill"
                            href="#pills-university" role="tab" aria-controls="pills-university"
                            aria-selected="false">UNIVERSITY</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mr-1 rounded-0 " id="pills-careers-tab" data-toggle="pill"
                            href="#pills-careers" role="tab" aria-controls="pills-careers"
                            aria-selected="false">CAREERS</a>
                    </li>


                </ul>
                <ul class=" nav ml-auto">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mr-1 rounded-0 dropdown-toggle" id="$filter" data-toggle="collapse"
                            href="#collapseContries" role="button" aria-expanded="false"
                            aria-controls="collapseContries">FILTER BY</a>
                    </li>
                </ul>

                <div class="collapse" id="collapseContries">
                    <div class="card card-body">
                        <div class="row">
                            <span class="badge badge-light border m-1"> <img src="https://flagcdn.com/16x12/us.png"
                                    alt="za" title="za" width="" height="" /> USA</span>
                            <span class="badge badge-light border m-1"> <img src="https://flagcdn.com/16x12/ca.png"
                                    alt="za" title="za" width="" height="" /> CANADA</span>
                            <span class="badge badge-light border m-1"> <img src="https://flagcdn.com/16x12/de.png"
                                    alt="za" title="za" width="" height="" /> GERMANY</span>
                            <span class="badge badge-light border m-1"> <img src="https://flagcdn.com/16x12/fr.png"
                                    alt="za" title="za" width="" height="" /> FRANCE</span>
                            <span class="badge badge-light border m-1"> <img src="https://flagcdn.com/16x12/gb.png"
                                    alt="za" title="za" width="" height="" /> UNITED KINGDOM</span>
                        </div>
                    </div>
                </div>
                <div class="tab-content border-top border-primary" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-countries" role="tabpanel"
                        aria-labelledby="pills-countries-tab">


                        <ul class="list-unstyled">
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-courses" role="tabpanel" aria-labelledby="pills-courses-tab">
                        <ul class="list-unstyled">
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-colleges" role="tabpanel" aria-labelledby="pills-colleges-tab">
                        <ul class="list-unstyled">
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-university" role="tabpanel"
                        aria-labelledby="pills-university-tab">
                        <ul class="list-unstyled">
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-careers" role="tabpanel" aria-labelledby="pills-careers-tab">
                        <ul class="list-unstyled">
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                            <li class="media my-4 bg-light">
                                <img class="p-3 img-fluid" src="https://via.placeholder.com/100" class="mr-3" alt="..."
                                    title="..." width="" height="" />
                                <div class="media-body py-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">University Of Essex Indian
                                                Sub-Continent
                                                Regional
                                                Undergraduate Scholarship 2021-22</p>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('templates/calltoaction') ?>