<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content="Foxy Web Themes"/>
    <title>Civil services</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- Bootstrap Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
    <!-- Themify Icon -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- Font Awsome Icon -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!--  Owl Carousel Styles -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- YT Player -->
    <link rel="stylesheet" href="{{asset('css/jquery.mb.YTPlayer.min.css')}}">
    <!-- Site Styles -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
</head>
<body data-nav-offset="58">

<!-- Page Loader -->
<div class="page-loader"></div>

<!-- Mobile Menu -->
<div class="mobile-menu-wrapper d-lg-none">
    <a href="#" class="mobile-menu-toggle"><span class="toggle-lines"></span></a>
    <div class="mobile-logo-wrap mt-5 mb-4 text-center">
        <a href="#" class="mobile-logo-link"><img class="img-fluid" src="images/sticky-logo.png" alt="Ultrauniq"/></a>
    </div>
</div>

<!-- Overlay Search Form -->
<div class="search-overlay-wrap">
    <a href="#" class="abs-trigger-right overlay-search-close overlay-search-trigger"><span
            class="ti-close text-light"></span></a>
    <div class="search-overlay-inner">
        <form class="search-form">
            <div class="input-group">
                <input type="text" name="s" class="form-control" placeholder="Search for..">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit"><span class="ti-search"></span></button>
                </div>
            </div>
        </form>
    </div>
</div><!-- .search-overlay-wrap -->

<!-- Secondary Bar -->
<div class="secondary-bar-wrap bg-dark">
    <a href="#" class="abs-trigger-right secondary-bar-close secondary-menu-trigger"><span
            class="ti-close text-light"></span></a>
    <div class="secondary-bar-inner mt-5 p-3">
        <div class="widget-wrap post-list-widget">
            <h2 class="widget-title">Recent Posts</h2>
            <div class="widget-content">
                <div class="post-list-wrapper">
                    <div class="media post-list mb-4">
                        <a href="#" class="post-img-link mr-3">
                            <img src="images/post/mini/1.jpg" class="img-fluid rounded"
                                 alt="Best Living Room Decorating Ideas & Designs"/>
                        </a>
                        <div class="media-body">
                            <h6 class="post-titles text-white">Best Living Room Decorating Ideas & Designs</h6>
                            <ul class="nav post-meta">
                                <li class="post-date"><span class="ti-calendar mr-2 text-white"></span><a href="#"
                                                                                                          class="text-white">Spe
                                        4, 2020</a></li>
                            </ul>
                        </div><!-- .media-body -->
                    </div><!-- .post-list -->
                    <div class="media post-list mb-4">
                        <a href="#" class="post-img-link mr-3">
                            <img src="images/post/mini/2.jpg" class="img-fluid rounded"
                                 alt="Food with Partially Hydrogenated Oil"/>
                        </a>
                        <div class="media-body">
                            <h6 class="post-titles text-white">Food with Partially Hydrogenated Oil</h6>
                            <ul class="nav post-meta">
                                <li class="post-date"><span class="ti-calendar mr-2 text-white"></span><a href="#"
                                                                                                          class="text-white">Spe
                                        4, 2020</a></li>
                            </ul>
                        </div><!-- .media-body -->
                    </div><!-- .post-list -->
                    <div class="media post-list mb-4">
                        <a href="#" class="post-img-link mr-3">
                            <img src="images/post/mini/3.jpg" class="img-fluid rounded"
                                 alt="France celebrate the birth of the French Republic"/>
                        </a>
                        <div class="media-body">
                            <h6 class="post-titles text-white">France celebrate the birth of the French Republic</h6>
                            <ul class="nav post-meta">
                                <li class="post-date"><span class="ti-calendar mr-2 text-white"></span><a href="#"
                                                                                                          class="text-white">Spe
                                        4, 2020</a></li>
                            </ul>
                        </div><!-- .media-body -->
                    </div><!-- .post-list -->
                    <div class="media post-list mb-4">
                        <a href="#" class="post-img-link mr-3">
                            <img src="images/post/mini/4.jpg" class="img-fluid rounded"
                                 alt="While many trends build on current styles and ideas"/>
                        </a>
                        <div class="media-body">
                            <h6 class="post-titles text-white">While many trends build on current styles and ideas</h6>
                            <ul class="nav post-meta">
                                <li class="post-date"><span class="ti-calendar mr-2 text-white"></span><a href="#"
                                                                                                          class="text-white">Spe
                                        4, 2020</a></li>
                            </ul>
                        </div><!-- .media-body -->
                    </div><!-- .post-list -->
                </div><!-- .post-list-wrapper -->
            </div><!--.widget-content -->
        </div><!--.widget-wrap -->
    </div>
