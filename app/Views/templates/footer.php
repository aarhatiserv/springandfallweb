<?php $session = session();
if (empty($session->get('token'))) { ?>
<script>
setInterval(function() {
    $('#loginForm').modal();
}, 300000);
</script>
<?php }
?>
<!-- call now  -->
<?= $this->include('templates/callnow') ?>
<!-- callnow modal ends -->

<!-- signup modal -->
<?= $this->include('templates/signup') ?>
<!-- signup modal ends -->

<?= $this->include('templates/login') ?>

<!--Footer Start-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 text-center">
                <img src="<?= base_url() ?>/assets/images/logo/logo1.png" alt="logo" width="206" height="115"
                    title="logo" />
                <div class="social-icons-fa my-3 pb-4">
                    <a href="http://www.facebook.com/springnfall/" target="_blank" rel="noopener"><i
                            class="fa fa-facebook-square ml-4 mt-2 fa-2x" title="facebook"></i></a>

                    <a href="http://www.instagram.com/_springandfall_" target="_blank" rel="noopener"><i
                            class="fa fa-instagram ml-4 mt-2 fa-2x" title="instagram"></i></a><br />
                    <a href="https://twitter.com/spring_n_fall" target="_blank" rel="noopener"><i
                            class="fa fa-twitter ml-4 mt-2 fa-2x" title="twitter"></i></a>
                    <a href="https://www.linkedin.com/company/springandfall/" target="_blank" rel="noopener"><i
                            class="fa fa-linkedin-square ml-4 mt-2 fa-2x" title="linkedin"></i></a>
                    <!--<i class="fa fa-youtube ml-4 mt-2 fa-2x" aria-hidden="true"></i>-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="row ">
                    <div class="col-6 col-md-6 text-md-left ml-md-0">
                        <ul class="list-unstyled d-flex h-100 flex-column justify-content-around py-4 my-auto">
                            <li> <a href="<?= base_url() ?>/about" rel="noopener" class="anchor">ABOUT US</a></li>
                            <li> <a href="<?= base_url() ?>/career-guide" rel="noopener" class="anchor">CAREER
                                    GUIDE</a></li>
                            <li><a href="<?= base_url() ?>/financial-aid" rel="noopener" class="anchor">FINANICAIL
                                    AID</a></li>
                            <li><a href="<?= base_url() ?>/university-or-college-selection" rel="noopener"
                                    class="anchor">CONSULTATION</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-6 text-md-left text-right ">
                        <ul class="list-unstyled d-flex  flex-column align-items-md-start align-items-end  py-4 my-3">
                            <li class="py-5"> <a href="https://blog.springandfall.in/" rel="noopener"
                                    class="anchor">BLOG</a>
                            </li>
                            <li class="py-5"> <a href="<?= base_url() ?>/terms-and-condtion" rel="noopener"
                                    class="anchor">TERMS
                                    &
                                    CONDTION</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column h-100  justify-content-around">

                <div class="py-4" id="subscribe-area">
                    <p class="subscribe pt-2  text-center">Subscribe to our news letter</p>
                    <div class="d-flex flex-inline justify-content-around">
                        <input class="text-center" type="email" id="subscribeEmail" name="subscribeEmail"
                            placeholder="Email Id">
                        <button type="button" id="subscribe" class="mt-1 ml-2">Subscribe</button>
                    </div>


                </div>


            </div>

        </div>

    </div>
    <hr>
    <p class="mb-0 pb-2 credit sticky-bottom text-center">DESIGNED AND DEVELOPED BY | © AARHAT ISERV LLP</p>
</footer>
<!--End of Footer-->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js">
</script>
<!-- vanila titlt -->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/vanilla-tilt.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/js/scrollpopup.js"></script>
<!-- vanila titlt ends -->
<!-- axios -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- owl js -->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/dist/owl.carousel.js"></script>
<!-- owl js -->
<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- relax -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
<!-- relax ends-->
<!-- slick js -->
<script type="text/javascript" src="<?= base_url() ?>/assets/slick/slick.min.js"></script>
<!-- costom js section -->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/counter-section.js"></script>
<!-- loan approve -->
<!-- <script src="<?= base_url() ?>/assets/js/creative-steps.js"></script> -->
<!-- career guide js -->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/career-guide.js"></script>
<!-- consultation js -->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/consultation.js"></script>
<!-- about parallax -->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/about-parallax.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/js/college-parallax.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/js/college.js"></script>


