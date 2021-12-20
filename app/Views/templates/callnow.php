<div class="modal fade p-5" id="contactNowForm" data-backdrop="" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content px-5" style="border-radius: 25px;">
            <div class="modal-header border-0 text-center">

                <h5 class="col-12 modal-title text  text-center text-uppercase text-underline font-weight-bold"
                    id="exampleModalLabel"><u>Contact
                        us now</u></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="#" method="POST" id="queryForm" name="myForm"
                        onsubmit="return validateAgreeTerms(this)">

                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <input type="text" style="border-radius: 10px;"
                                    class="form-control  border border-primary" name="fullname" id="fullname"
                                    placeholder="Full Name" required>

                            </div>
                            <br>
                            <div style="visibility:hidden; color:red;" id="nameError">
                                Only Letter is Required
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <input type="email" style="border-radius: 10px;"
                                    class="form-control  border border-primary" name="email" id="email"
                                    placeholder="Email address" required>
                            </div>
                            <div class="col mb-3">
                                <input type="text" style="border-radius: 10px;"
                                    class="form-control  border border-primary" minlength="10" maxlength="13"
                                    title="10 digit mobile number" name="phone" id="phone"
                                    onkeypress="javascript:return isNumber(event)" placeholder="Contact number"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <select name="service" id="service" style="border-radius: 10px;"
                                    class="form-control  border border-primary  mt-0" required>
                                    <!-- <select  name="service" class="text-uppercase" id="service" required> -->
                                    <option value="">Interested services</option>
                                    <option value="collage selection">UNIVERSITY / COLLAGE SELECTION</option>
                                    <option value="VISA CONSULTATION">VISA CONSULTATION</option>
                                    <option value="OVERSEASE INSURANCE">OVERSEASE INSURANCE</option>
                                    <option value="EXAM PREPRATION">EXAM PREPRATION</option>
                                    <option value="TRAVEL ASSISTANCE">TRAVEL ASSISTANCE</option>
                                    <option value="INTERNATIONAL TRAINING">INTERNATIONAL TRAINING</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select name="country" id="country" style="border-radius: 10px;"
                                    class="form-control  border border-primary mt-0" required>
                                    <option>Interested countries</option>
                                    <option value="UK">USA</option>
                                    <option value="UK">UK</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="France">France</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Phillipines">Phillipines</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <textarea type="textArea" style="border-radius: 10px;"
                                    class="form-control  border border-primary" name="message" id="msg"
                                    placeholder="Your Message" rows="4" required></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row text-right">
                                    <div class="col-3"></div>
                                    <div class="col-9 float-right">
                                        <div class="from-group my-3">
                                            <input class="form-check-input p-3" name="terms" type="checkbox" id="terms">
                                            <label class="form-check-label font-weight-bold" for="terms">
                                                I accept <a href="privacy-policy">terms & conditions</a>
                                            </label>
                                            <div style="visibility:hidden; color:red; text-align:left"
                                                id="agree_chk_error">
                                                Can't proceed as you didn't agree to the terms!
                                            </div>
                                        </div>
                                        <button type="submit"  id= "callBackQuery" class="btn call-now text-uppercase"><i
                                                class="fas fa-phone-alt"></i> Call Now</button>
                                        <!-- <button type="submit" id="callBackQuery" class="btn call-now text-uppercase"
                                            onclick="myFunction()"><i class="fas fa-phone-alt"></i> Call Now</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
function validateAgreeTerms(form) {
    //   console.log("checkbox checked is ", form.terms.checked);
    if (!form.terms.checked) {
        document.getElementById('agree_chk_error').style.visibility = 'visible';
        return false;
    } else {
        document.getElementById('agree_chk_error').style.visibility = 'hidden';
        return true;
    }
}


function isNumber(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}
</script>