</div><!-- .secondary-bar-wrap -->

<!-- Sigin/Register Form -->
<div class="user-login-form-wrap">
    <a href="#" class="signin-form-trigger abs-trigger-right"><span class="ti-close text-light"></span></a>
    <div class="user-login-inner">
        <div class="user-login-wrap rounded active">
            <h5 class="text-center mt-2 mb-3">Login Form</h5>
            <form class="signin-form mb-3" action="{{route('Staff.Login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <a href="#" class="trigger-register-form">Register</a> / <a href="#" class="trigger-forget-form">Forget
                        password?</a>
                </div>
                <input type="submit" name="logsubmit" class="btn btn-primary mt-2" value="Signin">
            </form>
        </div>
        <div class="forget-password-wrap rounded">
            <a href="#" class="trigger-login-form abs-trigger-right"><span class="ti-close"></span></a>
            <h5 class="text-center mt-2 mb-3">Forget Password Form</h5>
            <form class="forget-password-form mb-3">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="useremail">
                </div>
                <input type="submit" name="forgetsubmit" class="btn btn-primary mt-2" value="Submit">
            </form>
        </div>
        <div class="user-registration-wrap rounded">
            <a href="#" class="trigger-login-form abs-trigger-right"><span class="ti-close"></span></a>
            <h5 class="text-center mt-2 mb-3">Registration Form</h5>
            <form class="register-form mb-3" method="post" action="{{route('Staff.Register')}}">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username">
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="confirmpassword">
                    @error('confirmpassword')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <input type="submit" name="registersubmit" class="btn btn-primary mt-2" value="Register">
            </form>
        </div>
    </div><!-- .user-login-inner -->
</div><!-- .user-login-form-wrap -->

