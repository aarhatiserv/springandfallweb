<!--Testimonials-->
<div class="container-fluid testimonial">
    <div class="gtco-testimonials">
        <p class="text-center health">LETS HEAR ABOUT US</p>
        <div class="owl-carousel owl-carousel1 owl-theme">
            <?php 
          foreach($review as $r){
?>

            <div>
                <!-- <div class="card text-center" style="height: 550px;"><img class="card-img-top" src="uploads/ReviewsImage/" alt="img" -->
                <div class="card text-center" style="height: 434px; overflow: hidden;"><img class="card-img-top" src="uploads/ReviewsImage/<?php echo $r['image']?>" alt="img"
                        width="640" height="360" title="img">
                    <div class="card-body">
                        <p class="testimonials"><?= $r['name']?> <br />
                            <span class="span"> <?= $r['title']?> </span>
                        </p>
                        <p class="card-text span"><?= $r['discription']?></p>
                    </div>
                </div>
            </div>
            <?php
            }
           ?>
        </div>
    </div>
</div>