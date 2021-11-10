
<!--Start of Jumbotron-->
<?php 

for( $i = 0; $i < count($sectionData); $i++){
    if($sectionData[$i]['section_name'] === 'banner'){
    ?>
<div id="banner">
    <div id="bannertext">
        <h1 class="text-center"><?= $sectionData[$i]['title']?></h1>
        <p class="text-center" style="font-style: italic;"><?= $sectionData[$i]['discription']?> </p>
    </div>
</div>
<!--Make your Career Best-->
<div class="container makeCareer">
    <div class="row my-5">
        <div class="col-md-12 text-center">
            <img src="assets/images/confused.png" class="img-fluid" alt="confused" width="640" height="360"
                title="confused" />
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-12 text-center">
            <p class="d-inline">

                <button class=" btn mr-3 contact-now text-uppercase" data-toggle="modal" role="button"
                    data-target="#contactNowForm" style="font-size: 14px;">Contact Now
                </button>
                <span style="color:black">
                    to get your free consultation for
                </span>
                <span class="text-primary text-weight-bold h3">AWESOME FUTURE</span>
            </p>

        </div>
    </div>
</div>

<!-- mission and vision end -->
<?php 
    }}
    for( $i = 0; $i < count($sectionData); $i++){
        if($sectionData[$i]['section_name'] === 'mission'){
?>
<!-- mission -->
<section id="mission">
    <div class="container">
 
        <div class="row">
            <div class="col-md-12 headline ">
                <h1 class="col-12 text-center text-uppercase "><?= $sectionData[$i]['title']?></h1>
            </div>
            <div class="container p-5">
                <div class="col-md-12 description rellax">
                    <p class="mission"><?= $sectionData[$i]['discription']?> </p>
                </div>
            </div>

        </div>
      
    </div>
</section>
<?php 
        } }
        for( $i = 0; $i < count($sectionData); $i++){
       if($sectionData[$i]['section_name'] === 'vission'){
?>
<!-- vission -->
<section id="vission">

    <div class="container">
        <div class="row">
            <div class="col-md-12 headline " `>
                <h1 class="col-12 text-center text-uppercase "><?= $sectionData[$i]['title']?></h1>
            </div>
            <div class="container p-5">
                <div class="col-md-12 description rellax">
                    <p class="mission"><?= $sectionData[$i]['discription']?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
        } }
        for( $i = 0; $i < count($sectionData); $i++){
        if($sectionData[$i]['section_name'] === 'values'){
?>
<!-- values -->
<section id="values">
    <div class="container">
  
        <div class="row">
            <div class="col-md-12 headline ">
                <h1 class="col-12 text-center text-uppercase "><?= $sectionData[$i]['title']?></h1>
            </div>
            <div class="container p-5">
                <div class="col-md-12 description rellax">
                    <p class="mission"><?= $sectionData[$i]['discription']?>
                    </p>
                </div>
            </div>


        </div>
     
    </div>
</section>
<?php
    }
}
    ?>

<!-- information -->
<div class="container">
    <div class="row py-5 justify-content-md-center ">

        <div class="col-md-10 text-center p-2">
            <p class="text-center my-md-5 abb"> About US
            </p>
            <p class="lead p-3 text-justify">About Us

                Here in Spring and Fall, you will have your own wholesome store for your future. We help students
                looking to pursue undergraduate (UG) and postgraduate (PG) choose the perfect course and the best
                suitable college in India and abroad. Spring and Fall provide a complete guide for the students in
                choosing their career possibilities with our <a class="lead font-weight-bold" href="/career-guide"
                    rel="noopener">Career Guide</a> tool.
            </p>
            <p class="lead p-3 text-justify">
                Our experts possess in-depth and reliable knowledge about different universities of over 15 plus
                countries including the USA, UK, CANADA, AUSTRALIA, GERMANY, NEW ZEALAND, IRELAND, POLAND, SCHENGEN
                COUNTRIES RUSSIA, UKRAINE, PHILIPPINES, SINGAPORE, MALAYSIA, and INDIA. We offer detailed information to
                students interested in UG/PG courses in India and Abroad for all the most popular education streams such
                as Engineering, Medical, Management, Design, Law, Mass Communication, Media, Animation, Arts,
                Hospitality, Travel, Aviation, Beauty, Fitness.
            </p>
            <p class="lead p-3 text-justify">
                Students will always get a personalized experience from our sites based on their educational background
                and career interests enabling them to have a well informed course and career decisions.The decision
                creating is authorised with quick access to detailed information on career choices, courses, exams,
                colleges, admission criteria, eligibility, fees, placement statistics, rankings, reviews, scholarships,
                latest updates etc furthermore as by interacting with different Spring and Fall users, experts, current
                students in faculties and alumni teams.With the help of our <a class="lead font-weight-bold"
                    href="/career-guide" rel="noopener">Career Guide</a>
                tool one can easily get to know
                about the possible opportunities they can have on their desired country. It will provide detailed
                information on the available college with the possible course a person can apply for. </p>

        </div>

    </div>
</div>

<!-- information ends -->

<!-- founding team -->
<section id="foundingTeam ">

    <div class="container mb-5">
        <div class="row">
            <p class="col-12 text-center py-5 abb1">Our Founding Team</p>
        </div>
        <div class="row justify-content-center justify-content-md-center">
            <div class="col-12 col-md-3 mx-md-1">
                <div class="card p-3 ">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="Rajshekar N"
                        title="Rajshekar N" width="200" height="200">
                    <div class="card-body">
                        <p class="card-title">Rajshekar N</p>
                        <p class="card-text text-center">Founder </p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mx-md-1">
                <div class="card p-3">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="Goutham Reddy"
                        title="Goutham Reddy" title="Rajshekar N" width="200" height="200">
                    <div class="card-body">
                        <p class="card-title">Goutam Kumar</p>
                        <p class="card-text text-center">Co-Founder </p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3 mx-1">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="Rajshekar N">
                    <div class="card-body">
                        <h5 class="card-title">Rajshekar N</h5>
                        <p class="card-text text-center">CEO </p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
    </div>
    </div>
    </div>
    </div>
</section>
<!-- founding team ends -->

<!-- testimonial -->

<!-- <?php //$this->include('templates/testimonials') 
        ?> -->
<!-- testimonial ends -->

<!--Flag Section-->

<?= $this->include('templates/flags-section') ?>
<!-- fags section ends -->


<!-- counter -->
<?= $this->include('templates/counter') ?>
<!-- counter ends -->




<!--Business Partners-->
<div class="container-fluid buisness mt-4 mb-4">
    <div class="row">
        <div class="col-lg-12 text-center mb-5">
            <h3>OUR BUSINESS PARTNERS</h3>
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-sm-12 text-center col-lg-3" style="margin-top: -75px;">
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
            </div> -->
    </div>
</div>