<!--Start of Jumbotron-->
<?php

for ($i = 0; $i < count($sectionData); $i++) {
    if ($sectionData[$i]['section_name'] === 'hero_banner') {
?>
<div class="container mb-4 admin " id="hero-banner">
    <div class="container" style="background-color:  rgba(150, 242, 242, 0.6);">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center text-center-sm  detailsAdmin">

                <h3 class="banner-h3"><?= $sectionData[$i]['title'] ?></h3>
                <p class="pb-2"><?= $sectionData[$i]['discription'] ?></p>
                <button class=" btn mr-1 mb-1 contact-now text-uppercase" data-toggle="modal"
                    data-target="#contactNowForm" style="font-size: 14px;">Contact Now
                </button>
                <?php $session = session();
                        if (!$session->get('token')) : ?>
                <button class="btn signUp text-uppercase" type="button" data-toggle="modal" data-target="#SignUp" style="font-family: 'PT Sans' ;
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
                    alt="jumbotronimg" width="640" height="360" title="jumbotronimg" />
            </div>
        </div>
    </div>
    <div class="container" style="background-color:  rgba(150, 242, 242, 0.6);">
        <div class="row">


            <div class="col-lg-6 col-md-6 text-center text-center-sm detailsAdmin">
                <h3 class="animate__animated animate__fadeInDown "><?= $sectionData[$i]['title'] ?></h3>
                <p class="pb-2"><?= $sectionData[$i]['discription'] ?></p>
                <button class=" btn mr-1 mb-1 contact-now text-uppercase" data-toggle="modal"
                    data-target="#contactNowForm" style="font-size: 14px;">Contact Now
                </button>
                <button class="btn signUp text-uppercase" type="button" data-toggle="modal" data-target="#SignUp" style="font-family: 'PT Sans' ;
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
                <img class="img-fluid text-center" src="assets/images/<?php echo $sectionData[$i]['image'] ?>"
                    alt="jumbotronimg" width="640" height="360" title="jumbotronimg">
            </div>
        </div>
    </div>
</div>
</div>
<?php
    } elseif ($sectionData[$i]['section_name'] === 'make_your_career_world_best') {
    ?>
<!--Make your Career Best-->
<section class="my-5">
    <div class="container makeCareer">
        <div class="row">
            <div class="col-sm-12 col-lg-5 text-center">
                <img src="assets/images/<?php echo $sectionData[$i]['image'] ?>" alt="graduate" width="600" height="400"
                    title="graduate">
            </div>
            <div class="col-lg-7">
                <div class="card mb-3 careerCol">
                    <div class="card-body shadow ">
                        <h3 class="makeCareerChange"><?php echo $sectionData[$i]['title'] ?></h3>
                        <p class="card-text graduate"><?php echo $sectionData[$i]['discription'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
} ?>

<!--We are best in-->
<!--We are best in-->
<!-- <div class="container-fluid bestIn my-4">
    <div class="row bestInRow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <p id="ourInfo" class="my-3 wabi">WE ARE BEST IN</p>
                </div>
            </div>
            <div class="card-deck">
                <div class="card" data-tilt data-tilt-scale="1.1" data-tilt-gyroscope="false">
                   
                        <div class="card-body text-center">
                            <img class="img" src="assets/images/cards/edu.png" class="card-img-top"
                                alt="education_spring" width="640" height="360" title="education_spring">
                                <p class="card-title">EDUCATION <br>
                                CONSULTATION</p>
                                <a class="text-decoration-none" href="<?= base_url() ?>/university-or-college-selection"> <p class="card-text zoom ">University/ College Selection</p></a>
                        </div>
                    
                </div>
                <div class="card" data-tilt data-tilt-scale="1.1" data-tilt-gyroscope="false">
                   
                        <div class="card-body text-center">
                            <img class="img" src="assets/images/cards/financial.png" class="card-img-top"
                                alt="finance_spring" width="640" height="360" title="finance_spring">
                            <p class="card-title">FINANCIAL<br>AID</p>
                            <a class="text-decoration-none" href="scholarship">  <p class="card-text zoom pb-2"> Scholarships</p></a>
                            <a class="text-decoration-none" href="financial-aid"> <p class="card-text zoom"> Education Loan</p></a>
                        </div>
                    
                </div>
                <div class="card" data-tilt data-tilt-scale="1.1" data-tilt-gyroscope="false">
                    
                        <div class="card-body text-center">
                            <img class="img" src="assets/images/cards/insurance.png" class="card-img-top"
                                alt="insurance_sring" width="640" height="360" title="insurance_sring">
                            <p class="card-title">OVERSEAS<br>
                                INSURANCE</p>
                                <a class="text-decoration-none" href="overseas-insurance">  <p class="card-text zoom pb-2">Health Insurance</p></a>
                                <a class="text-decoration-none" href="overseas-insurance">  <p class="card-text zoom">Life Insurance</p></a>
                        </div>
                
                </div>
                <div class="card" data-tilt data-tilt-scale="1.1" data-tilt-gyroscope="false">
                    
                        <div class="card-body text-center">
                            <img class="img" src="assets/images/cards/plane.png" class="card-img-top" alt="visa_spring"
                                width="640" height="360" title="visa_spring">
                            <p class="card-title">VISA<br>
                                CONULTATION</p>
                                <a class="text-decoration-none" href="visa-consultation"> <p class="card-text zoom pb-2 ">Preparation</p></a>
                                <a class="text-decoration-none" href="visa-consultation">  <p class="card-text zoom">Application</p></a>
                        </div>
                    
                </div>

            </div>
        </div>
    </div>
</div> -->

<section class="we-are-best-in">
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-5 my-5">
                <h3 class="text-center display-5 font-weight-bold ">WE ARE BEST IN</h3>
                <p class="text-center offset-md-4 col-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Inventore, magni.
                    Sed
                    veniam vitae at odit
                    quod reprehenderit quasi eaque officia.</p>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-md-6">
                <img class="img-fluid p-2" src="/assets/images/best-in-education.png" alt="best education consultency">
            </div>
            <div class="col-md-6 content">
                <h5 class="content-title">EDUCATION CONSULTENCY</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quam inventore, fuga labore
                    quibusdam repellat voluptatibus ullam. Possimus laborum alias in quia aliquid error, aspernatur
                    officia animi est consequatur!</p>
                <div class="d-flex">
                    <a class="quick-btn " href="/university-or-college-selection">University/College
                        Selection</a>
                </div>
            </div>
        </div>
        <div class="row my-5">

            <div class="col-md-6 content">
                <h5 class="content-title">FINANCE AID</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quam inventore, fuga labore
                    quibusdam repellat voluptatibus ullam. Possimus laborum alias in quia aliquid error, aspernatur
                    officia animi est consequatur!</p>
                <div class="d-flex">
                    <a class="quick-btn " href="/university-or-college-selection">Scholarship</a>
                    <a class="quick-btn ml-3" href="/university-or-college-selection">Education</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid p-2" src="/assets/images/best-in-finance.png" alt="best education consultency">
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-6">
                <img class="img-fluid p-2" src="/assets/images/best-in-visa-consultency.png"
                    alt="best education consultency">
            </div>
            <div class="col-md-6 content">
                <h5 class="content-title">VISA CONSULTENCY</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quam inventore, fuga labore
                    quibusdam repellat voluptatibus ullam. Possimus laborum alias in quia aliquid error, aspernatur
                    officia animi est consequatur!</p>
                <div class="d-flex">
                    <a class="quick-btn " href="/university-or-college-selection">Prepration</a>
                    <a class="ml-3 quick-btn " href="/university-or-college-selection">Application</a>
                </div>
            </div>
        </div>
        <div class="row my-5">

            <div class="col-md-6 content">
                <h5 class="content-title">OVERSEASE INSURANCE</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quam inventore, fuga labore
                    quibusdam repellat voluptatibus ullam. Possimus laborum alias in quia aliquid error, aspernatur
                    officia animi est consequatur!</p>
                <div class="d-flex">
                    <a class="quick-btn " href="/university-or-college-selection">Scrolarships</a>
                    <a class="quick-btn ml-3" href="/university-or-college-selection">Education Loans</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid p-2" src="/assets/images/best-in-oversease-insurance.png"
                    alt="best education consultency">
            </div>
        </div>
    </div>
    <div class="container"></div>
</section>



<!-- latest courses -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <p id="ourInfo" class="my-3 wabi">HOT COURSES</p>
        </div>
    </div>
</div>
<?= $this->include('templates/latest-courses.php') ?>
<!-- latest courses ends -->


<!--Why Spring and fall-->

<section id="whySp">

    <div class=" whySP p-2 p-md-5 p-lg-5 mx-md-5 mx-lg-5">
        <span style="--i: 0"></span>
        <span style="--i: 1"></span>
        <span style="--i: 2"></span>
        <span style="--i: 3"></span>
        <div class="container ">
            <div class="row">
                <p class="col-12 text-center whySPN pt-3">WHY SPRING AND FALL</p>
            </div>
            <div class="row my-2 my--md-5 my-lg-5">
                <div class="col-md-6">
                    <p class="text-justify sm-txt" style="color:#555; font-weight: bold">Because we take care of
                        everything you
                        require while you study abroad.
                        Spring & Fall is an international guide in worldwide education services. We assist students just
                        like you and many others who aspire to study abroad.
                        Our vast system of convenient specialists supports you in recognising and ensuring the college
                        or university where you can shine.
                        We can unite you to the fields you seek to proceed in the common proper institution or
                        university placed in the proper country...
                    </p>
                    <a href="about"><button class="buttonWSF">Read More</button></a>
                </div>
                <div class="col-md-6">
                    <img data-tilt data-tilt-glare data-tilt-max-glare="0.8"
                        class="mx-auto mx-sm-auto mx-md-auto my-2 greyRect img-fluid img-thumbnail"
                        src="https://images.unsplash.com/photo-1591168106412-d8fb6e578760?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80"
                        alt="img" width="640" height="360" title="img">
                </div>
            </div>
        </div>
    </div>
</section>

<!--Flag Section-->

<?= $this->include('templates/flags-section') ?>
<!-- fags section ends -->

<!-- testimonial -->

<?= $this->include('templates/testimonials') ?>
<!-- testimonial ends -->


<!-- counter -->
<?= $this->include('templates/counter') ?>
<!-- counter ends -->

<!-- callnow modal -->



<!--Business Partners-->
<!-- <div class="container-fluid buisness mt-4 mb-4">
    <div class="row">
        <div class="col-lg-12 text-center mb-5">
            <h3>OUR BUSINESS PARTNERS</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center col-lg-3" style="margin-top: -75px;">
                <img src="assets/images/partners/avanse.png">
            </div>
            <div class="col-sm-12 text-center col-lg-3">
                <img src="assets/images/partners/auxilo.png">
            </div>
            <div class="col-sm-12 text-center col-lg-3">
                <img src="assets/images/partners/bc.png">
            </div>
            <div class="col-sm-12 text-center col-lg-3">
                <img src="assets/images/partners/thomas-cook.png">
            </div>
    </div>
</div> -->