<!-- new Pasword -->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/newPassword.js"></script>

<!-- Add consultation click apply and show ligin modal for sweetalert By Nazim 20-Dec-2021 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />

<?php
if (url_is('about')) {

?>



<script>
// Also can pass in optional settings block
var rellax = new Rellax('.rellax', {
    speed: -2,
    center: true,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
});
</script>
<!-- career guide js ends -->

<?php

}

?>

<script type="text/javascript">
$(document).ready(function() {

    // show login modal every 5 minute 

    $("#flags-carousel").owlCarousel({
        items: 6,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 800,
        autoplayHoverPause: true,
        responsive: {

            400: {
                items: 3,
            },
            360: {
                items: 3,
            },
            768: {
                items: 6,
            }
        }
    });


    // Carousel Auto-Cycle
    $(document).ready(function() {
        $("#news-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 2],
            itemsMobile: [600, 1],
            navigation: true,
            navigationText: ["<", ">"],
            pagination: true,
            autoPlay: true
        });
    });
    // for banner setion
    // $("#hero-banner").owlCarousel({
    //     items: 1,
    //     loop: true,
    //     navigation: true, // Show next and prev buttons
    //     slideSpeed: 300,
    //     paginationSpeed: 400,
    //     singleItem: true,
    //     autoplay: true,
    //     autoplayTimeout: 3200,
    //     autoplayHoverPause: true
    // });

    $('#hero-banner').slick({
        centerMode: true,
        centerPadding: '40px',
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerMode: false,
                /* set centerMode to false to show complete slide instead of 3 */
                slidesToScroll: 1
            }
        }]
    });

    // latest course carousel
    $('.lastest-courses-carousel').slick({
        centerMode: true,
        centerPadding: '40px',
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerMode: false,
                /* set centerMode to false to show complete slide instead of 3 */
                slidesToScroll: 1
            }
        }]
    });

    $('.popular-courses-carousel').slick({
        centerMode: true,
        centerPadding: '40px',
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerMode: false,
                /* set centerMode to false to show complete slide instead of 3 */
                slidesToScroll: 1
            }
        }]
    });


    let owl = $('#hero-banner');

    // modal broken fix
    // $('#hero-banner .btn').click(function() {
    //     owl.trigger('owl.stop');
    // });

    // $('#hero-banner').on('show.bs.modal', function() {
    //     owl.trigger('owl.stop');
    // });

    // $('#hero-banner').on('hidden.bs.modal', function() {
    //     owl.trigger('owl.play', 2200);
    // });


    // for testimonial

    (function() {
        "use strict";

        var carousels = function() {
            $(".owl-carousel1").owlCarousel({
                loop: true,
                center: true,
                margin: 0,
                responsiveClass: true,
                nav: false,
                autoplay: true,
                autoplayTimeout: 3200,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    680: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            });
        };

        (function($) {
            carousels();
        })(jQuery);
    })();



});


function comingSoon() {
    swal("Coming soon..!!");
}

