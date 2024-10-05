<div class="side-panel-body-overlay"></div>

<div id="wrapper" class="clearfix">
    <!-- Header -->
    <header id="header" class="header header-layout-type-header-2rows">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                        <ul class="element contact-info">
                            <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel: 8882190251, 9711023091</li>
                            <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i> ramashg325@gmail.com</li>
                            <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> 38/1299, D.D.A Janta Flat, Madangir, New Delhi</li>
                        </ul>
                    </div>
                    <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                        <div class="element pt-0 pt-lg-10 pb-0">
                            <a href="{{ route('front.e-brochure') }}" class="btn btn-theme-colored2 btn-flat btn-sm ajaxload-popup">E-Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav tm-enable-navbar-hide-on-scroll">
            <div class="header-nav-wrapper navbar-scrolltofixed">
                <div class="menuzord-container header-nav-container">
                    <div class="container position-relative">
                        <div class="row header-nav-col-row">
                            <div class="col-sm-auto align-self-center">
                                <a class="menuzord-brand site-brand" href="{{ route('home') }}">
                                    <img class="logo-default logo-1x" src="{{ asset('front/img/logo.png') }}" alt="Logo">
                                    <img class="logo-default logo-2x retina" src="{{ asset('front/img/logo.png') }}" alt="Logo">
                                    <p>Rama Selfhelp Group</p>
                                </a>
                            </div>
                            <div class="col-sm-auto ms-auto pr-0 align-self-center">
                                <nav id="top-primary-nav" class="menuzord theme-color1" data-effect="fade" data-animation="none" data-align="right">
                                    <ul id="main-nav" class="menuzord-menu">
                                        <li class="active">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <!--<li><a href="#">About Us</a></li>-->
                                        <li><a href="{{ route('front.management') }}">Management</a></li>
                                        <li><a href="{{ route('front.products') }}">Products</a></li>
                                        <li><a href="{{ route('front.events') }}">Events</a></li>
                                        <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-sm-auto align-self-center nav-side-icon-parent">
                                <ul class="list-inline nav-side-icon-list">
                                    <li class="hidden-mobile-mode"><a href="#" id="top-nav-search-btn"><i class="search-icon fa fa-search"></i></a></li>
                                </ul>
                                <div id="top-nav-search-form" class="clearfix">
                                    <form action="#" method="GET">
                                        <input type="text" name="s" value="" placeholder="Type and Press Enter..." autocomplete="off" />
                                    </form>
                                    <a href="#" id="close-search-btn"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row header-nav-clone-col-row d-block d-xl-none">
                            <div class="col-12">
                                <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                                    <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>