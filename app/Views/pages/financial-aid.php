<div class="container-fluid px-0 clueless"
    style="margin-left: 0px; margin-bottom: 0px; height: auto; background: linear-gradient(270deg, rgba(0, 0, 0, 0.56) 0%, rgba(0, 0, 0, 0.16) 100%);">
    <img src="assets/images/education.png" alt="education" title="education" style=" width: 100%;">
</div>

<?= $this->include('templates/calltoaction') ?>
<!-- 1 2 3 4 5 -->
<div class="container-fluid px-0 px-md-5 px-lg-5 py-5 " style="height:auto; background: #E5E5E5; margin-top:0px;">
    <br><br>
    <!-- <img  alt="" style="width: 100%;"> -->
    <picture>
        <source media="(max-width: 650px)" srcset="assets/images/loan-steps.png">
        <img src="assets/images/Group 85.png" alt="steps for loan aproval" title="steps for loan aproval" width=""
            height="" />
    </picture>
</div>
<!-- 1 2 3 4 5 ends -->

<!-- mission and vision -->
<div class="container">
    <div class="row text-center row-cols-sm-1 row-cols-md-3">
        <div class="col">
            <br><br>
            <div class="btn card" data-toggle="modal" data-target="#EMI"
                style="background: #E9E8FF; height:200px; width:200px; margin-right: 0%;">
                <div class="card-body text-center">
                    <img class="emi1" src="assets/images/EMI 1.png" alt="EMI" title="EMI" width="" height="">
                    <p class="emi">EMI CALCULATOR</p>
                </div>
            </div>
        </div>
        <div class="col">
            <br><br><br>
            <button class=" btn mr-3 contact-now text-uppercase" data-toggle="modal" data-target="#contactNowForm"
                style="font-size: 14px;">Contact Now
            </button>
            <br><br>
            <p style="font-family: Source Serif Pro;
      font-style: normal;
      font-weight: 600;
      font-size: 15px;
      margin-left: -8px;
      text-transform: uppercase;      
      color: #000000;"> Always giving you more</p>
            <p style="font-family: Source Serif Pro;
      font-style: normal;
      font-weight: 600;
      font-size: 18px;
      margin-left: 10px;
      text-transform: uppercase;
      
      color: #000000;"> “When every Penny Counts”</p>
        </div>
        <div class="col">
            <br><br>
            <div class="card" style="background: #FDFBD1; height:200px; width:200px; margin-left: 100px;">
                <div class="card-body text-center">
                    <img src="assets/images/option-01 1.png" alt="img" title="img" width="" height="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <section>
    <div class="background">

        <div class="creative-card details">
            <div class="photo"></div>
            <h2>LOANS APROVED</h2>
            <p>THIS WEEK</p>
            <div class="chart">
                <div class="bar bar1"><span>20,0000</span></div>
                <div class="bar bar2"><span>10,0000</span></div>
                <div class="bar bar3"><span>15,0000</span></div>
                <div class="bar bar4"><span>24,0000</span></div>
                <div class="bar bar5"><span>7,0000</span></div>
                <div class="bar bar6"><span>7,0000</span></div>
                <div class="bar bar7"><span>10,0000</span></div>
            </div>
            <h3 style="color:white !important;">93,00000</h3>
        </div>

        <div class="info">Click to toggle details view</div>
    </div>
