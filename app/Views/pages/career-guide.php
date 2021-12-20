<?php $session = session();?>

<!-- added by debanjan | 28-jul-2021 -->
<!--Start of Jumbotron-->
<!-- here .. i have show you how to export image from figma..just link here start  -->
<?php if($session->get('token')){?>
<style type="text/css">
#areaOfInterest {
    display: block !important;
}

#getstartdSection {
    display: none !important;
}
</style>
<?php }?>


<section id="getstartdSection">
    <div class="container">
        <div class="row">
            <!-- contetn for get started -->
            <div class="col-md-6 mt-1 pl-4">
                <h1 class="career-guide-text mt-3">CAREER GUIDE</h1>
                <p class="pb-3 pt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                    Ut enim ad minim veniam,<br> quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                </p>
                <button class="btn col-6 get-started flot-right" id="getStarted" role="button">Get Started</button>
            </div>
            <div class="col-sm-6 p-5">
                <img class="img-fluid" src="./assets/images/caree-guide/career-guide-image.png" alt="career-guide-image"
                    width="640" height="360" title="career-guide-image">
            </div>
        </div>
    </div>
</section>

<section id="personalDetails" style="display: none;">

    <!-- First Name alert -->
    <div class="alert" id="alertFirstName" style="display:none">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        First Name required.
    </div>
    <!-- End alert -->

    <!-- Phone Number alert -->
    <div class="alert" id="alertPhone" style="display:none">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        Phone Number required.
    </div>
    <!-- End alert -->

    <!-- Email alert -->
    <div class="alert" id="alertEmail" style="display:none">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        Email required.
    </div>
    <!-- End alert -->

    <!-- City alert -->
    <div class="alert" id="alertCity" style="display:none">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        City required.
    </div>
    <!-- End alert -->

    <!-- State alert -->
    <div class="alert" id="alertState" style="display:none">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        State required.
    </div>
    <!-- End alert -->

    <!-- Pin alert -->
    <div class="alert" id="alertPin" style="display:none">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        Pin Code required.
    </div>
    <!-- End alert -->

    <!-- Email Validationin alert -->
    <div class="alert" id="alertEmailValidation" style="display:none">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        You have entered an invalid email address!
    </div>
    <!-- End alert -->
    <div class="container">
        <div class="row">
            <h5 class="pl-1 pb-2" style="margin-bottom: 20px;">Personal details</h5>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form enctype="multipart/form-data" style="width: 100%;">
                    <!-- image -->
                    <div class="form-row">

                        <!-- <div class="col mb-3 mx-2">
                        <div class="file-inputCareer">

                            <input type="file" id="file" name="file" class="fileCareer" multiple required onchange="carrerGuideFileUpload(this)"/>
                            <label for="file">
                                <i class="fa fa-upload"></i>&ensp;Select file
                            </label>
                        </div>
                    </div>

                    <div class="col mb-3 mx-2">
                        <div class="file-nameCareer">
                        </div>
                    </div> -->
                    </div>
                    <!-- image -->


                    <div class="form-row">
                        <!-- <div class="col-md-6 mb-3 mx-2"> -->
                        <div class="col-md-6 mb-3 mx-2">
                            <input type="text" class="form-control" name="careerFname" id="careerFname"
                                placeholder="First Name required*">
                        </div>
                        <!-- <div class="col-md-6 mb-3 mx-2"> -->
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="careerLname" id="careerLname"
                                placeholder="Last Name required*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 mx-2">
                            <input type="text" class="form-control" name="careerPhone" id="careerPhone" maxlength="10"
                                placeholder="Phone Number required*" onkeypress="javascript:return isNumber(event)">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="email" class="form-control" name="careerEmail" id="careerEmail"
                                placeholder="Email required*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 mx-2">
                            <input type="text" class="form-control" name="careerAddressline1" id="careerAddressline1"
                                placeholder="Address Line1">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="address" class="form-control" name="careerAddressline2" id="careerAddressline2"
                                placeholder="Address Line2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-md-4 mb-3 mx-2">
                            <input type="text" class="form-control" name="careerCity" id="careerCity"
                                placeholder="City/Town/Village required*">
                        </div>
                        <div class="col-md-4 mb-3 mx-2">
                            <input type="text" class="form-control" name="careerState" id="careerState"
                                placeholder="State required*">
                        </div>
                        <div class="col mb-3 mx-2">
                            <input type="text" class="form-control" name="careerPin" id="careerPin" maxlength="6"
                                placeholder="Pincode required*" onkeypress="javascript:return isNumber(event)">
                        </div>
                    </div>
                </form>
                <div class="row">
                    <h5 class="pl-1 pb-3" style="padding-bottom:20px;padding-top:10px">Qualification</h5>
                </div>
                <form style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-row">
                                <!-- <div class="col-md-6 mb-3 mx-2"> -->
                                <div class="col-md-6 mb-3 mx-2">
                                    <input type="text" class="form-control" name="careerQualification"
                                        id="careerQualification" placeholder="Highest Qualification required*">
                                </div>
                                <!-- <div class="col-md-6 mb-3 mx-2"> -->
                                <div class="col-md-6 mb-3 mx-2">
                                    <input type="text" class="form-control" name="careerPassingYear"
                                        id="careerPassingYear" placeholder="Year of Passing required*">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3 mx-2">
                                    <input type="text" class="form-control" name="careerHigherSecondary"
                                        id="careerHigherSecondary" placeholder="12th">
                                </div>
                                <div class="col-md-6 mb-3 mx-2">
                                    <input type="text" class="form-control" name="careerHigherSecondaryYear"
                                        id="careerHigherSecondaryYear" placeholder="Year of Passing">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3 mx-2">
                                    <input type="text" class="form-control" name="careerSecondary" id="careerSecondary"
                                        placeholder="10th">
                                </div>
                                <div class="col-md-6 mb-3 mx-2">
                                    <input type="email" class="form-control" name="careerSecondaryPassingYear"
                                        id="careerSecondaryPassingYear" placeholder="Year of Passing">
                                </div>

                            </div>

                        </div>

                    </div>
                    <input class="form-check-input p-3" name="termsCareer" type="checkbox" id="termsCareer" style="margin-top:6px !important">
                    <label class="form-check-label font-weight-bold" for="terms" style="margin-left:20px !important">
                                                I accept <a href="privacy-policy">terms & conditions</a>
                                            </label>
                                            <div style="visibility:hidden; color:red; text-align:left"
                                                id="agree_chk_error">
                                                Can't proceed as you didn't agree to the terms!
                                            </div>
                </form>
                <div class="row p-1 float-right">
                    <button class="btn btn-primary font-weight-bold mb-2 mr-2" name="next" id="next"
                        type="submit" disabled="disabled">Next</button>
                </div>
            </div>