<!--Header-->
<header class="masterhead">

    <!-- Topbar for Desktop | Top Sliding Bar for Tablet/Mobile -->
    <div class="set-mobile-top-sliding">
        <a href="#" class="mobile-top-sliding d-lg-none"><span class="ti-arrow-down"></span></a>
        <div class="header-topbar dark-style-bar pt-2 pb-2 p-lg-0">
            <div class="container">
                <div class="header-parts-wrap">
                    <div class="header-parts-nav d-lg-flex">
                        <div class="header-left d-lg-flex">
                            <div class="topbar-info-wrap">
                                <ul class="nav justify-content-center">
                                    <li><span class="welome-text">Welcome to Ultrauniq</span></li>
                                </ul>
                            </div>
                        </div><!-- .header-left -->
                        <div class="header-right d-lg-flex ml-lg-auto">
                            <div class="topbar-info-wrap">
                                <ul class="nav justify-content-center">
                                    <li><a href="malto:info@ultrauniq.com"><span class="mail-text"><i
                                                    class="ti-mail"></i> info@ultrauniq.com</span></a></li>
                                </ul>
                            </div>
                            <div class="social-icons-wrap align-self-center">
                                <ul class="nav social-icons primary-social-icons justify-content-center">
                                    <li><a href="#" class="facebook-icon"><span
                                                class="ti-facebook small-icon"></span></a></li>
                                    <li><a href="#" class="twitter-icon"><span class="ti-twitter small-icon"></span></a>
                                    </li>
                                    <li><a href="#" class="instagram-icon"><span class="ti-instagram small-icon"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .header-right -->
                    </div><!-- .header-parts-nav -->
                </div><!-- .header-parts-wrap -->
            </div><!-- .container -->
        </div><!-- .header-topbar -->
    </div><!-- .set-header-sticky -->

    <!-- Logobar for Desktop -->
    <div class="header-logobar border-bottom d-none d-lg-flex">
        <div class="container">
            <div class="header-parts-wrap">
                <div class="header-parts-nav d-flex">
                    <div class="header-left mr-auto align-self-center">
                        <!-- Secondary Menu Triger -->
                        <div class="secondary-trigger-wrap">
                            <a href="#" class="secondary-menu-trigger"><span class="toggle-lines"></span></a>
                        </div>
                    </div><!-- .header-left -->
                    <div class="header-center justify-content-center d-flex">
                        <!-- Site Logo -->
                        <div class="logo-wrap">
                            <a href="index.html" class="site-logo default-logo"><img class="img-fluid" alt="Ultrauniq"
                                                                                     src="images/logo.png"></a>
                        </div>
                    </div><!-- .header-center -->
                    <div class="header-right d-flex align-self-center ml-auto">
                        <!-- Overlay Search Trigger -->
                        <div class="search-trigger-wrap">
                            <a href="#" class="search-trigger overlay-search-trigger"><span
                                    class="ti-search"></span></a>
                        </div>
                    </div><!-- .header-right -->
                </div><!-- .header-parts-nav -->
            </div><!-- .header-parts-wrap -->
        </div><!-- .container -->
    </div><!-- .header-logobar -->

    <!-- Set Header Sticky  -->
    <div class="set-header-sticky">
        <!-- Navbar for Desktop -->
        <div class="header-navbar d-none d-lg-flex">
            <div class="container">
                <div class="header-parts-wrap">
                    <div class="header-parts-nav d-flex">
                        <div class="header-left d-flex">
                            <!-- Logo Wrapper -->
                            <div class="logo-wrap m-0">
                                <a href="index.html" class="site-logo sticky-logo"><img class="img-fluid mr-3"
                                                                                        alt="Ultrauniq"
                                                                                        src="images/sticky-logo.png"></a>
                            </div>
                            <!-- Site Menu -->
                            <ul class="nav site-menu d-none d-lg-flex">
                                <li class="nav-item active"><a href="index.html">Home</a></li>
                                <li class="nav-item menu-item-has-children">
                                    <a href="aboutus.html">Pages</a>
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"><a href="aboutus.html">About Us</a></li>
                                        <li class="nav-item"><a href="404.html">404</a></li>
                                        <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                        <li class="nav-item"><a href="portfolio-single.html">Portfolio Single</a></li>
                                        <li class="nav-item"><a href="team-single.html">Team Single</a></li>
                                        <li class="nav-item"><a href="testimonial-single.html">Testimonial Single</a>
                                        </li>
                                        <li class="nav-item"><a href="event-single.html">Event Single</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item mega-menu-parent menu-item-has-children">
                                    <a href="#">Features</a>
                                    <ul class="nav sub-menu mega-menu mega-cols-4">
                                        <li class="nav-item">
                                            <a href="#" class="mega-menu-title">Headers</a>
                                            <ul class="nav flex-column mega-menu-child">
                                                <li class="nav-item"><a href="accordion.html">Header - Default</a></li>
                                                <li class="nav-item"><a href="team.html">Header - Logobar</a></li>
                                                <li class="nav-item"><a href="testimonial.html">Header - Without
                                                        Sticky</a></li>
                                                <li class="nav-item"><a href="portfolio.html">Header - With Multi
                                                        Sticky</a></li>
                                                <li class="nav-item"><a href="price.html">Header - Multi Elements</a>
                                                </li>
                                                <li class="nav-item"><a href="image-grid.html">Header - Secondary
                                                        Bar</a></li>
                                                <li class="nav-item"><a href="button.html">Header - Bg Particles</a>
                                                </li>
                                                <li class="nav-item"><a href="tab.html">Header - Login</a></li>
                                                <li class="nav-item"><a href="progress.html">Header - Absolute</a></li>
                                                <li class="nav-item"><a href="social-icons.html">Header - Bg Video</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="mega-menu-title">Shortcodes</a>
                                            <ul class="nav flex-column mega-menu-child">
                                                <li class="nav-item"><a href="featurebox.html">Feature Box<span
                                                            class="menu-ribbon ribbon-trend">Trend</span></a></li>
                                                <li class="nav-item"><a href="counter.html">Counter Appear</a></li>
                                                <li class="nav-item"><a href="tab.html">Section Title</a></li>
                                                <li class="nav-item"><a href="button.html">Button</a></li>
                                                <li class="nav-item"><a href="contact.html">Contact Info</a></li>
                                                <li class="nav-item"><a href="social-icons.html">Social Icons</a></li>
                                                <li class="nav-item"><a href="progress.html">Progress Bar</a></li>
                                                <li class="nav-item"><a href="carousel.html">Carousel<span
                                                            class="menu-ribbon ribbon-hot">Hot</span></a></li>
                                                <li class="nav-item"><a href="image-grid.html">Image Grid</a></li>
                                                <li class="nav-item"><a href="accordion.html">Accordion</a></li>
                                                <li class="nav-item"><a href="day-counter.html">Day Counter</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="mega-menu-title">Shortcodes</a>
                                            <ul class="nav flex-column mega-menu-child">
                                                <li class="nav-item"><a href="tab.html">Tab with Icon</a></li>
                                                <li class="nav-item"><a href="timeline.html">Timeline<span
                                                            class="menu-ribbon ribbon-new">New</span></a></li>
                                                <li class="nav-item"><a href="icon-list.html">Icon List</a></li>
                                                <li class="nav-item"><a href="google-map.html">Google Map</a></li>
                                                <li class="nav-item"><a href="blog.html">Post Grid</a></li>
                                                <li class="nav-item"><a href="portfolio.html">Portfolio</a></li>
                                                <li class="nav-item"><a href="team.html">Team</a></li>
                                                <li class="nav-item"><a href="testimonial.html">Testimonial</a></li>
                                                <li class="nav-item"><a href="price.html">Price</a></li>
                                                <li class="nav-item"><a href="event.html">Events</a></li>
                                                <li class="nav-item"><a href="circle-progress.html">Circle Progress</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="mega-menu-title">Footer</a>
                                            <ul class="nav flex-column mega-menu-child">
                                                <li class="nav-item"><a href="accordion.html">Footer - Default</a></li>
                                                <li class="nav-item"><a href="event.html">Footer - Classic</a></li>
                                                <li class="nav-item"><a href="testimonial.html">Footer - Light</a></li>
                                                <li class="nav-item"><a href="image-grid.html">Footer - With Middle</a>
                                                </li>
                                                <li class="nav-item"><a href="portfolio.html">Footer - Simple</a></li>
                                                <li class="nav-item menu-widget">
                                                    <a href="https://themeforest.net/item/ultrauniq-multipurpose-html5-template/29126787"
                                                       class="pt-4" target="_blank">
                                                        <span class="display-4">UltrauniQ<br>Buy Now</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item menu-item-has-children">
                                    <a href="#">Demo</a>
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"><a href="index.html">Agency</a></li>
                                        <li class="nav-item"><a href="demo-education.html">Education</a></li>
                                        <li class="nav-item"><a href="demo-medical.html">Medical</a></li>
                                        <li class="nav-item"><a href="demo-construction.html">Construction</a></li>
                                        <li class="nav-item"><a href="demo-spa.html">Spa</a></li>
                                        <li class="nav-item"><a href="demo-spa.html">Charity<span
                                                    class="menu-ribbon ribbon-trend">Coming Soon</span></a></li>
                                        <li class="nav-item"><a href="demo-spa.html">Fashion<span
                                                    class="menu-ribbon ribbon-trend">Coming Soon</span></a></li>
                                        <li class="nav-item"><a href="demo-spa.html">Bakery<span
                                                    class="menu-ribbon ribbon-trend">Coming Soon</span></a></li>
                                        <li class="nav-item"><a href="demo-spa.html">Corporate<span
                                                    class="menu-ribbon ribbon-trend">Coming Soon</span></a></li>
                                        <li class="nav-item"><a href="demo-spa.html">Freelancer<span
                                                    class="menu-ribbon ribbon-trend">Coming Soon</span></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item menu-item-has-children">
                                    <a href="#">One Pages</a>
                                    <ul class="nav flex-column sub-menu menu-position-right">
                                        <li class="nav-item"><a href="one-page-agency.html">Agency</a></li>
                                        <li class="nav-item"><a href="one-page-education.html">Education</a></li>
                                        <li class="nav-item"><a href="one-page-medical.html">Medical</a></li>
                                        <li class="nav-item"><a href="one-page-construction.html">Construction</a></li>
                                        <li class="nav-item"><a href="one-page-spa.html">Spa</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="contactus.html">Contact</a></li>
                            </ul>
                        </div><!-- .header-left -->
                        <div class="header-right d-flex align-self-center ml-auto">
                            <!-- Signin Form Trigger -->
                            <ul class="nav">
                                <li class="login-dropdown menu-item-has-children">

                                    @auth('staff')
                                            <a href="{{route('Staff.logout')}}" ><span class="ti-user mr-1"></span>
                                                Logout</a>
                                    @elseauth('user')
                                        <a href="{{route('User.logout')}}" ><span class="ti-user mr-1"></span>
                                            Logout</a>
                                    @else
                                            <a href="{{route('Staff.loginPage')}}" ><span class="ti-user mr-1"></span>
                                                Staff Signin</a>
                                        <a href="{{route('User.loginPage')}}" ><span class="ti-user mr-1"></span>
                                                User Signin</a>
                                        @endauth


                                </li>
                            </ul>
                        </div><!-- .header-right -->
                    </div><!-- .header-parts-nav -->
                </div><!-- .header-parts-wrap -->
            </div><!-- .container -->
        </div><!-- .header-navbar -->

        <!-- Mobile Header for Tablet/Mobile -->
        <div class="mobile-header d-flex d-lg-none">
            <div class="container">
                <div class="header-parts-wrap">
                    <div class="header-parts-nav d-flex">
                        <div class="header-left d-flex">
                            <div class="logo-wrap">
                                <a href="index.html" class="site-logo default-logo"><img class="img-fluid"
                                                                                         alt="Ultrauniq"
                                                                                         src="images/logo.png"></a>
                                <a href="index.html" class="site-logo sticky-logo"><img class="img-fluid"
                                                                                        alt="Ultrauniq"
                                                                                        src="images/sticky-logo.png"></a>
                            </div>
                        </div> <!-- .header-left -->
                        <div class="header-right d-flex ml-auto">
                            <a href="#" class="mobile-menu-toggle"><span class="toggle-lines"></span></a>
                            <div class="search-trigger-wrap">
                                <a href="#" class="search-trigger overlay-search-trigger"><span
                                        class="ti-search"></span></a>
                            </div>
                        </div><!-- .header-right -->
                    </div><!-- .header-parts-nav -->
                </div><!-- .header-parts-wrap -->
            </div><!-- .container -->
        </div><!-- .mobile-header -->
    </div><!-- .header-sticky-part -->


