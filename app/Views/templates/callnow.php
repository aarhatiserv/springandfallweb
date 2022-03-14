<div class="modal fade " id="bookCall" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light" style="border-radius: 25px;">
            <div class="modal-header">
                <h5 class="modal-title">Book Your free call</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <from class="form" method="POST" action="#" id="callForm">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text bg-white border-0 " id="basic-addon0"><i class="fa fa-user"
                                    aria-hidden="true"></i></span>
                        </div>
                        <input class="form-control border-0 " type="text" id="bname" name="bname" placeholder="Jhon Doe"
                            required aria-label="bname" aria-describedby="basic-addon0">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text bg-white border-0 " id="basic-addon1"><i class="fa fa-phone"
                                    aria-hidden="true"></i></span>
                        </div>
                        <input class="form-control border-0 " type="tel" id="bphone" name="bphone"
                            placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required aria-label="phone"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text bg-white border-0 " id="basic-addon2"><i
                                    class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <input class="form-control border-0 " type="email" id="bemail" name="bemail"
                            placeholder="john@domain.com" required aria-label="bemail" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text bg-white border-0 " id="basic-addon3"><i
                                    class="fa fa-calendar-check-o" aria-hidden="true"></i></span>
                        </div>
                        <input class="form-control border-0 " type="date" id="bdate" name="bdate"
                            placeholder="10/10/2022" required aria-label="bdate" aria-describedby="basic-addon3">
                    </div>
                </from>
            </div>
            <div class="modal-footer d-flex justify-content-center border-0">
                <button type="button" class="btn btn-outline-secondary p-2" style="border-radius: 10px;"
                    data-dismiss="modal">No, i am
                    Okay</button>
                <button type="submit" id="callBackQuery" class="quick-btn btn border-0 ml-3">Book My Call</button>
            </div>
        </div>
    </div>
</div>