</section>
<!-- personal details form section ends here -->
<!-- added by debanjan | 28-jul-2021 -->

<!-- Area of Interest Section -->
<!-- added by debanjan | 30-jul-2021 -->
<section id="areaOfInterest" style="display: none;">
    <div class="container">
        <div class="row ml-1">
            <h3>Area of Interest </h3>
        </div>
        <div class="row ml-3 my-md-3">
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
        <div class="row ml-3 my-md-3">
            <div class="col-lg-2">
                <h5>Level</h5>
            </div>
            <div class="col-lg-10">
                <div class="form-check form-check-inline text-left d-flex justify-content-between">
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="Undergraduate">
                        <label class="form-check-label " for="level">Under Graduate</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="PostGraduate">
                        <label class="form-check-label" for="level">Post Graduate</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="Certification">
                        <label class="form-check-label" for="level">Certification</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="Diploma">
                        <label class="form-check-label" for="level">Diploma</label>
                    </div>
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="level" id="level" value="ExecutiveCourse">
                        <label class="form-check-label" for="level">Executive Course</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ml-3 my-md-3">
            <div class="col-lg-2">
                <h5>Area of Study</h5>
            </div>
            <div class="col-lg-10">
                <div class="form-check form-check-inline text-left d-flex justify-content-between">
                    <div class="form-group mx-2">
                        <input class="form-check-input" type="radio" name="study" id="study" value="Engineering">
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


        <!-- <div class="row ml-5"> -->
        <section id="universityFilter">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <!-- <div class="row ml-5 my-md-3 p-1"> -->
                        <div class="row my-md-3 p-1">
                            <h4>YOUR OPPORTUNITY </h4>
                        </div>


                        <div class="tab-content border-top border-primary" id="pills-tabContent">


                            <ul class="list-unstyled brd college" id="listColleges">

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>
<!-- added by nazim | 28-jul-2021 -->

<!-- added by greddy | 28-jul-2021 -->


<section class="bg-light">
    <?= $this->include('templates/calltoaction') ?>

</section>