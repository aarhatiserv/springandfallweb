<?php
$session = session();

for ($i = 0; $i < count($sectionData); $i++) {
    if ($sectionData[$i]['section_name'] === 'consultation_banner') {

?>
<section id="hero">
    <div class="container admin ">
        <div class="jumbotron p-0 m-0" style="background-color:  rgba(150, 242, 242, 0.6);">
            <img class="img-fluid text-center"
                src="<?= base_url('uploads/SectionsImage') . '/' . $sectionData[$i]['image'] ?>" alt="jumbotronimg"
                title="jumbotronimg" style="width: 100%; filter: drop-shadow(0px 1px 5px rgba(0, 0, 0, 0.25));
border-radius: 5px;" />
        </div>

    </div>

</section>




<?php }
} ?>
<hr class="my-5">
<section id="mostPoularCourse">
    <div class="container">
        <div class="row ">
            <div class="col-12 text-center">
                <p style="font-size: 1.5rem; color: var(--background);"><i class="fa fa-bar-chart"
                        aria-hidden="true"></i>
                </p>
                <h3 style="font-weight: var(--font-weight);">MOST POPULAR COURSES</h3>
            </div>
        </div>
    </div>
    <?= $this->include('templates/popular-courses') ?>
</section>
<hr class="my-5">





<?= $this->include('templates/calltoaction') ?>