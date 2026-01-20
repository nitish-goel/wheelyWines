<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/site/images/thumbnail.png') }}" type="image/x-icon">
    
    <title>@yield('title', 'WheelyWines')</title>
    <!-- <link rel="stylesheet" href="{{ asset('build/assets/css/header.css') }}">
    <link href="{{ asset('/build/assets/libs/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" /> -->
    
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
</head>

<body>
    <!-- Header -->
    <div data-global-resource-path="Autorex/templates/partials/header.html">
        <header class="main-header header-style-three">

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
                           
                        </div>
                    </div>
                </div>
                <!--End Header Upper-->
            </div><!-- End Sticky Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
    </div>
   
    
    <div class="body-wrapper page">

    @yield('content')

    </div>
    <!-- Footer -->
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
</body>
</html>
