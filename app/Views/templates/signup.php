<div class="modal fade" id="SignUp" tabindex="-1" data-backdrop="" role="dialog" aria-labelledby="SignUpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal" role="document">
        <div class="modal-content px-5" style="border-radius: 25px;">
            <div class="modal-header text-center border-0">
                <span>&nbsp;</span>
                <h5 class="col-12 modal-title font-weight-bold" id="SignUpLabel"><u>SIGN UP</u></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <form id="signup">
                        <div class="form-row">
                            <div class="col mb-3">
                                <input type="text" name="name" style="border-radius: 10px;" class="form-control"
                                    id="name" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col mb-3">
                                <input type="email" name="email" style="border-radius: 10px;" class="form-control"
                                    id="signupEmail" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col mb-3">
                                <input type="text" name="phone" style="border-radius: 10px;" class="form-control"
                                    id="signuppPhone" placeholder="Phone number" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col mb-3">
                                <input type="password" name="password" style="border-radius: 10px;" class="form-control"
                                    id="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn signUp" style="font-size: 1rem;">SIGN
                                    UP</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <p class="font-weight-bold ">Already have an account! <a href="#" class="text-prmary "
                        data-toggle="modal" data-target="#loginForm" data-dismiss="modal">Login</a></p>
            </div>
        </div>
    </div>
</div>