</header><!--Header-->

<main>
    @yield('content')
</main>



<footer class="section section-bg-dark">

    <div class="widgets-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-lg-0 mb-4">
                    <div class="widget-wrap about-widget">
                        <h2 class="widget-title">About Us</h2>
                        <div class="widget-content">
                            <p>Build a website as impressive as your ultrauniq with this attractive and professional
                                ultrauniq company template.</p>
                        </div><!--.widget-content -->
                    </div><!--.widget-wrap -->
                    <div class="widget-wrap company-links-widget mailchimp-widget">
                        <div class="widget-content pt-2">
                            <div class="mailchimp-wrapper">
                                <form class="subscribe-form" action="inc/function.php">
                                    <p class="subscribe-status-msg hide"></p>
                                    <div class="input-group form-group mb-3 input-with-btn">
                                        <input type="text" name="mcemail" class="form-control" placeholder="Email id">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><span
                                                    class="ti-arrow-right"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- .mailchimp-wrapper -->
                        </div><!--.widget-content -->
                    </div><!--.widget-wrap -->
                </div><!-- .col -->
                <div class="col-md-6 col-lg-3 mb-lg-0 mb-4">
                    <div class="widget-wrap company-links-widget">
                        <h2 class="widget-title">Company Links</h2>
                        <div class="widget-content">
                            <ul class="nav flex-column nav-light-to-theme icon-nav">
                                <li class="nav-item"><a href="#" class="nav-link">Terms and conditions</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Privacy policy</a></li>
                                <li class="nav-item"><a href="{{route('Staff.loginPage')}}" class="nav-link">Signin/Register</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Our Services</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Contact us</a></li>
                            </ul>
                        </div><!--.widget-content -->
                    </div><!--.widget-wrap -->
                </div><!-- .col -->
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <div class="widget-wrap contact-info-widget">
                        <h2 class="widget-title">Contact Us</h2>
                        <div class="widget-content">
                            <ul class="nav flex-column nav-light-to-theme">
                                <li class="nav-item"><span class="ti-location-pin contact-icons"></span><span>3257, Snow St, Keilor, VIC 3036</span>
                                </li>
                                <li class="nav-item"><span class="ti-mobile contact-icons"></span><a href="#"
                                                                                                     class="nav-link"><span>+02 123456</span></a>
                                </li>
                                <li class="nav-item"><span class="ti-email contact-icons"></span><a
                                        href="mailto:wpthemedevelopers@gmail.com" class="nav-link email-id">info@ultrauniq.com
                                    </a></li>
                                <li class="nav-item"><span
                                        class="ti-skype contact-icons"></span><span>wpthemedevelopers</span></li>
                            </ul>
                        </div><!--.widget-content -->
                    </div><!--.widget-wrap -->
                </div><!-- .col -->
                <div class="col-md-6 col-lg-3">
                    <div class="widget-wrap post-tags-widget">
                        <h2 class="widget-title">Post Tags</h2>
                        <div class="widget-content">
                            <ul class="nav post-tags-list">
                                <li><a href="#" class="post-tags btn btn-outline-light">Travel</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-light">Fun</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-light">Enertainment</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-light">Movies</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-light">Education</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-light">Free Fire</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-light">Tourists</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-light">Agency</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-light">Popluar Places</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-light">Spa</a></li>
                            </ul>
                        </div><!--.widget-content -->
                    </div><!--.widget-wrap -->
                </div><!--.col -->
            </div>
        </div>
    </div>


    <div class="footer-middle pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-auto mb-2 mb-md-0 text-center text-md-left">
                    <div class="logo-wrap">
                        <a href="index.html" class="site-logo"><img class="img-fluid" src="images/white-logo.png"
                                                                    alt="Ultrauniq"></a>
                    </div>
                </div>
                <div class="col-md align-self-center mt-3 mt-md-0">
                    <div class="footer-menu-wrap">
                        <ul class="nav social-icons social-icons own-social-icons justify-content-center justify-content-md-end">
                            <li class="nav-item"><a href="#" class="facebook-icon"><span
                                        class="ti-facebook small-icon"></span></a></li>
                            <li class="nav-item"><a href="#" class="twitter-icon"><span
                                        class="ti-twitter small-icon"></span></a></li>
                            <li class="nav-item"><a href="#" class="instagram-icon"><span
                                        class="ti-instagram small-icon"></span></a></li>
                            <li class="nav-item"><a href="#" class="pinterest-icon"><span
                                        class="ti-pinterest small-icon"></span></a></li>
                            <li class="nav-item"><a href="#" class="linkedin-icon"><span
                                        class="ti-linkedin small-icon"></span></a></li>
                            <li class="nav-item"><a href="#" class="flickr-icon"><span
                                        class="ti-flickr small-icon"></span></a></li>
                            <li class="nav-item"><a href="#" class="vimeo-icon"><span
                                        class="ti-vimeo small-icon"></span></a></li>
                            <li class="nav-item"><a href="#" class="youtube-icon"><span
                                        class="ti-youtube small-icon"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <p class="text-white text-muted mt-3 text-center">&copy; Copyright 2020. All Rights Reserved by <a
                            href="https://wpthemedevelopers.com/" class="text-muted">Foxywebthemes</a></p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top" id="back-to-top"><i class="ti-angle-up"></i></a>

</footer><!--footer-->

<!-- jQuery Library -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery Appear -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- jQuery Appear -->
<script src="{{asset('js/jquery.appear.js')}}"></script>
<!-- Maginific Popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Parallax -->
<script src="{{asset('js/parallaxie.js')}}"></script>
<!-- Circle Progress -->
<script src="{{asset('js/jquery.circle.progress.min.js')}}"></script>
<!-- Day Counter -->
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<!-- Isotope Masonry -->
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<!-- Bootstrap Validator -->
<script src="{{asset('js/validator.min.js')}}"></script>
<!-- Foxy Floating Parallax -->
<script src="{{asset('js/foxy-float-parallax.js')}}"></script>
<!-- Foxy Element Parallax -->
<script src="{{asset('js/foxy-element-parallax.js')}}"></script>
<!-- Particles and Particles Config App -->
<script src="{{asset('js/particles.min.js')}}"></script>
<script src="{{asset('js/particles.app.js')}}"></script>
<!-- YT Player -->
<script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- Theme Scripts -->
<script src="{{asset('js/theme.js')}}"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtkY02zM_XV3XtSzJbNwJdiA2iuNmP_bI&callback=init_ultrauniq_gmap"></script>

</body>
</html>
