<!DOCTYPE html>
<html class="no-js" lang="ZXX">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Site Title -->
    <title>Xpeed - Internet Service Provider Template.</title>

    <!-- Fav Icon -->
    <link rel="icon" href="./assets/img/favicon.svg" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css" />
    <!-- Back To Top CSS -->
    <link rel="stylesheet" href="assets/css/backToTop.css" />
    <!-- Uicons -->
    <link rel="stylesheet" href="assets/css/uicons.css" />
    <!-- Icofont -->
    <link rel="stylesheet" href="assets/css/icofont.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<style>
    :root {
        --ISPTemplateV1-primary-color: {{ $theme->primary_color ? $theme->primary_color : '#6900cc' }};
        --ISPTemplateV1-secondary-color: {{ $theme->secondary_color ? $theme->secondary_color : '#1a1a2e' }};
        --ISPTemplateV1-heading-color: {{ $theme->heading_color ? $theme->heading_color : '#171717' }};
        --ISPTemplateV1-sub-heading-color: {{ $theme->sub_headin_color ? $theme->sub_headin_color : '#484858' }};
        --ISPTemplateV1-paragraph-color: {{ $theme->paragraph_color ? $theme->paragraph_color : '#303030' }};
    }
</style>

<body>
    <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    style="margin: auto; background: transparent; display: block" width="100px" height="100px"
                    viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <circle cx="28" cy="75" r="11"
                        fill="{{ $theme->primary_color ? $theme->primary_color : '#6900cc' }}">
                        <animate attributeName="fill-opacity" repeatCount="indefinite" dur="1s" values="0;1;1"
                            keyTimes="0;0.2;1" begin="0s"></animate>
                    </circle>

                    <path d="M28 47A28 28 0 0 1 56 75" fill="none"
                        stroke="{{ $theme->primary_color ? $theme->primary_color : '#6900cc' }}" stroke-width="10">
                        <animate attributeName="stroke-opacity" repeatCount="indefinite" dur="1s" values="0;1;1"
                            keyTimes="0;0.2;1" begin="0.1s"></animate>
                    </path>
                    <path d="M28 25A50 50 0 0 1 78 75" fill="none"
                        stroke="{{ $theme->primary_color ? $theme->primary_color : '#6900cc' }}" stroke-width="10">
                        <animate attributeName="stroke-opacity" repeatCount="indefinite" dur="1s" values="0;1;1"
                            keyTimes="0;0.2;1" begin="0.2s"></animate>
                    </path>
                </svg>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Error Page Area -->
    <section class="notfound-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
                    <div class="notfound-page-inner">
                        <div class="notfound-page-img">
                            <img src="./assets/img/error-img.svg" alt="#" />
                        </div>
                        <div class="notfound-page-btn">
                            <a class="ISPTemplateV1-btn" href="/">Back to home</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Page Section Area -->

    <!-- Back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top end -->

    <!-- Jquery JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/modernizer.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Back To Top JS -->
    <script src="assets/js/backToTop.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/active.js"></script>
</body>

</html>
