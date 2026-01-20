<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('/site/images/thumbnail.png') }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta property="og:description" content="">
    <meta property="og:title" content="Home">
    <meta name="twitter:description" content="">
    <meta name="twitter:title" content="Home">

    <!-- <script id="hs-search-input__valid-content-types" type="application/json">
    [
      
        "SITE_PAGE",
      
        "LANDING_PAGE",
      
        "BLOG_POST",
      
        "LISTING_PAGE",
      
        "KNOWLEDGE_ARTICLE",
      
        "HS_CASE_STUDY"
      
    ]
  </script> -->

    <style>
        html {
            scroll-behavior: smooth;
        }
        a.cta_button {
            -moz-box-sizing: content-box !important;
            -webkit-box-sizing: content-box !important;
            box-sizing: content-box !important;
            vertical-align: middle
        }

        .hs-breadcrumb-menu {
            list-style-type: none;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px
        }

        .hs-breadcrumb-menu-item {
            float: left;
            padding: 10px 0px 10px 10px
        }

        .hs-breadcrumb-menu-divider:before {
            content: '›';
            padding-left: 10px
        }

        .hs-featured-image-link {
            border: 0
        }

        .hs-featured-image {
            float: right;
            margin: 0 0 20px 20px;
            max-width: 50%
        }

        @media (max-width: 568px) {
            .hs-featured-image {
                float: none;
                margin: 0;
                width: 100%;
                max-width: 100%
            }
        }

        .hs-screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            overflow: hidden;
            position: absolute !important;
            width: 1px;
        }
        
    </style>

    <link rel="stylesheet" href="{{ asset('/site/css/template_bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_botstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_custom-animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_hover.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_color.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/template_responsive.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Yantramanav:wght@300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('/site/css/module_search_input.min.css') }}">

   
    <title>@yield('title', 'WheelyWines')</title>
    <!-- <link href="{{asset('/css/header.css')}}" rel="stylesheet" />
    <link href="{{ asset('/libs/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" /> -->

</head>

