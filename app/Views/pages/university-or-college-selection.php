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


<!-- backup might come here -->

<section id="unversities">
    <div class="container">
        <div class="row ">
            <div class="col-12 text-center">
                <p style="font-size: 1.5rem; color: var(--background);"><i class="fa fa-check"
                        aria-hidden="true"></i></i>
                </p>
                <h3 class="text-dark" style="font-weight: var(--font-weight);">CHOOSE YOUR PREFERRED</h3>
                <h3 style="font-weight: var(--font-weight);">UNIVERSITY</h3>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 ">
                <div class=" p-3 mb-0 bg-white rounded  text-center"
                    style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);">
                    <!-- <h4 style="color: var(--background);">COUNTRIES</h4> -->
                    <div class="col-md-4 mx-auto">
                        <form class="form-inline">

                            <div class="form-group">
                                <div class="form-group mb-2">
                                    <label for="inputState" class="h4 mr-2" style="color: var(--background);">COUNTRIES
                                    </label>

                                    <select class="form-control mt-0" name="country" id="countrySelection">

                                        <?php
                                        $db = \Config\Database::connect();
                                        $sql  = "SELECT `country` FROM `colleges` GROUP by country";
                                        $query   = $db->query($sql);
                                        $results = $query->getResultArray();
                                        foreach ($results as $row) {
                                        ?>
                                        echo "<option value="<?= $row['country'] ?>"
                                            <?= $row['country'] == 'USA' ? 'selected' : '' ?>><?= $row['country'] ?>
                                        </option>";
                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="p-2 d-flex justify-content-around align-items-center"
                    style="background-color:  #EAEAEA; border-radius: 0px 0px 5px 5px; font-family:'Poppins'"
                    id="universityTab">
                    <p class="clgBtn mb-0 my-auto activeClgBtn">Engineering</p>
                    <p class="clgBtn mb-0 my-auto">Management</p>
                    <p class="clgBtn mb-0 my-auto">Medical</p>
                    <p class="clgBtn mb-0 my-auto">Design</p>
                    <p class="clgBtn mb-0 my-auto">Other</p>
                </div>
            </div>
        </div>
        <div id="collegeListContainer">
            <ul class="list-unstyled collegeWithCourse" id="listCollegeWithCourse">
                <!-- <div id="loading" class="hide">
                            <div id="loading-content">
                                <img src="assets/images/Spinner.gif" alt="Loading"/>
                            </div>
                        </div> -->
            </ul>
        </div>
    </div>
</section>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("universityTab");
var countrySelection = document.getElementById("countrySelection");
var course_country = '';
countrySelection.addEventListener('change', function(e) {
    course_country = e.target.value;
    console.log(course_country);
    getCollegeWithCountryAndCoursesInConsultation(course_country, currentVal);
});

var btns = header.getElementsByClassName("clgBtn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(e) {
        var current = document.getElementsByClassName("activeClgBtn");
        var currentVal = e.target.innerHTML;
        current[0].className = current[0].className.replace(" activeClgBtn", "");
        this.className += " activeClgBtn";
        // getCollegeInfo(currentVal);
        getCollegeWithCountryAndCoursesInConsultation(course_country ? course_country : 'USA', currentVal);
    });
}


function getCollegeInfo(branch) {

    // document.getElementById("collegeListContainer").innerHTML = `<h3>${branch}</h3>`;
}
</script>

<?= $this->include('templates/calltoaction') ?>