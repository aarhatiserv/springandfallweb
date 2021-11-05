<!-- added by debanjan | 28-jul-2021 -->
<!--Start of Jumbotron-->
<!-- here .. i have show you how to export image from figma..just link here start  -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script language="JavaScript" type="text/javascript">
 $(document).ready(function() {
    $('input:radio[name=country]').change(function() {
        if (this.value == 'USA') {
            alert(this.value+" Clicked");
        }
        else if (this.value == 'UK') {
            alert(this.value+" Clicked");
        }
        else if (this.value == 'Canada') {
            alert(this.value+" Clicked");
        }
        else if (this.value == 'Germany') {
            alert(this.value+" Clicked");
        }
        else if (this.value == 'Ireland') {
            alert(this.value+" Clicked");
        }
        else if (this.value == 'NZ') {
            alert(this.value+" Clicked");
        }
        else if (this.value == 'Australia') {
            alert(this.value+" Clicked");
        }
        else if (this.value == 'Schengen') {
            alert(this.value+" Clicked");
        }

    });
});
</script>
<section id="getstartdSection">
    <div class="container">
        <div class="row">
            <!-- contetn for get started -->
            <div class="col-6 mt-5">
                <h1 class="career-guide-text mt-5">CAREER GUIDE</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                    Ut enim ad minim veniam,<br> quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                </p>
                <button class="btn get-started flot-right" id="getStarted" role="button">Get Started</button>
            </div>
            <div class="col-sm-6 p-5">
                <img class="img-fluid" src="./assets/images/caree-guide/career-guide-image.png" alt="career-guide-image"
                    width="640" height="360" title="career-guide-image">
            </div>
        </div>
    </div>
</section>
<!-- ends here -->
<!-- personal details form section -->
<section id="personalDetails" style="display: none;">
    <div class="container">
        <div class="row">
            <h5 class="pl-3">Personal details</h5>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 mx-2">
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                        </div>
                        <div class="col-md-6 mb-3 mx-2">
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="addressline1" id="address"
                                placeholder="Address Line1">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="address" class="form-control" name="addressline2" id="addressline2"
                                placeholder="Address Line2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="city" id="city"
                                placeholder="City/Town/Village">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="state" id="state" placeholder="State">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="pin" id="pin" placeholder="Pincode">
                        </div>
                    </div>
                </form>
                <div class="row">
                    <h5 class="pl-3">Qualification</h5>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form>
                            <div class="form-row">
                                <div class="col-md-6 mb-3 mx-2">
                                    <input type="text" class="form-control" name="qualification" id="qualification"
                                        placeholder="Highest Qualification">
                                </div>
                                <div class="col-md-6 mb-3 mx-2">
                                    <input type="text" class="form-control" name="passingYear" id="passingYear"
                                        placeholder="Year of Passing">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mb-3 mx-2">
                                    <input type="text" class="form-control" name="higherSecondary" id="higherSecondary"
                                        placeholder="12th">
                                </div>
                                <div class="col mb-3 mx-2">
                                    <input type="text" class="form-control" name="higherSecondaryYear"
                                        id="higherSecondaryYear" placeholder="Year of Passing">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mb-3 mx-2">
                                    <input type="text" class="form-control" name="secondary" id="secondary"
                                        placeholder="10th">
                                </div>
                                <div class="col mb-3 mx-2">
                                    <input type="email" class="form-control" name="secondaryPassingYear"
                                        id="secondaryPassingYear" placeholder="Year of Passing">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row p-1 float-right">
                    <button class="btn btn-primary  font-weight-bold mb-2 mr-2" id="next">Next</button>
                </div>
            </div>
</section>
<!-- personal details form section ends here -->
<!-- added by debanjan | 28-jul-2021 -->

