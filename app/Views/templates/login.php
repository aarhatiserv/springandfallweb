<div class="modal fade" id="loginForm" data-backdrop="" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal" role="document">
        <div class="modal-content px-5" style="border-radius: 25px;">
            <div class="modal-header text-center border-0">
                <span>&nbsp;</span>
                <h5 class="col-12 modal-title font-weight-bold" id="loginLabel"><u>SIGN IN</u></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body loginForm">
                <div>
                    <form id="signin">
                        <div class="form-row">
                            <div class="col mb-3">
                                <input type="email" name="email" style="border-radius: 10px;" class="form-control"
                                    id="LoginEmail" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col mb-3">
                                <input type="password" name="password" style="border-radius: 10px;" class="form-control"
                                    id="Loginpassword" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn loginBtn" id="login" style="font-size: 1rem;">SIGN
                                    IN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <p class="font-weight-bold ">Don't have an account? <a href="#" class="text-prmary " data-toggle="modal"
                        data-target="#SignUp" data-dismiss="modal">SIGN UP NOW</a></p>
            </div>
        </div>
    </div>
</div>