</section> -->
<!-- loan options -->
<section id="loanOptions">
    <div class="container">
        <div class="row my-md-5 justify-content-center">
            <h1 class="text-center loan-option-heading">Loan options</h1>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="row justify-content-center m-1">

                    <p class="why pt-3 pb-4">Why apply loan with spring and fall ?</p>
                </div>

                <div id="accordion">
                    <div class="card cardLoan">
                        <div class="card-header">
                            <button type="button" class="card-link easy" data-toggle="collapse" href="#collapseOne">
                                Easy to apply
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel. This panel is shown by
                                default, thanks to the <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card cardLoan">
                        <div class="card-header">
                            <button type="button" class="collapsed card-link easy" data-toggle="collapse"
                                href="#collapseTwo">
                                Less time
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Some placeholder content for the second accordion panel. This panel is hidden by
                                default.
                            </div>
                        </div>
                    </div>
                    <div class="card cardLoan">
                        <div class="card-header">
                            <button type="button" class="collapsed card-link easy" data-toggle="collapse"
                                href="#collapseThree">
                                No need to visit banks
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                And lastly, the placeholder content for the third and final accordion panel.
                                This
                                panel is hidden by default.
                            </div>
                        </div>
                    </div>
                </div>






            </div>
            <div class="col-md-6 p-5">
                <img class="img-fluid" src="assets/images/Education Loan Spring nd Fall Website.jpg"
                    alt="why apply loan with spring and fall ?" title="why apply loan with spring and fall ?" width=""
                    height="">
            </div>
        </div>

        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">

                <div class="row justify-content-center m-1">

                    <p class="why pb-3 pt-3">Loan without collaterel</p>
                </div>
                <div id="accordion">
                    <div class="card cardLoan">
                        <div class="card-header">
                            <button type="button" class="card-link easy" data-toggle="collapse" href="#collapseOne1">
                                Easy to apply
                            </button>
                        </div>
                        <div id="collapseOne1" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel. This panel is shown by
                                default, thanks to the <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card cardLoan">
                        <div class="card-header">
                            <button type="button" class="collapsed card-link easy" data-toggle="collapse"
                                href="#collapseTwo1">
                                Less time
                            </button>
                        </div>
                        <div id="collapseTwo1" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Some placeholder content for the second accordion panel. This panel is hidden by
                                default.
                            </div>
                        </div>
                    </div>
                    <div class="card cardLoan">
                        <div class="card-header">
                            <button type="button" class="collapsed card-link easy" data-toggle="collapse"
                                href="#collapseThree1">
                                No need to visit banks
                            </button>
                        </div>
                        <div id="collapseThree1" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                And lastly, the placeholder content for the third and final accordion panel.
                                This
                                panel is hidden by default.
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-6 ">
                <div class="row justify-content-center m-1">

                    <p class="why pb-3 pt-3">Loan with collaterel</p>
                </div>
                <div id="accordion">
                    <div class="card cardLoan">
                        <div class="card-header">
                            <button type="button" class="card-link easy" data-toggle="collapse" href="#collapseOne2">
                                Easy to apply
                            </button>
                        </div>
                        <div id="collapseOne2" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel. This panel is shown by
                                default, thanks to the <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card cardLoan">
                        <div class="card-header">
                            <button type="button" class="collapsed card-link easy" data-toggle="collapse"
                                href="#collapseTwo2">
                                Less time
                            </button>
                        </div>
                        <div id="collapseTwo2" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Some placeholder content for the second accordion panel. This panel is hidden by
                                default.
                            </div>
                        </div>
                    </div>
                    <div class="card cardLoan">
                        <div class="card-header">
                            <button type="button" class="collapsed card-link easy" data-toggle="collapse"
                                href="#collapseThree2">
                                No need to visit banks
                            </button>
                        </div>
                        <div id="collapseThree2" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                And lastly, the placeholder content for the third and final accordion panel.
                                This
                                panel is hidden by default.
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
</section>

<!-- loan options ends -->

<!-- mission and vision -->
<!-- <div class="container">
    <div class="row text-center row-cols-sm-1 row-cols-md-3">
        <div class="col">
            <br><br>
            <div class="btn card" data-toggle="modal" data-target="#EMI"
                style="background: #E9E8FF; height:200px; width:200px; margin-right: 0%;">
                <div class="card-body text-center">
                    <img class="emi1" src="assets/images/EMI 1.png" alt="EMI" title="EMI" width="" height="">
                    <p class="emi">EMI CALCULATOR</p>
                </div>
            </div>
        </div>
        <div class="col">
            <br><br><br>
            <button class=" btn mr-3 contact-now text-uppercase" data-toggle="modal" data-target="#contactNowForm"
                style="font-size: 14px;">Contact Now
            </button>
            <br><br>
            <p style="font-family: Source Serif Pro;
      font-style: normal;
      font-weight: 600;
      font-size: 15px;
      margin-left: -8px;
      text-transform: uppercase;      
      color: #000000;"> Always giving you more</p>
            <p style="font-family: Source Serif Pro;
      font-style: normal;
      font-weight: 600;
      font-size: 18px;
      margin-left: 10px;
      text-transform: uppercase;
      
      color: #000000;"> “When every Penny Counts”</p>
        </div>
        <div class="col">
            <br><br>
            <div class="card" style="background: #FDFBD1; height:200px; width:200px; margin-left: 100px;">
                <div class="card-body text-center">
                    <img src="assets/images/option-01 1.png" alt="img" title="img" width="" height="">
                </div>
            </div>
        </div>
    </div>
</div> -->

    <div class="container">
        <div class="row row-cols-3">
            <div class="col"></div>
            <div class="col">
                <p style="font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-size: 30px;
        line-height: 45px;
        /* identical to box height */
        
        text-align: center;
        
        color: #114694;
        
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-left: 0%; ">Our Lending Partners</p>
                <div class="row cols-2">
                    <div class="col pr-2">
                        <img src="assets/images/avanse 1.png" alt="avanse" title="avanse" style="height: 150px;">
                    </div>
                    <div class="col pb-4 pr-3 mb-4">
                        <br><br>
                        <img src="assets/images/auxilo 1.png" alt="auxilo" title="auxilo" style="height: 50px;">
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>




<!-- ----------------------------------------------EMI Calculator------------------------------- -->
<div class="modal fade modalEmi" data-backdrop="false" id="EMI" aria-hidden="true" tab-index="-1">
    <div id="ecww-widget-iframeinner" style="display:flex"></div>
    <button type="button" class="btn btn-secondary closeButton" data-dismiss="modal">Close</button>
</div>
<!-- ----------------------------------------------EMI Calculator------------------------------- -->

<!-- EMI CALCULATOR SCRIPT -->
<script src="assets/emicalculator/js/emicalc-lib.js" type="text/javascript"></script>
<script src="assets/emicalculator/js/emicalc-main.min.js" type="text/javascript"></script>
<!-- EMI CALCULATOR SCRIPT -->