<!-- Area of Interest Section -->
<!-- added by debanjan | 30-jul-2021 -->
<section id="areaOfInterest" style="display: none;">
    <div class="container">
        <div class="row ml-5">
            <h3>Area of Interest </h3>
        </div>
        <div class="row ml-5 my-md-3">
            <div class="col-lg-2">
                <h5>Country</h5>
            </div>
            <div class="col-lg-10">
                <div class="form-check form-check-inline text-left d-flex justify-content-between">
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="USA">
                        <label class="form-check-label " for="country">USA</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="UK">
                        <label class="form-check-label" for="country">UK</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Canada">
                        <label class="form-check-label" for="country">Canada</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Germany">
                        <label class="form-check-label" for="country">Germany</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Ireland">
                        <label class="form-check-label" for="country">Ireland</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="NZ">
                        <label class="form-check-label" for="country">NZ</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Australia">
                        <label class="form-check-label" for="country">Australia</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="country" id="country" value="Schengen">
                        <label class="form-check-label" for="country">Schengen</label>
                    </div>
                </div>

            </div>
        </div>
        <div class="row ml-5 my-md-3">
            <div class="col-lg-2">
                <h5>Level</h5>
            </div>
            <div class="col-lg-10">
                <div class="form-check form-check-inline text-left d-flex justify-content-between">
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level"
                            value="Undergraduate">
                        <label class="form-check-label " for="level">Under Graduate</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level"
                            value="PostGraduate">
                        <label class="form-check-label" for="level">Post Graduate</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level"
                            value="Certification">
                        <label class="form-check-label" for="level">Certification</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="Diploma">
                        <label class="form-check-label" for="level">Diploma</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level"
                            value="ExecutiveCourse">
                        <label class="form-check-label" for="level">Executive Course</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ml-5 my-md-3">
            <div class="col-lg-2">
                <h5>Area of Study</h5>
            </div>
            <div class="col-lg-10">
                <div class="form-check form-check-inline text-left d-flex justify-content-between">
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="study" id="study"
                            value="Engineering">
                        <label class="form-check-label " for="study">Engineering</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Management">
                        <label class="form-check-label" for="study">Management</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Medical">
                        <label class="form-check-label" for="study">Medical</label>
                    </div>
                    <div class="form-group mr-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Design">
                        <label class="form-check-label" for="study">Design</label>
                    </div>
                    <div class="form-group mr-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Other">
                        <label class="form-check-label" for="study">Other</label>
                    </div>
                </div>

            </div>
        </div>

        <div class="row ml-5 my-md-3 p-1">
            <h4>Your Opportunity </h4>
        </div>
        <div class="row ml-5">
            <section id="universityFilter">
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-2 rounded-0 tab mb-3" id="pills-countries-tab"
                                        data-toggle="pill" href="#pills-countries" role="tab" aria-label="Countries"
                                        aria-controls="pills-countries" aria-selected="false"
                                        rel="noopener">COUNTRIES</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-2 rounded-0 tab mb-3" id="pills-courses-tab" data-toggle="pill"
                                        href="#pills-courses" role="tab" aria-controls="pills-courses"
                                        aria-label="Courses" aria-selected="false" rel="noopener">COURSES</a>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-2 rounded-0 tab mb-3" id="pills-colleges-tab" data-toggle="pill"
                                        href="#pills-colleges" role="tab" aria-controls="pills-colleges"
                                        aria-label="Colleges" aria-selected="false">COLLEGES</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-2 rounded-0 tab mb-3" id="pills-university-tab" data-toggle="pill"
                                        href="#pills-university" role="tab" aria-controls="pills-university"
                                        aria-label="University" aria-selected="false" rel="noopener">UNIVERSITY</a>
                                </li> -->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-2 rounded-0 tab mb-3" id="pills-careers-tab" data-toggle="pill"
                                        href="#pills-careers" role="tab" aria-controls="pills-careers"
                                        aria-label="careers" aria-selected="false">CAREERS</a>
                                </li>


                            </ul>
                            <!-- <ul class=" nav ml-auto">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mr-1 rounded-0 dropdown-toggle tab" id="$filter"
                                        data-toggle="collapse" href="#collapseContries" role="button"
                                        aria-expanded="false" aria-controls="collapseContries" aria-label="Filter by"
                                        rel="noopener">FILTER BY</a>
                                </li>
                            </ul> -->

                            <div class="collapse" id="collapseContries">
                                <div class="card card-body">
                                    <div class="row">
                                        <span class="badge badge-light border m-1"> <img
                                                src="https://flagcdn.com/16x12/us.png" alt="za" title="za" /> USA</span>
                                        <span class="badge badge-light border m-1"> <img
                                                src="https://flagcdn.com/16x12/ca.png" alt="za" title="za" />
                                            CANADA</span>
                                        <span class="badge badge-light border m-1"> <img
                                                src="https://flagcdn.com/16x12/de.png" alt="za" title="za" />
                                            GERMANY</span>
                                        <span class="badge badge-light border m-1"> <img
                                                src="https://flagcdn.com/16x12/fr.png" alt="za" title="za" />
                                            FRANCE</span>
                                        <span class="badge badge-light border m-1"> <img
                                                src="https://flagcdn.com/16x12/gb.png" alt="za" title="za" /> UNITED
                                            KINGDOM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content border-top border-primary" id="pills-tabContent">

                                <div class="tab-pane fade show active" id="pills-countries" role="tabpanel"
                                    aria-labelledby="pills-countries-tab">


                                    <ul class="list-unstyled">
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="...">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="...">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="...">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-courses" role="tabpanel"
                                    aria-labelledby="pills-courses-tab">
                                    <ul class="list-unstyled">
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-colleges" role="tabpanel"
                                    aria-labelledby="pills-colleges-tab">
                                    <ul class="list-unstyled">
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
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
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-careers" role="tabpanel"
                                    aria-labelledby="pills-careers-tab">
                                    <ul class="list-unstyled">
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media my-4 bg-light">
                                            <img class="p-3 img-fluid" src="https://via.placeholder.com/100"
                                                class="mr-3" alt="..." title="..." width="" height="">
                                            <div class="media-body py-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="mt-0 mb-1 media-heading pb-2">University Of Essex
                                                            Indian
                                                            Sub-Continent
                                                            Regional
                                                            Undergraduate Scholarship 2021-22</h5>
                                                        <p>All my girls vintage Chanel baby. So you can have your cake.
                                                            Tonight,
                                                            tonight,
                                                            tonight,
                                                            I'm walking on air. Slowly swallowing down my fear, yeah
                                                            yeah. </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 d-flex justify-content-end align-items-center ">
                                                        <div class="apply px-5">
                                                            <h5>5 Days to go</h5>
                                                            <button class="btn btn-primary">Apply now</button>
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
        </div>
        <!-- added by debanjan | 30-jul-2021 -->
    </div>
</section>
<!-- added by greddy | 28-jul-2021 -->

<!-- added by greddy | 28-jul-2021 -->


<section class="bg-light">
    <?= $this->include('templates/calltoaction') ?>

</section>