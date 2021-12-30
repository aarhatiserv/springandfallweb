<div class="container-fluid" style="margin-bottom: 15px;">
    <div class="row">
        <div class="col-12">
            <a class="text-dark" href="" onclick="window.history.go(-1)"><i class="fa fa-less-than"></i><b> Back</b></a>
        </div>
        <div class="col-11"></div>
    </div>
</div>
<?php if(!empty($collegeDetails[0]['image_background'])){ ?>
<section id="collegeBanner" class="col-12 col-md-12 d-flex justify-content-center align-items-center w-100"
    style="background: url('<?=base_url()?>/uploads/CollegesImage/<?=$collegeDetails->country ?>/banner/<?=$collegeDetails[0]['image_background']?>') no-repeat fixed 100% 100%;background-size: cover;">
    <?php } else{?>
    <section id="collegeBanner" class="col-12 col-md-12 d-flex justify-content-center align-items-center w-90"
        style="background: url('<?=base_url()?>/assets/images/college/demo_banner.png') no-repeat fixed 100% 100%;background-size: cover;">
        <?php }?>
        <div id="collegeBannerText" class="col-12 col-md-12 justify-content-center align-items-center w-90">
            <img src="<?=base_url()?>/uploads/CollegesImage/<?=$collegeDetails[0]['country']?>/logo/<?=$collegeDetails[0]['image']?>"
                alt="<?= $collegeDetails[0]['names'] ?>" width="200" height="200"
                style="margin-top: -100px;margin-left: 87px;" />
            <h1 class="text-center"><?= $collegeDetails[0]['names'] ?></h1>
            <p class="text-center" style="font-style: italic;">
                <?= $collegeDetails[0]['address'].", ". $collegeDetails[0]['country'] ?> </p>
        </div>

    </section>

    <section id="collegeInfo">
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-md-9">
                    <ul class="nav nav-tabs" style="flex-wrap: nowrap !important;" id="collegeInfoTab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <a class="nav-link py-3 rounded-0 active" id="overview-tab" data-toggle="tab"
                                href="#overview" role="tab" aria-controls="overview" aria-selected="true">OVERVIEW</a>
                        </li>
                        <li class="nav-item " role="presentation">
                            <a class="nav-link py-3 rounded-0" id="courses-tab" data-toggle="tab" href="#courses"
                                role="tab" aria-controls="courses" aria-selected="false">COURSES</a>
                        </li>
                        <li class="nav-item " role="presentation">
                            <a class="nav-link py-3 rounded-0" id="faq-tab" data-toggle="tab" href="#faq" role="tab"
                                aria-controls="faq" aria-selected="false">FAQ</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="collegeInfoTabContent">
                        <div class="tab-pane my-3 fade show active" id="overview" role="tabpanel"
                            aria-labelledby="overview-tab">
                            <div class="container p-5">
                                <!-- <h4 style=" color: #114694 !important">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Excepturi, unde!</h4> -->
                                <p class="text-justify w-80">
                                    <?=  $collegeDetails[0]['about'] ?>
                                </p>

                                <!-- <h4 style=" color: #114694 !important">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Excepturi, unde!</h4>
                            <p class="text-justify w-80">Some placeholder text to demonstrate justified text alignment.
                                Will
                                you
                                do the same for me? It's time to face the music I'm no longer your muse. Heard it's
                                beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of
                                me.
                                Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to
                                utopia.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis temporibus maxime
                                itaque
                                deserunt ducimus incidunt placeat, vitae atque numquam error libero illum rem, autem
                                eius
                                minima labore, laboriosam quia quam amet. Voluptatem molestias fugit quod architecto
                                ratione, soluta eaque sed. Rem itaque maiores distinctio consectetur debitis tenetur
                                excepturi placeat quidem similique nobis consequuntur natus beatae ut incidunt iste
                                asperiores, fugiat modi quia. Assumenda dolore ea porro temporibus eaque dignissimos
                                mollitia praesentium perferendis commodi adipisci ad eum explicabo voluptate fuga
                                quisquam,
                                iure recusandae voluptatem libero. Velit, nisi. Quia at non possimus maiores inventore a
                                ut
                                deserunt facilis. Voluptas, error qui possimus deserunt atque, reiciendis consequatur
                                ducimus, quasi quos illo corporis cumque assumenda dicta modi ut animi reprehenderit.
                                Ipsa
                                quod sit consectetur provident, velit culpa repellat facilis eos architecto error
                                dolores.
                                Hic voluptatem aspernatur omnis, minima possimus quo deleniti consequatur delectus, a,
                                sit
                                totam accusamus. Provident facere modi commodi ipsa sapiente ducimus delectus illo,
                                itaque
                                fugit enim velit quae ratione eligendi reprehenderit odio eveniet eos. Impedit deleniti
                                ipsa
                                ipsum sit provident asperiores reprehenderit optio fuga at neque? Debitis dolores
                                tempore
                                consequatur rerum, qui repellendus quod libero ratione nam ab tenetur consequuntur iure
                                architecto. Sunt, ab? Qui nobis asperiores mollitia neque itaque sequi.
                            </p> -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                            <div class="container" id="collegeCourses">
                                <!-- <ul class="list-group list-group-flush " id="collegeCourses"> -->
                               
                                    <?php 
                                    $newString = rtrim($collegeDetails[0]['courses'], ',');
                                  $course = explode (",", $newString);

                                    $newString2 = rtrim($collegeDetails[0]['subcourses'], ',');
                                  $subcourses = explode (",", $newString2);
                                  foreach($course as $c){ 
                                      if($c === "Engineering"){

                                      ?>
                                  <div class="topic">
                                    <div class="open">
                                        <h2 class="question"><?= $c ?>
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <ul class="answer">
                                        <?php foreach($subcourses as $sc){  
                                            if(strpos( $sc, "Engineering" ) === 0) {
                                              ?>
                                            
                                              <li><?= explode('_', $sc, 2)[1]; ?></li>
                                        <?php }}?>
                                    </ul>
                                </div>
                                    <?php  } else if($c === "Management"){ ?>
                                        <div class="topic">
                                    <div class="open">
                                        <h2 class="question"><?= $c ?>
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <ul class="answer">
                                    <?php foreach($subcourses as $sc){  
                                            if(strpos( $sc, "Management" ) === 0) {?>
                                              <li><?= explode('_', $sc, 2)[1];?></li>
                                        <?php }}?>
                                    </ul>
                                </div>
                                   <?php } else if($c === "Medical"){ ?>

                                    <div class="topic">
                                    <div class="open">
                                        <h2 class="question"><?= $c ?>
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <ul class="answer">
                                    <?php foreach($subcourses as $sc){  
                                            if(strpos( $sc, "Medical" ) === 0) {?>
                                              <li><?= explode('_', $sc, 2)[1]; ?></li>
                                        <?php }}?>
                                    </ul>
                                </div>
                                  <?php }  else if($c === "Design"){ ?>
                                    <div class="topic">
                                    <div class="open">
                                        <h2 class="question"><?= $c ?>
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <ul class="answer">
                                    <?php foreach($subcourses as $sc){  
                                            if(strpos( $sc, "Design" ) === 0) {?>
                                              <li><?= explode('_', $sc, 2)[1]; ?></li>
                                        <?php }}?>
                                    </ul>
                                </div>
                                 <?php } else if($c === "Other"){ ?>
                                    <div class="topic">
                                    <div class="open">
                                        <h2 class="question"><?= $c ?>
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <ul class="answer">
                                    <?php foreach($subcourses as $sc){  
                                            if(strpos( $sc, "Other" ) === 0) {?>
                                              <li><?= explode('_', $sc, 2)[1]; ?></li>
                                        <?php }}?>
                                    </ul>
                                </div>
                                 <?php } else{ ?>
                                    <div class="topic">
                                    <div class="open">
                                        <h2 class="question"><?= $c ?>
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <ul class="answer">
                                    
                                              <li>Computer Science </li>
                                              <li>Computer Science1 </li>
                                              <li>Computer Science2 </li>
                                      
                                    </ul>
                                </div>
                              <?php }} ?>


                                <!-- </ul> -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                            <div class="container" id="courseFaqList">
                                <div class="topic">
                                    <div class="open">
                                        <h2 class="question">1. How can i delete my complaint/comment?</h2>
                                        <span class="faq-t"></span>
                                    </div>
                                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="topic">
                                    <div class="open">
                                        <h2 class="question">2. I have posted a complaint/comment, but it doesn’t appear
                                            on
                                            the website. Why? When my complaint will be posted?
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="topic">
                                    <div class="open">
                                        <h2 class="question">3. How can I edit a complaint I posted?
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="topic">
                                    <div class="open">
                                        <h2 class="question">4. How can i find out personal information of another user?
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="topic">
                                    <div class="open">
                                        <h2 class="question">5. How can i contact another user?
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="topic">
                                    <div class="open">
                                        <h2 class="question">2. I have posted a complaint/comment, but it doesn’t appear
                                            on
                                            the website. Why? When my complaint will be posted?
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="topic">
                                    <div class="open">
                                        <h2 class="question">3. How can I edit a complaint I posted?
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="topic">
                                    <div class="open">
                                        <h2 class="question">4. How can i find out personal information of another user?
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="topic">
                                    <div class="open">
                                        <h2 class="question">5. How can i contact another user?
                                        </h2><span class="faq-t"></span>
                                    </div>
                                    <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-light mb-5" style="min-height: 600px;">
                        <div class="card-title">adds</div>
                    </div>
                    <div class="card bg-light" style="min-height: 600px;">
                        <div class="card-title">adds</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="similarUniversities">
        <div class="container-fluid">
            <div class="row">
                <h4 class=" pl-3" style=" color: #114694 !important">Similar Universities </h4>
            </div>

        </div>
        <!-- -----------------------------------Similar University------------------------------------------ -->
        <div class="row">

            <?php 
            if(!empty($similarUniversity)){
            foreach($similarUniversity as $su){ ?>
            <div class="column">
                <img src="<?php base_url(); ?>/uploads/CollegesImage/<?= $su['country']?>/logo/<?= $su['image']?>"
                    alt="<?= $su['names']?>" height="220" style="width:100%">
                <p class="text-center"><strong><?= $su['names']?></strong></p>
            </div>
            <?php }} else{ echo "No Similar University Found"; }?>

        </div>
        <!-- -----------------------------------Similar University------------------------------------------ -->
    </section>

    <section id="latestBlogs">
        <div class="container-fluid">
            <div class="row">
                <h4 class=" pl-3" style=" color: #114694 !important">Latest blogs</h4>
                <div class="card-group">

                    <?php  if(!empty($blogPostData)){ foreach($blogPostData as $bpd){  ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="../../blog/<?= $bpd->image_mid?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-left"><?= $bpd->title ?></h5>
                                <p class="card-text"><?= $bpd->summary?></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <?php } } else {?>
                    <div class="col-md-4">


                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542332213-31f87348057f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-left">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional
                                    content.
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">


                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542332213-31f87348057f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-left">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This card has even longer content than the first to show that
                                    equal
                                    height
                                    action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">


                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542332213-31f87348057f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-left">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This card has even longer content than the first to show that
                                    equal
                                    height
                                    action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>