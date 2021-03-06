<!doctype html>
<html lang="en">
<?php
$session = session();
// le testgit
?>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sprign And Fall">
    <meta http-equiv="cache-control" content="no-cache" />
    <link rel="icon" href="/fav.ico" type="image/ico">
    <meta http-equiv="expires" content="timestamp">
    <meta name="theme-color" content="#4285f4">
    <!-- fresh cache -->
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <style>
    :root {
        --text-color: #b6b6b6;
        --background: #114694;
        --font-weight: 600;
    }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css" />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=PT+Serif+Caption&display=swap" rel="stylesheet" /> -->
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->


    <!--CSS LINKS-->
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= base_url() ?>/assets/css/mainv1.css" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= base_url() ?>/assets/css/indexv2.css" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
        href="<?= base_url() ?>/assets/css/latest-courses.css" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
        href="<?= base_url() ?>/assets/css/popular-courses.css" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= base_url() ?>/assets/css/about.css" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
        href="<?= base_url() ?>/assets/css/career-guide.css" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
        href="<?= base_url() ?>/assets/css/financial-aid.css" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= base_url() ?>/assets/css/scholarship.css" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
        href="<?= base_url() ?>/assets/css/creative-card.css" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= base_url() ?>/assets/css/college.css" />

    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= base_url() ?>/assets/css/profile.css" />

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/consultation.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/Visa_Consulation.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/overseas-insurance.css" />
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/css/exam_prep.css"> -->

    <!-- owl carouse -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/dist/assets/owl.carousel.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/dist/assets/owl.theme.default.min.css" />
    <!-- owl carouse ends-->

    <!-- slick carousel -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/slick/slick.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/slick/slick-theme.css" />

    <!-- EMI CALCULATOR CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/emicalculator/css/widget.css" />
    <!-- EMI CALCULATOR CSS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153171991-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-153171991-2');
    </script>

    <!-- uikit ends -->
    <title><?= esc($title) ?> | Spring and Fall</title>


    <!-- animation css -->

    <style>
    @keyframes bounceIn {
        from {
            opacity: 0;
            transform: scale(0.5);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes fillUp {
        from {
            transform: scaleX(0);
        }

        to {
            transform: scaleX(1);
        }
    }

    @keyframes picImage {
        from {
            opacity: 0;
            transform: scale(1.2) translateY(-1rem);
        }

        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    @keyframes picShadow {
        from {
            opacity: 0;
            transform: scale(1.2) translateY(4rem);
        }

        to {
            opacity: 1;
            transform: scale(1.1) translateY(0);
        }
    }


    /* owl carousel */
    .modal-open #owl-demo {
        width: 100% !important;
    }

    .modal-open #owl-demo .item {
        width: 100% !important;
    }

    /* end of owl carouse */

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-2rem);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(1rem);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes zoomOut {
        from {
            opacity: 0;
            transform: scale(1.05);
        }

        to {
            opacity: 0.2;
            transform: scale(1);
        }
    }

    .signUp,
    .banner-h3,
    .contact-now {
        animation-duration: 2s;
        animation-timing-function: ease;
        animation-fill-mode: both;
    }

    .signUp,
    .contact-now {
        animation-name: bounceIn;
    }

    .banner-h3 {
        animation-name: slideDown;
    }
    </style>

</head>