$(document).ready(() => {

    $("#signup").validate({
        submitHandler: (form, event) => {
            event.preventDefault();
            $('.signUp').html("Please wait");
            $('.signUp').prop("disabled", true);

            const data = new FormData(event.target);
            const formData = Object.fromEntries(data.entries());
            // console.log("type", formData); // for debugging purpose
            event.preventDefault();
            // using axios for sending data in body
            axios.post('/api/register', formData).then((res) => {
                console.log("res", res); // response from server
                if (res.data.error === false) {
                    $("#SignUp").modal("hide");
                    $('.signUp').html("SIGN UP");
                    $('.signUp').prop("disabled", false);
                    swal("Sign up successfull", res.data.messages, "success");

                } else {
                    // $("#SignUp").modal("hide");
                    $('.signUp').html("SIGN UP");
                    $('.signUp').prop("disabled", false);
                    swal("Opps..!", res.data.messages, "error");
                }
            }).catch((err) => {
                console.log(`error`, err);
                $('.signUp').html("SIGN UP");
                $('.signUp').prop("disabled", false);
                if (err) {
                    swal("Oh noes!", "The AJAX request failed!", "error");
                }
            })
        }
    })


    // login ajax

    $("#loginForm").validate({
        submitHandler: (form, event) => {
            event.preventDefault();
            $('.loginBtn').html("Please wait");
            $('.loginBtn').prop("disabled", true);
            const data = new FormData(event.target);
            const formData = Object.fromEntries(data.entries());
            // console.log("type", formData); // for debugging purpose
            event.preventDefault();
            // using axios for sending data in body
            axios.post('/api/login', formData).then((res) => {
                console.log("res", res); // response from server
                if (res.data.error === false) {
                    let token = res.data.data.token;

                    localStorage.setItem('token', token);
                    $("#SignUp").modal("hide");
                    $('.loginBtn').html("LOGIN");
                    $('.loginBtn').prop("disabled", false);
                    swal("Thank you!", res.data.messages, "success");
                    setTimeout(function() {
                        /*Redirect to login page after 1 sec*/


                        window.location.reload();
                    }, 1000);

                } else {
                    // $("#SignUp").modal("hide");
                    $('.loginBtn').html("LOGIN");
                    $('.loginBtn').prop("disabled", false);
                    swal("Opps..!", res.data.messages, "error");
                }
            }).catch((err) => {
                console.log(`error`, err);

                if (err) {
                    $('.loginBtn').html("LOGIN");
                    $('.loginBtn').prop("disabled", false);
                    swal("Oh noes!", "The AJAX request failed!", "error");
                }
            })
        }
    })

    $("#callBackQuery").on("click", () => {
        let name = $("#bname").val();
        let phone = $("#bphone").val();
        let email = $("#bemail").val();
        let date = $("#bdate").val();
        let formData = {
            name: name,
            phone: phone,
            email: email,
            date: date
        }
        // console.log("data", formData);
        // formData = JSON.stringify(data);
        axios.post("/home/callback", formData).then((res) => {
            console.log("response ", res);
            if (res.status === 1) {
                swal("Thank you!", res.message, "success");
                window.location.reload();
            } else if (res.status === 2) {
                swal("Opps.!!", res.message, "error");
            } else {
                swal("Opps.!!", "Something went wrong.!!", "error");
            }
        })
    })



    // $("#subscribe").click({
    //         // console.log(event); // for debugginh purpose
    //         var email = $("#subscribeEmail").val();
    //         $.ajax({
    //             url: "/api/subscribe",
    //             method: "POST",
    //             data: email,
    //             beforeSend: function() {
    //                 $('#subscribe').val("Please wait");
    //                 $('#subscribe').prop("disabled", true);

    //             },
    //             success: function(data) {
    //                 $('#subscribe').val("Subscribe");
    //                 $('#subscribe').prop("disabled", false);
    //                 var res = JSON.parse(data);
    //                 if (res.status === 1) {
    //                     swal("Thank you!", res.message, "success");
    //                     window.location.reload();
    //                 } else if (res.status === 2) {
    //                     swal("Opps.!!", res.message, "error");
    //                 } else {
    //                     swal("Opps.!!", "Something went wrong.!!", "error");
    //                 }
    //             }
    //         })
    //     }
    // });
});
</script>

<!-- subscribe -->
<script>
$(document).ready(function() {
    $("#subscribe").click(function() {
        var email = $("#subscribeEmail").val();
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {

            let formData = new FormData();
            formData.append('email', email);
            $.ajax({
                url: "/api/subscribe",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#subscribe').val("Please wait");
                    $('#subscribe').prop("disabled", true);

                },
                success: function(data) {
                    $('#subscribe').val("Subscribe");
                    $('#subscribe').prop("disabled", false);
                    var res = JSON.parse(data);
                    if (res.status === 1) {
                        swal("Thank you!", res.message, "success");
                        document.getElementById("subscribeEmail").value = "";
                        // window.location.reload();
                    } else if (res.status === 2) {
                        swal("Opps.!!", res.message, "error");
                    } else {
                        swal("Opps.!!", "Something went wrong.!!", "error");
                    }
                }
            })
        } else {
            swal("Opps.!!", "Please Enter a Valid Email", "error");
        }

    })
});
</script>
<!-- subscribe -->

<script type="text/javascript">
var idleTime = 0;
$(document).ready(function() {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function(e) {
        idleTime = 0;
    });
    $(this).keypress(function(e) {
        idleTime = 0;
    });
});

function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 14) { // 15 minutes
        //javascript er popup dite hobe, je abar login korar jonno session expired, because security
        window.location.href = "/api/session_expire";
        // window.location.reload();
    }
}
</script>

</body>

</html>