<body>
    <!-- Preloader -->
    <!-- <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">Preloader Close</div>
        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div> -->


    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fa fa-times"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <div id="hs_cos_wrapper_site_search"
                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                    data-hs-cos-general-type="widget" data-hs-cos-type="module">

                    <div class="hs-search-field">

                        <div class="hs-search-field__bar">
                            <form data-hs-do-not-collect="true" action="/hs-search-results">

                                <input type="text" class="hs-search-field__input" name="term" autocomplete="off"
                                    aria-label="Search" placeholder="Search">

                                <input type="hidden" name="type" value="SITE_PAGE">
                                <input type="hidden" name="type" value="BLOG_POST">
                            </form>
                        </div>
                        <ul class="hs-search-field__suggestions"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body-wrapper   hs-content-id-48621120837 hs-site-page page ">

        <div data-global-resource-path="Autorex/templates/partials/header.html">
            <header class="main-header header-style-three">

                <!-- Header Top -->
                <!-- <div class="header-top">
                    <div class="auto-container">
                        <div class="inner-container">
                            <div class="left-column">

                                <div class="text">
                                    <div id="hs_cos_wrapper_topbar_text"
                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-text"
                                        style="" data-hs-cos-general-type="widget" data-hs-cos-type="module"><span
                                            id="hs_cos_wrapper_topbar_text_"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_text"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="text">Some
                                            additional information in one line</span></div>
                                </div>
                            </div>
                            <div class="right-column">
                                <div class="phone-number">
                                    <div id="hs_cos_wrapper_topbar_text2"
                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                        style="" data-hs-cos-general-type="widget" data-hs-cos-type="module"><span
                                            id="hs_cos_wrapper_topbar_text2_"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                            style="" data-hs-cos-general-type="widget"
                                            data-hs-cos-type="rich_text">Schedule Your Appontment Today : <strong>1800
                                                456 7890</strong></span></div>
                                </div>
                                <div class="language-switcher">

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Header Upper -->
                <div class="header-upper style-three">
                    <div class="auto-container">
                        <div class="inner-container">
                            <!--Logo-->
                            <div class="logo-box">
                                <div class="logo">
                                    <div id="hs_cos_wrapper_site_logo"
                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-logo"
                                        style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">

                                        <span id="hs_cos_wrapper_site_logo_hs_logo_widget"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_logo"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="logo"><a
                                                href="{{$url}}"
                                                id="hs-link-site_logo_hs_logo_widget"
                                                style="border-width:0px;border:0px;"><img src="{{asset('/site/images/logo.png')}}"
                                                    class="hs-image-widget " height="50"
                                                    style="height: auto;width:60px;border-width:0px;border:0px;"
                                                    width="180" alt="Company logo" title="Company logo"
                                                    sizes="(max-width: 180px) 100vw, 180px"></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-column">
                                <!--Nav Box-->
                                <div class="nav-outer">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler"><img src="{{asset('/site/images/icon-bar.png')}}" alt=""></div>

                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-md navbar-light">
                                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                            <div id="hs_cos_wrapper_navigation-primary"
                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <div class="first-level-menu collapse navbar-collapse clearfix"
                                                    id="navbarSupportedContent">

                                                    <ul class="navigation submenus hs-menu-children-wrapper level-1"
                                                        aria-hidden="false">

                                                        <li class="no-hs-item-has-children menu-item">
                                                            <a class="menu-link active active-item"
                                                                href="{{$url}}"
                                                                aria-current="page">Home</a>
                                                        </li>

                                                        <li class="no-hs-item-has-children menu-item">
                                                            <a class="navs-link"
                                                                href="#about">About
                                                                Us</a>
                                                        </li>

                                                        <li class="no-hs-item-has-children menu-item">
                                                            <a class="navs-link"
                                                                href="#services">Services</a>
                                                        </li>

                                                        <!-- <li class="no-hs-item-has-children menu-item">
                                                            <a class="navs-link"
                                                                href="#contact">Contact</a>
                                                        </li> -->


                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="search-btn"><button type="button" class="theme-btn search-toggler"><span
                                            class="fa fa-search"></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Header Upper-->

                <!-- Sticky Header  -->
                <div class="sticky-header">
                    <!-- Header Upper -->
                    <div class="header-upper">
                        <div class="auto-container">
                            <div class="inner-container">
                                <!--Logo-->
                                <div class="logo-box">
                                    <div class="logo">
                                        <div id="hs_cos_wrapper_sticky_logo"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-logo"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">

                                            <span id="hs_cos_wrapper_sticky_logo_hs_logo_widget"
                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_logo"
                                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="logo"><a
                                                    href="{{$url}}"
                                                    id="hs-link-sticky_logo_hs_logo_widget"
                                                    style="border-width:0px;border:0px;"><img src="{{asset('/site/images/thumbnail_2.png')}}"
                                                        class="hs-image-widget " height="43"
                                                        style="height: auto;width:45px;border-width:0px;border:0px;"
                                                        width="45" alt="logo-2" title="logo-2"
                                                        sizes="(max-width: 180px) 100vw, 180px"></a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-column">
                                    <!--Nav Box-->
                                    <div class="nav-outer">
                                        <!--Mobile Navigation Toggler-->
                                        <div class="mobile-nav-toggler"><img src="{{asset('/site/images/icon-bar.png')}}" alt=""></div>

                                        <!-- Main Menu -->
                                        <nav class="main-menu navbar-expand-md navbar-light">
                                        </nav>
                                    </div>
                                    <div class="search-btn"><button type="button" class="theme-btn search-toggler"><span
                                                class="fa fa-search"></span></button></div>
                                    <div class="link-btn">
                                        <div id="hs_cos_wrapper_header_button"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module"><span
                                                id="hs_cos_wrapper_header_button_"
                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                style="" data-hs-cos-general-type="widget"
                                                data-hs-cos-type="rich_text"><a href="{{ route('appointment') }}"
                                                    class="theme-btn btn-style-one">Book a Schedule </a></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Header Upper-->
                </div><!-- End Sticky Menu -->

                <!-- Mobile Menu  -->
                <!-- <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <div class="close-btn"><span class="icon flaticon-remove"></span></div>

                    <nav class="menu-box">
                        <div class="nav-logo">
                            <div id="hs_cos_wrapper_nav_logo"
                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-logo"
                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">

                                <span id="hs_cos_wrapper_nav_logo_hs_logo_widget"
                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_logo" style=""
                                    data-hs-cos-general-type="widget" data-hs-cos-type="logo"><a
                                        href="https://themeforest-20102121.hs-sites.com/autorex/home?hsLang=en-us"
                                        id="hs-link-nav_logo_hs_logo_widget" style="border-width:0px;border:0px;"><img
                                            src="images/logo-two.png" class="hs-image-widget " height="43"
                                            style="height: auto;width:180px;border-width:0px;border:0px;" width="180"
                                            alt="logo-two" title="logo-two"
                                            srcset="images/logo-two_2.png 90w, images/logo-two.png 180w, images/logo-two_3.png 270w, images/logo-two_5.png 360w, images/logo-two_7.png 450w, images/logo-two_10.png 540w"
                                            sizes="(max-width: 180px) 100vw, 180px"></a></span>
                            </div>
                        </div>
                        <div class="menu-outer">
                            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                        <!--Social Links-->

                     <!--</nav>
                </div> --><!--End Mobile Menu -->

                <div class="nav-overlay">
                    <div class="cursor"></div>
                    <div class="cursor-follower"></div>
                </div>
            </header>
        </div>




        <main id="main-content" class="body-container-wrapper">
            <div class="container-fluid body-container body-container--home">
                <div class="row-fluid-wrapper">
                    <div class="row-fluid">
                        <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell" data-x="0"
                            data-w="12">

                            <div class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-1"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <section class="banner-section">
                                                <div class="swiper-container banner-slider">
                                                    <div class="swiper-wrapper">

                                                        <!-- Slide Item -->
                                                        <div class="swiper-slide"
                                                            style="background-image: url({{asset('/site/images/image-1.jpg')}});">
                                                            <div class="content-outer">
                                                                <div class="content-box">
                                                                    <div class="inner">
                                                                        <h1>Tuneup Your Car <br> to Next Level</h1>
                                                                        <div class="text"> We believe in providing top
                                                                            quality workmanship and are <br>so confident
                                                                            in our level of service that we back it up
                                                                            <br> with a good quality</div>
                                                                        <div class="link-box">
                                                                            <a href="#services"
                                                                                class="theme-btn btn-style-one"><span>view
                                                                                    all services <i
                                                                                        class="flaticon-right"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Slide Item -->
                                                        <div class="swiper-slide"
                                                            style="background-image: url({{asset('/site/images/image-2.jpg')}});">
                                                            <div class="content-outer">
                                                                <div class="content-box">
                                                                    <div class="inner">
                                                                        <h1>Tuneup Your Car <br> to Next Level</h1>
                                                                        <div class="text"> We believe in providing top
                                                                            quality workmanship and are <br>so confident
                                                                            in our level of service that we back it up
                                                                            <br> with a good quality</div>
                                                                        <div class="link-box">
                                                                            <a href="#services"
                                                                                class="theme-btn btn-style-one"><span>view
                                                                                    all services <i
                                                                                        class="flaticon-right"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Slide Item -->
                                                        <div class="swiper-slide"
                                                            style="background-image: url( {{asset('/site/images/image-3.jpg')}} );">
                                                            <div class="content-outer">
                                                                <div class="content-box">
                                                                    <div class="inner">
                                                                        <h1>Tuneup Your Car <br> to Next Level</h1>
                                                                        <div class="text"> We believe in providing top
                                                                            quality workmanship and are <br>so confident
                                                                            in our level of service that we back it up
                                                                            <br> with a good quality</div>
                                                                        <div class="link-box">
                                                                            <a href="#services"
                                                                                class="theme-btn btn-style-one"><span>view
                                                                                    all services <i
                                                                                        class="flaticon-right"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="banner-slider-nav">
                                                    <div class="banner-slider-control banner-slider-button-prev">
                                                        <span><i class="fa fa-angle-left"></i></span></div>
                                                    <div class="banner-slider-control banner-slider-button-next">
                                                        <span><i class="fa fa-angle-right"></i></span> </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div><!--end widget-span -->
                                </div><!--end row-->
                            </div><!--end row-wrapper -->

                            <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-2"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <section class="about-section" id="about">
                                                <div class="auto-container">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <div class="image-box">

                                                                <img src="{{asset('/site/images/image-1-1.jpg')}}" alt="image-1-1"
                                                                    loading="lazy"
                                                                    style="max-width: 100%; height: auto;">
                                                                <img src="{{asset('/site/images/image-2_1.jpg')}}" alt="image-2"
                                                                    loading="lazy"
                                                                    style="max-width: 100%; height: auto;">

                                                                <div class="year-experience" data-parallax="{" y":=""
                                                                    30}"=""><strong>24</strong> years <br> Experience
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 pl-lg-5">
                                                            <div class="sec-title">
                                                                <h5>Welcome to Our workshop</h5>
                                                                <h2>We have 24 years experience</h2>
                                                                <div class="text">
                                                                    <p>Bring to the table win-win survival strategies to
                                                                        ensure proactive domination. At the end of the
                                                                        day, going forward, a new normal that has
                                                                        evolved from generation X is on the runway
                                                                        heading towards a streamlined cloud solution.
                                                                        User generated content in real-time will have
                                                                        multiple touchpoints for offshoring.</p>
                                                                    <p>Capitalize on low hanging fruit to identify a
                                                                        ballpark value added activity to beta test.
                                                                        Override the digital divide with additional
                                                                        clickthroughs from DevOps. Nanotechnology
                                                                        immersion along the information highway will
                                                                        close the loop on focusing.</p>
                                                                </div>
                                                                <div class="link-btn mt-40">




                                                                    <a href=""
                                                                        class="theme-btn btn-style-one style-two"><span>About
                                                                            Us </span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div><!--end widget-span -->
                                </div><!--end row-->
                            </div><!--end row-wrapper -->

                            <div class="row-fluid-wrapper row-depth-1 row-number-3 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-3"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <!-- Services Section -->
                                            <section class="services-section" id="services">
                                                <div class="auto-container">
                                                    <div class="sec-title style-two">
                                                        <h2>Our Featured Services</h2>
                                                        <div class="text"></div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-4 service-block-one">
                                                            <div class="inner-box hvr-float-shadow">
                                                                <h5>Service and Repairsl</h5>
                                                                <h2>Performance Upgrade</h2>
                                                                <a href="" class="read-more">read more </a>
                                                                <div class="icon"><i class="fas fa-cogs"></i></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 service-block-one">
                                                            <div class="inner-box hvr-float-shadow">
                                                                <h5>Service and Repairsl</h5>
                                                                <h2>Transmission Services</h2>
                                                                <a href="" class="read-more">read more </a>
                                                                <div class="icon"><i class="fas fa-truck-pickup"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 service-block-one">
                                                            <div class="inner-box hvr-float-shadow">
                                                                <h5>Service and Repairsl</h5>
                                                                <h2>Break Repair & Service</h2>
                                                                <a href="" class="read-more">read more </a>
                                                                <div class="icon"><i class="fas fa-toolbox"></i></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 service-block-one">
                                                            <div class="inner-box hvr-float-shadow">
                                                                <h5>Service and Repairsl</h5>
                                                                <h2>Engine Service & Repair</h2>
                                                                <a href="" class="read-more">read more </a>
                                                                <div class="icon"><i class="fas fa-tools"></i></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 service-block-one">
                                                            <div class="inner-box hvr-float-shadow">
                                                                <h5>Service and Repairsl</h5>
                                                                <h2>Tyre & Wheels</h2>
                                                                <a href="" class="read-more">read more </a>
                                                                <div class="icon"><i class="fab fa-accessible-icon"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 service-block-one">
                                                            <div class="inner-box hvr-float-shadow">
                                                                <h5>Service and Repairsl</h5>
                                                                <h2>Denting & Painting</h2>
                                                                <a href="" class="read-more">read more </a>
                                                                <div class="icon"><i class="fas fa-paint-brush"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div><!--end widget-span -->
                                </div><!--end row-->
                            </div><!--end row-wrapper -->

                            <div class="row-fluid-wrapper row-depth-1 row-number-4 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-4"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <section class="features-section">
                                                <div class="auto-container">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="inner-container">
                                                                <h2>Quality Service And <br> Customer Satisfaction !!
                                                                </h2>
                                                                <div class="text">We utilize the most recent symptomatic
                                                                    gear to ensure your vehicle is fixed or adjusted
                                                                    appropriately and in an opportune manner. We are an
                                                                    individual from Professional Auto Service, a first
                                                                    class execution arrange, where free assistance
                                                                    offices share shared objectives of being world-class
                                                                    car administration focuses.</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="image">
                                                                <img src="{{asset('/site/images/image-3-1.jpg')}}" alt="image-3-1"
                                                                    loading="lazy"
                                                                    style="max-width: 100%; height: auto;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div><!--end widget-span -->
                                </div><!--end row-->
                            </div><!--end row-wrapper -->

                            <div class="row-fluid-wrapper row-depth-1 row-number-5 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-5"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <section class="why-choose-us">
                                                <div class="auto-container">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="sec-title style-two">
                                                                <h2>Why Choose Us</h2>
                                                                <div class="text">Bring to the table win-win survival
                                                                    strategies to ensure proactive domination. At the
                                                                    end of the day, going forward, a new normal that has
                                                                    evolved from generation heading towards.</div>
                                                            </div>

                                                            <div class="icon-box">
                                                                <div class="icon"><i class="fas fa-users-cog"></i></div>
                                                                <h4>Certified Expert Mechanics</h4>
                                                            </div>

                                                            <div class="icon-box">
                                                                <div class="icon"><i class="fas fa-tags"></i></div>
                                                                <h4>Fast And Quality Service</h4>
                                                            </div>

                                                            <div class="icon-box">
                                                                <div class="icon"><i class="fas fa-tools"></i></div>
                                                                <h4>Best Prices in Town</h4>
                                                            </div>

                                                            <div class="icon-box">
                                                                <div class="icon"><i class="fas fa-trophy"></i></div>
                                                                <h4>Awarded Workshop</h4>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="sec-title style-two">
                                                                <h2>Addtional Services</h2>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="image">
                                                                        <img src="{{asset('/site/images/image-4.jpg')}}" alt="image-4"
                                                                            loading="lazy"
                                                                            style="max-width: 100%; height: auto;">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <ul class="list">

                                                                        <li>General Auto Repair & Maintenance</li>

                                                                        <li>Transmission Repair & Replacement</li>

                                                                        <li>Tire Repair and Replacement</li>

                                                                        <li>State Emissions Inspection</li>

                                                                        <li>Break Job / Break Services</li>

                                                                        <li>Electrical Diagnostics</li>

                                                                        <li>Fuel System Repairs</li>

                                                                        <li>Starting and Charging Repair</li>

                                                                        <li>Steering and Suspension Work</li>

                                                                        <li>Emission Repair Facility</li>

                                                                        <li>Wheel Alignment</li>

                                                                        <li>Computer Diagaonstic Testing</li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div><!--end widget-span -->
                                </div><!--end row-->
                            </div><!--end row-wrapper -->

                            <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-6"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <section class="video-section">
                                                <div data-parallax="{" y":="" 50}"="" class="sec-bg"
                                                    style="background-image: url({{asset('/site/images/bg-1.jpg')}});"></div>
                                                <div class="auto-container">
                                                    <h5>Working since 1992</h5>
                                                    <h2>We are leader <br> in Car Mechanical Work</h2>
                                                    <div class="video-box">
                                                        <div class="video-btn"><a
                                                                href="{type=EXTERNAL,%20content_id=null,%20href=https://www.youtube.com/watch?v=nfP5N9Yc72A&t=28s,%20href_with_scheme=https://www.youtube.com/watch?v=nfP5N9Yc72A&t=28s}"
                                                                class="overlay-link lightbox-image video-fancybox ripple"><i
                                                                    class="fa fa-play"></i></a></div>
                                                        <div class="text">Watch intro video <br> about us</div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div><!--end widget-span -->
                                </div><!--end row-->
                            </div><!--end row-wrapper -->

                            <div class="row-fluid-wrapper row-depth-1 row-number-7 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-7"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <section class="team-section">
                                                <div class="auto-container">
                                                    <div class="top-content">
                                                        <div class="row m-0 justify-content-between">
                                                            <div class="sec-title">
                                                                <h2>Our Team</h2>
                                                            </div>
                                                            <div class="text">
                                                                Bring to the table win-win survival strategies to ensure
                                                                proactive domination. At the end of the day, going
                                                                forward, a <br>new normal that has evolved from
                                                                generation X is on the runway heading towards a
                                                                streamlined cloud solution. User <br>generated content
                                                                in real-time will have multiple touchpoints for
                                                                offshoring.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-3 col-md-6 team-block-one">
                                                            <div class="inner-box wow fadeInUp"
                                                                data-wow-duration="1500ms">
                                                                <div class="image">

                                                                    <img src="{{asset('/site/images/team-1.jpg')}}" alt="" loading="">

                                                                    <div class="overlay-box">
                                                                        <ul class="social-links">

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-facebook-f"></span></a>
                                                                            </li>

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-twitter"></span></a>
                                                                            </li>

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-google-plus-g"></span></a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <h4>Michale Joe</h4>
                                                                    <div class="designation">Main Supervisor</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 team-block-one">
                                                            <div class="inner-box wow fadeInUp"
                                                                data-wow-duration="1500ms">
                                                                <div class="image">
                                                                    <img src="{{asset('/site/images/team-2.jpg')}}" alt="" loading="">

                                                                    <div class="overlay-box">
                                                                        <ul class="social-links">

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-facebook-f"></span></a>
                                                                            </li>

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-twitter"></span></a>
                                                                            </li>

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-google-plus-g"></span></a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <h4>Michale Joe</h4>
                                                                    <div class="designation">Main Supervisor</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 team-block-one">
                                                            <div class="inner-box wow fadeInUp"
                                                                data-wow-duration="1500ms">
                                                                <div class="image">
                                                                    <img src="{{asset('/site/images/team-3.jpg')}}" alt="" loading="">

                                                                    <div class="overlay-box">
                                                                        <ul class="social-links">

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-facebook-f"></span></a>
                                                                            </li>

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-twitter"></span></a>
                                                                            </li>

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-google-plus-g"></span></a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <h4>Michale Joe</h4>
                                                                    <div class="designation">Main Supervisor</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 team-block-one">
                                                            <div class="inner-box wow fadeInUp"
                                                                data-wow-duration="1500ms">
                                                                <div class="image">

                                                                    <img src="{{asset('/site/images/team-4.jpg')}}" alt="" loading="">

                                                                    <div class="overlay-box">
                                                                        <ul class="social-links">

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-facebook-f"></span></a>
                                                                            </li>

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-twitter"></span></a>
                                                                            </li>

                                                                            <li>
                                                                                <a href=""><span
                                                                                        class="fab fa-google-plus-g"></span></a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <h4>Michale Joe</h4>
                                                                    <div class="designation">Main Supervisor</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div><!--end widget-span -->
                                </div><!--end row-->
                            </div><!--end row-wrapper -->


                            <div class="row-fluid-wrapper row-depth-1 row-number-9 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-9"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <div class="estimate-section">
                                                <div class="auto-container">
                                                    <div class="wrapper-box">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4">
                                                                <div class="content">
                                                                    <h2>Car Repair Estimator</h2>
                                                                    <div class="text">Get a estimate according your car
                                                                        condition</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="estimate-form">
                                                                    <span id="hs_cos_wrapper_dnd_area-module-9_"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_form"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="form">
                                                                        <h3 id="hs_cos_wrapper_form_47867913_title"
                                                                            class="hs_cos_wrapper form-title"
                                                                            data-hs-cos-general-type="widget_field"
                                                                            data-hs-cos-type="text"></h3>

                                                                        <div id="hs_form_target_form_47867913"></div>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!--end widget-span -->
                                </div><!--end row-->
                            </div><!--end row-wrapper -->

                            <div class="row-fluid-wrapper row-depth-1 row-number-10 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-10"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <section class="facts-section">
                                                <div class="auto-container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <h2><span>100%</span> Satisfaction <br> Guarantee</h2>
                                                        </div>

                                                        <div class="col-lg-9">

                                                            <div class="row">

                                                                <div class="col-md-4">
                                                                    <div class="facts-block">
                                                                        <div class="icon"><i
                                                                                class="fas fa-lightbulb"></i></div>
                                                                        <h4>Quality Support</h4>
                                                                        <div class="text">Our Repair Services offers
                                                                            quality help programs for any vehicles that
                                                                            permit them to consistently.</div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="facts-block">
                                                                        <div class="icon"><i class="fas fa-car-alt"></i>
                                                                        </div>
                                                                        <h4>All Car Make</h4>
                                                                        <div class="text">Our Repair Services offers
                                                                            quality help programs for any vehicles that
                                                                            permit them to consistently.</div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="facts-block">
                                                                        <div class="icon"><i class="fas fa-tools"></i>
                                                                        </div>
                                                                        <h4>Variety Service</h4>
                                                                        <div class="text">Our Repair Services offers
                                                                            quality help programs for any vehicles that
                                                                            permit them to consistently.</div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div><!--end widget-span -->
                                </div><!--end row-->
                            </div><!--end row-wrapper -->

                            <!-- <div class="row-fluid-wrapper row-depth-1 row-number-11 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-11"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <section class="blog-section">
                                                <div class="auto-container">
                                                    <div class="top-content">
                                                        <div class="m-0 row justify-content-between align-items-center">
                                                            <div class="sec-title style-two">
                                                                <h2>Latest Blog & Articles</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-4 news-block-one">
                                                            <div class="inner-box">
                                                                <div class="image"><a
                                                                        href="//themeforest-20102121.hs-sites.com/blog/tips-for-tyre-maintenance-in-summer-1?hsLang=en-us"><img
                                                                            src="{{asset('/site/images/news-9-1.jpg')}}" alt=""></a></div>
                                                                <div class="lower-content">
                                                                    <ul class="meta-info">
                                                                        <li>June 6 2021</li>

                                                                        <li><a
                                                                                href="//themeforest-20102121.hs-sites.com/tag/repairing?hsLang=en-us">repairing</a>
                                                                        </li>

                                                                    </ul>
                                                                    <h3><a
                                                                            href="//themeforest-20102121.hs-sites.com/blog/tips-for-tyre-maintenance-in-summer-1?hsLang=en-us">Tips
                                                                            for Tyre Maintenance in Summer</a></h3>
                                                                    <div class="link-btn"><a
                                                                            href="//themeforest-20102121.hs-sites.com/blog/tips-for-tyre-maintenance-in-summer-1?hsLang=en-us"
                                                                            class="theme-btn"><i
                                                                                class="fa fa-angle-right"></i></a></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 news-block-one">
                                                            <div class="inner-box">
                                                                <div class="image"><a
                                                                        href="//themeforest-20102121.hs-sites.com/blog/what-soap-should-use-for-washing-1?hsLang=en-us"><img
                                                                            src="{{asset('/site/images/news-8-1.jpg')}}" alt=""></a></div>
                                                                <div class="lower-content">
                                                                    <ul class="meta-info">
                                                                        <li>June 6 2021</li>

                                                                        <li><a
                                                                                href="//themeforest-20102121.hs-sites.com/tag/repairing?hsLang=en-us">repairing</a>
                                                                        </li>

                                                                    </ul>
                                                                    <h3><a
                                                                            href="//themeforest-20102121.hs-sites.com/blog/what-soap-should-use-for-washing-1?hsLang=en-us">What
                                                                            Soap Should Use for Washing</a></h3>
                                                                    <div class="link-btn"><a
                                                                            href="//themeforest-20102121.hs-sites.com/blog/what-soap-should-use-for-washing-1?hsLang=en-us"
                                                                            class="theme-btn"><i
                                                                                class="fa fa-angle-right"></i></a></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 news-block-one">
                                                            <div class="inner-box">
                                                                <div class="image"><a
                                                                        href="//themeforest-20102121.hs-sites.com/blog/what-soap-should-use-for-washing?hsLang=en-us"><img
                                                                            src="{{asset('/site/images/news-7-1.jpg')}}" alt=""></a></div>
                                                                <div class="lower-content">
                                                                    <ul class="meta-info">
                                                                        <li>June 6 2021</li>

                                                                        <li><a
                                                                                href="//themeforest-20102121.hs-sites.com/tag/repairing?hsLang=en-us">repairing</a>
                                                                        </li>

                                                                    </ul>
                                                                    <h3><a
                                                                            href="//themeforest-20102121.hs-sites.com/blog/what-soap-should-use-for-washing?hsLang=en-us">What
                                                                            Soap Should Use for Washing</a></h3>
                                                                    <div class="link-btn"><a
                                                                            href="//themeforest-20102121.hs-sites.com/blog/what-soap-should-use-for-washing?hsLang=en-us"
                                                                            class="theme-btn"><i
                                                                                class="fa fa-angle-right"></i></a></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div><!--end widget-span -->
                                <!--</div><!--end row-->
                            <!--</div> --> <!--end row-wrapper -->

                            <!-- <div class="row-fluid-wrapper row-depth-1 row-number-12 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style=""
                                        data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_dnd_area-module-12"
                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                            style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            <section class="cta-section">
                                                <div class="auto-container">
                                                    <div class="wrapper-box">
                                                        <div class="left-column">
                                                            <h3>CTA Section</h3>
                                                            <div class="text">Your Automotive Repair & Maintenance
                                                                Service Specialist</div>
                                                        </div>
                                                        <div class="right-column">
                                                            <div class="phone">1800.456.7890</div>
                                                            <div class="btn">

                                                                <a href=""
                                                                    class="theme-btn btn-style-one"><span>Appointment</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div>--><!--end widget-span -->
                              <!--  </div>--><!--end row-->
                           <!-- </div>--><!--end row-wrapper -->

                        </div><!--end widget-span -->
                    </div>
                </div>
            </div>
        </main>

        <div data-global-resource-path="Autorex/templates/partials/footer.html">
            <footer class="main-footer">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="auto-container">
                        <div class="widgets-inner-container">
                            <div class="row clearfix">
                                <!--Footer Column-->
                                <div class="footer-column col-lg-4">
                                    <div class="widget widget_about">
                                        <div class="logo">
                                            <div id="hs_cos_wrapper_future_logo"
                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-logo"
                                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">

                                                <span id="hs_cos_wrapper_future_logo_hs_logo_widget"
                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_logo"
                                                    style="" data-hs-cos-general-type="widget"
                                                    data-hs-cos-type="logo"><a
                                                        href="{{$url}}"
                                                        id="hs-link-future_logo_hs_logo_widget"
                                                        style="border-width:0px;border:0px;"><img
                                                            src="{{asset('/site/images/thumbnail_2.png')}}" class="hs-image-widget "
                                                            height="50"
                                                            style="height: auto;width:80px;border-width:0px;border:0px;"
                                                            width="180" alt="Company logo" title="Company logo"
                                                            sizes="(max-width: 180px) 100vw, 180px"></a></span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <div id="hs_cos_wrapper_about_text"
                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <span id="hs_cos_wrapper_about_text_"
                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                    style="" data-hs-cos-general-type="widget"
                                                    data-hs-cos-type="rich_text">Capitalize on low hanging fruit to
                                                    identify a ballpark value added activity to beta test. Override the
                                                    digital divide additional clickthroughs.</span>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="widget widget_links">
                                                <div class="widget_title">
                                                    <div id="hs_cos_wrapper_footer_widget_title"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-header"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module">

                                                        <span id="hs_cos_wrapper_footer_widget_title_"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_header"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="header">
                                                            <h4>Usefull Links</h4>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="widget-content">
                                                    <ul class="list">
                                                        <div id="hs_cos_wrapper_footer_menu_one"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-simple_menu"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module"><span
                                                                id="hs_cos_wrapper_footer_menu_one_"
                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_simple_menu"
                                                                style="" data-hs-cos-general-type="widget"
                                                                data-hs-cos-type="simple_menu">
                                                                <div id="hs_menu_wrapper_footer_menu_one_"
                                                                    class="hs-menu-wrapper active-branch flyouts hs-menu-flow-vertical"
                                                                    role="navigation" data-sitemap-name=""
                                                                    data-menu-id="" aria-label="Navigation Menu">
                                                                    <ul role="menu">
                                                                        <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#" role="menuitem"
                                                                                target="_self">Home</a></li>
                                                                        <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#" role="menuitem"
                                                                                target="_self">About Us</a></li>
                                                                        <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#" role="menuitem"
                                                                                target="_self">Appointment</a></li>
                                                                        <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#" role="menuitem"
                                                                                target="_self">Testimonials</a></li>
                                                                        <!-- <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#contact" role="menuitem"
                                                                                target="_self">Contact Us</a></li> -->
                                                                    </ul>
                                                                </div>
                                                            </span></div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="widget widget_links">
                                                <div class="widget_title">
                                                    <div id="hs_cos_wrapper_footer_widget_title-2"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-header"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module">

                                                        <span id="hs_cos_wrapper_footer_widget_title-2_"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_header"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="header">
                                                            <h4>Our Services</h4>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="widget-content">
                                                    <ul class="list">
                                                        <div id="hs_cos_wrapper_footer_menu_two"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-simple_menu"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module"><span
                                                                id="hs_cos_wrapper_footer_menu_two_"
                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_simple_menu"
                                                                style="" data-hs-cos-general-type="widget"
                                                                data-hs-cos-type="simple_menu">
                                                                <div id="hs_menu_wrapper_footer_menu_two_"
                                                                    class="hs-menu-wrapper active-branch flyouts hs-menu-flow-vertical"
                                                                    role="navigation" data-sitemap-name=""
                                                                    data-menu-id="" aria-label="Navigation Menu">
                                                                    <ul role="menu">
                                                                        <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#" role="menuitem"
                                                                                target="_self">Performance Upgrade</a>
                                                                        </li>
                                                                        <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#" role="menuitem"
                                                                                target="_self">Transmission Service</a>
                                                                        </li>
                                                                        <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#" role="menuitem"
                                                                                target="_self">Break Repair &
                                                                                Service</a></li>
                                                                        <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#" role="menuitem"
                                                                                target="_self">Engine Service &
                                                                                Repair</a></li>
                                                                        <li class="hs-menu-item hs-menu-depth-1"
                                                                            role="none"><a href="#" role="menuitem"
                                                                                target="_self">Trye & Wheels</a></li>
                                                                    </ul>
                                                                </div>
                                                            </span></div>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-4">
                                    <div class="widget widget_newsletter">
                                        <div class="widget_title">
                                            <div id="hs_cos_wrapper_footer_widget_title-3"
                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-header"
                                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">

                                                <span id="hs_cos_wrapper_footer_widget_title-3_"
                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_header"
                                                    style="" data-hs-cos-general-type="widget"
                                                    data-hs-cos-type="header">
                                                    <h4>Newsletter</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <div id="hs_cos_wrapper_newsletter_text"
                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <span id="hs_cos_wrapper_newsletter_text_"
                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                    style="" data-hs-cos-general-type="widget"
                                                    data-hs-cos-type="rich_text">Get latest updates and offers.</span>
                                            </div>
                                        </div>
                                        <div class="newsletter-form">
                                            <div id="hs_cos_wrapper_sub_form2"
                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-email_simple_subscription"
                                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <span id="hs_cos_wrapper_sub_form2_email_simple_subscription"
                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_email_simple_subscription"
                                                    style="" data-hs-cos-general-type="widget"
                                                    data-hs-cos-type="email_simple_subscription">
                                                    <div class="page-header">
                                                        <h1>Email Unsubscribe </h1>

                                                    </div>

                                                    <h3 style="font-weight: normal">There was a problem loading the
                                                        page. Try using the same link from a more recent email, or
                                                        contact the company to update your subscription preferences.
                                                    </h3>
                                                </span></div>
                                        </div>
                                        <ul class="social-links">
                                            <div id="hs_cos_wrapper_footer_social_media"
                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <!-- <li>
                                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                                </li> -->

                                                <li>
                                                    <a href=""><i class="fab fa-twitter"></i></a>
                                                </li>

                                                <!-- <li>
                                                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                                                </li> -->

                                                <li>
                                                    <a href=""><i class="fab fa-instagram"></i></a>
                                                </li>

                                                <!-- <li>
                                                    <a href=""><i class="fab fa-skype"></i></a>
                                                </li> -->
                                            </div>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Footer Bottom-->
                <div class="auto-container">
                    <div class="footer-bottom">
                        <div class="copyright-text">
                            <div id="hs_cos_wrapper_footer_copyright"
                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module"><span
                                    id="hs_cos_wrapper_footer_copyright_"
                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style=""
                                    data-hs-cos-general-type="widget" data-hs-cos-type="rich_text">Copyright © 2026 All
                                    Rights Reserved</span></div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!-- HubSpot performance collection script -->
    <script defer="" src="{{asset('/site/js/embed.js')}}"></script> 
    <script>
        var hsVars = hsVars || {}; hsVars['language'] = 'en-us';
    </script>

    <script src="{{asset('/site/js/project.js')}}"></script>
    <script src="{{asset('/site/js/module_search_input.min.js')}}"></script>
    <script src="{{asset('/site/js/template_jquery.min.js')}}"></script>
    <script src="{{asset('/site/js/template_popper.min.js')}}"></script>
    <script src="{{asset('/site/js/template_bootstrap.min.js')}}"></script>
    <script src="{{asset('/site/js/template_owl.min.js')}}"></script>
    <script src="{{asset('/site/js/template_parallax-scroll.min.js')}}"></script>
    <script src="{{asset('/site/js/template_jquery.countdown.min.js')}}"></script>
    <script src="{{asset('/site/js/template_respond.min.js')}}"></script>
    <script src="{{asset('/site/js/template_jquery-ui.min.js')}}"></script>
    <script src="{{asset('/site/js/template_jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('/site/js/template_wow.min.js')}}"></script>
    <script src="{{asset('/site/js/template_appear.min.js')}}"></script>
    <script src="{{asset('/site/js/template_swiper.min.js')}}"></script>
    <script src="{{asset('/site/js/template_TweenMax.min.js')}}"></script>
    <script src="{{asset('/site/js/template_script.min.js')}}"></script>

    <!--[if lte IE 8]>
    <script charset="utf-8" src="https://js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->

    <script data-hs-allowed="true" src="{{asset('/site/js/v2.js')}}"></script>





    <script type="text/javascript" id="hs-script-loader" async="" defer="" src="assets('build/assets/site/js/20102121.js')"></script>
    <!-- End of HubSpot Analytics Code -->


  
    <script defer="" src="assets('build/assets/site/js/index.js')"></script>
</body>

</html>