<body>
    <?php
    if ($title == 'Home') {
    ?>
    <div class="container-fluid px-0" style="
    z-index: -1;
    background-size: auto;
    width: 100%;
    height: auto;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity:0.9;
    ">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand headerLogo" href="<?= base_url() ?>/" rel="noopener"><img
                    src="<?= base_url() ?>/assets/images/logo/logo1.png" alt="logo" width="206" height="130"
                    title="logo" /></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item mr-2">
                        <a class="nav-link anchor" href="<?= base_url() ?>/about" rel="noopener">ABOUT US</a>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link anchor" href="<?= base_url() ?>/career-guide" rel="noopener">Career Guide</a>
                    </li>
                    <!-- <li class="nav-item dropdown mr-2">
                        <a class="nav-link dropdown-toggle anchor" href="#" aria-labelledby="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" rel="noopener">
                            FINANCIAL AID
                        </a>
                        <div class="dropdown-menu anchor" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item anchor" href="financial-aid" rel="noopener">EDUCATIONAL LOAN</a>
                            <a class="dropdown-item anchor" href="scholarship" rel="noopener">SCHOLARSHIP</a>
                        </div>
                    </li> -->
                    <li class="nav-item dropdown mr-2">
                        <a class="nav-link dropdown-toggle anchor" href="#" aria-labelledby="navbarDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            rel="noopener">
                            CONSULTATION
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item anchor" href="<?= base_url() ?>/university-or-college-selection"
                                id="consul" rel="noopener">UNIVERSITY/COLLEGE SELECTION</a>
                            <a class="dropdown-item anchor" href="<?= base_url() ?>/visa-consultation"
                                rel="noopener">VISA
                                CONSULTATION</a>
                            <a class="dropdown-item anchor" href="<?= base_url() ?>/overseas-insurance"
                                rel="noopener">OVERSEASE
                                INSURANCE</a>
                            <hr>
                            <a class="dropdown-item anchor" href="<?= base_url() ?>/financial-aid"
                                rel="noopener">EDUCATIONAL LOAN</a>
                            <a class="dropdown-item anchor" href="<?= base_url() ?>/scholarship"
                                rel="noopener">SCHOLARSHIP</a>
                            <!-- <a class="dropdown-item" href="exam-prepration">EXAM PREPRATION</a>
                            <a class="dropdown-item" href="#">TRAVEL ASSISTANCE</a>
                            <a class="dropdown-item" href="#">INTERNATIONAL TRAINING</a> -->
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">EVENTS</a>
                    </li> -->
                    <li class="nav-item ml-2 mt-1">
                        <?php if ($session->get('token')) :
                                $session = session();
                                $userNameProfile = $session->get('userNameProfile') . " ";
                                $arr = explode(' ', trim($userNameProfile));
                            ?>

                        <!-- profile drop down -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-list-4">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle profile" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="50" height="50" class="rounded-circle">  -->
                                        Hi, <?= $arr[0] ?>
                                        <!-- <p style="height:50; width:50">Hi,</p> -->
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="editProfile">Edit Profile</a>
                                        <a class="dropdown-item" href="<?= base_url() ?>/api/logout">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- profile Button -->
                        <!-- <div class="container">
  <div class="half">
    <label for="profile2" class="profile-dropdown">
      <input type="checkbox" id="profile2">
      <img src="https://cdn0.iconfinder.com/data/icons/avatars-3/512/avatar_hipster_guy-512.png">
      <span>John Doe</span>
      <label for="profile2"><i class="mdi mdi-menu"></i></label>
      <ul>
        <li><a href="#"><i class="mdi mdi-email-outline"></i>Messages</a></li>
        <li><a href="#"><i class="mdi mdi-account"></i>Account</a></li>
        <li><a href="#"><i class="mdi mdi-settings"></i>Settings</a></li>
        <li><a href="#"><i class="mdi mdi-logout"></i>Logout</a></li>
      </ul>
    </label>
  </div>
</div> -->
                        <!-- profile Button -->
                        <?php else : ?>
                        <button id="loginBtn" data-toggle="modal" data-target="#loginForm">SIGN IN</button>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </nav>

        <?php
    } else {
        ?>
        <div class="container-fluid px-0">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand headerLogo" href="<?= base_url() ?>/" rel="noopener"><img
                        src="<?= base_url() ?>/assets/images/logo/logo1.png" alt="logo" width="206" height="130"
                        title="logo" /></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-auto" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-2">
                            <a class="nav-link anchor" href="<?= base_url() ?>/about" rel="noopener">ABOUT US</a>
                        </li>
                        <li class="nav-item mr-2">
                            <a class="nav-link anchor" href="<?= base_url() ?>/career-guide" rel="noopener">Career
                                Guide</a>
                        </li>
                        <!-- <li class="nav-item dropdown mr-2">
                            <a class="nav-link dropdown-toggle anchor" href="#"  role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" rel="noopener">
                                FINANCIAL AID
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item anchor" href="financial-aid" rel="noopener">EDUCATIONAL LOAN</a>
                                <a class="dropdown-item anchor" href="scholarship" rel="noopener">SCHOLARSHIP LOAN</a>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown mr-2">
                            <a class="nav-link dropdown-toggle anchor" href="#" id="navbarDropdownMenuLink"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                rel="noopener">
                                CONSULTATION
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item anchor" href="<?= base_url() ?>/university-or-college-selection"
                                    rel="noopener">UNIVERSITY/COLLEGE
                                    SELECTION</a>
                                <a class="dropdown-item anchor" href="<?= base_url() ?>/visa-consultation"
                                    rel="noopener">VISA
                                    CONSULTATION</a>
                                <a class="dropdown-item anchor" href="<?= base_url() ?>/overseas-insurance"
                                    rel="noopener">OVERSEASE
                                    INSURANCE</a>
                                <hr>
                                <a class="dropdown-item anchor" href="<?= base_url() ?>/financial-aid"
                                    rel="noopener">EDUCATIONAL LOAN</a>
                                <a class="dropdown-item anchor" href="<?= base_url() ?>/scholarship"
                                    rel="noopener">SCHOLARSHIP</a>
                                <!-- <a class="dropdown-item" href="exam-prepration">EXAM PREPRATION</a>
                                <a class="dropdown-item" href="#">TRAVEL ASSISTANCE</a>
                                <a class="dropdown-item" href="#">INTERNATIONAL TRAINING</a> -->
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">EVENTS</a>
                        </li> -->
                        <li class="nav-item ml-2 mt-1">
                            <?php if ($session->get('token')) :
                                    $session = session();
                                    $userNameProfile = $session->get('userNameProfile') . " ";
                                    $arr = explode(' ', trim($userNameProfile));
                                ?>
                            <!-- <a href="" class="btn"
                                style="color:white !important; line-height: 17px;" id="loginBtn" rel="noopener">SIGN
                                OUT</a> -->

                            <!-- profile drop down -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-list-4">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle profile" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="50" height="50" class="rounded-circle">  -->
                                            Hi, <?= $arr[0] ?>
                                            <!-- <p style="height:50; width:50">Hi,</p> -->
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="editProfile">Edit Profile</a>
                                            <a class="dropdown-item" href="<?= base_url() ?>/api/logout">Log Out</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <?php else : ?>
                            <button id="loginBtn" data-toggle="modal" data-target="#loginForm">SIGN IN</button>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </nav>
            <?php
        }
            ?>