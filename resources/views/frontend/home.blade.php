@extends('layouts.user_type.guest')

@section('page_title', __('Rama Self Help Group'))
@section('front-header')
<!-- Demo styles -->
<style>
    .swiper {
        width: 100%;
        height: 100%;
        background: transparent !important;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    @media (max-width: 760px) {
        .swiper-button-next {
            right: 20px;
            transform: rotate(90deg);
        }

        .swiper-button-prev {
            left: 20px;
            transform: rotate(90deg);
        }
    }
</style>
@endsection
@section('content')
<!-- Start main-content -->
<div class="main-content-area">

    @include('frontend.carousel')

    <!-- Section: Service -->
    <section data-tm-bg-color="#f4f4f4">
        <div class="container pt-0 pt-md-100 pb-md-100" data-tm-padding-bottom="210px">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="tm-sc-features-box features-box-current-theme-style1">
                            <div class="feature-box">
                                <div class="thumb">
                                    <img class="w-100" src="{{ asset('front/images/banner/banner-1.jpg') }}" alt="Image">
                                </div>
                                <div class="content">
                                    <div class="feature-info">
                                        <h4 class="title">Training Support</h4>
                                        <p>We provide training support of all kinds to artisans.</p>
                                        <!-- <a class="btn btn-sm btn-current-style1" href="page-about.html">Donate</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="tm-sc-features-box features-box-current-theme-style1">
                            <div class="feature-box style2">
                                <div class="thumb">
                                    <img class="w-100" src="{{ asset('front/images/banner/banner-2.jpg') }}" alt="Image">
                                </div>
                                <div class="content">
                                    <div class="feature-info">
                                        <h4 class="title">Financial Support</h4>
                                        <p>We provide financial support to artisans.</p>
                                        <!-- <a class="btn btn-sm btn-current-style1" href="page-about.html">Donate</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="tm-sc-features-box features-box-current-theme-style1">
                            <div class="feature-box style3">
                                <div class="thumb">
                                    <img class="w-100" src="{{ asset('front/images/banner/banner-3.jpg') }}" alt="Image">
                                </div>
                                <div class="content">
                                    <div class="feature-info">
                                        <h4 class="title">Boosting Morale</h4>
                                        <p>We motivate the artisans to create masterpieces.</p>
                                        <!-- <a class="btn btn-sm btn-current-style1" href="page-about.html">Donate</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-0 pb-90">
            <div class="tm-sc-section-title section-title text-center">
                <div class="row">
                    <div class="col-lg-7 m-auto">
                        <div class="title-wrapper">
                            <h6 class="subtitle text-theme-colored1">Check out our Events</h6>
                            <h2 class="title mb-10">Photo Gallery</h2>
                            <div class="pair-line-bottom-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <!-- Gallery Item Start -->
                        <div class="tm-sc-gallery gallery-style1-basic gallery-current-style1 mb-30">
                            <div class="tm-carousel-item">
                                <div class="tm-gallery">
                                    <div class="tm-gallery-inner">
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="w-100" src="{{ asset('front/images/events/e1.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="tm-gallery-content-wrapper">
                                            <div class="tm-gallery-content">
                                                <div class="tm-gallery-content-inner">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                            <a class="lightgallery-trigger styled-icons-item border-white text-white" data-lightbox="image" href="{{ asset('front/images/events/e1.jpg') }}"><i class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item End -->
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <!-- Gallery Item Start -->
                        <div class="tm-sc-gallery gallery-style1-basic gallery-current-style1 mb-30">
                            <div class="tm-carousel-item">
                                <div class="tm-gallery">
                                    <div class="tm-gallery-inner">
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="w-100" src="{{ asset('front/images/events/e2.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="tm-gallery-content-wrapper">
                                            <div class="tm-gallery-content">
                                                <div class="tm-gallery-content-inner">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                            <a class="lightgallery-trigger styled-icons-item border-white text-white" data-lightbox="image" href="{{ asset('front/images/events/e2.jpg') }}"><i class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item End -->
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <!-- Gallery Item Start -->
                        <div class="tm-sc-gallery gallery-style1-basic gallery-current-style1 mb-30">
                            <div class="tm-carousel-item">
                                <div class="tm-gallery">
                                    <div class="tm-gallery-inner">
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="w-100" src="{{ asset('front/images/events/e3.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="tm-gallery-content-wrapper">
                                            <div class="tm-gallery-content">
                                                <div class="tm-gallery-content-inner">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                            <a class="lightgallery-trigger styled-icons-item border-white text-white" data-lightbox="image" href="{{ asset('front/images/events/e3.jpg') }}"><i class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item End -->
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <!-- Gallery Item Start -->
                        <div class="tm-sc-gallery gallery-style1-basic gallery-current-style1 mb-30">
                            <div class="tm-carousel-item">
                                <div class="tm-gallery">
                                    <div class="tm-gallery-inner">
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="w-100" src="{{ asset('front/images/events/e4.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="tm-gallery-content-wrapper">
                                            <div class="tm-gallery-content">
                                                <div class="tm-gallery-content-inner">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                            <a class="lightgallery-trigger styled-icons-item border-white text-white" data-lightbox="image" href="{{ asset('front/images/events/e4.jpg') }}"><i class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item End -->
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <!-- Gallery Item Start -->
                        <div class="tm-sc-gallery gallery-style1-basic gallery-current-style1 mb-30">
                            <div class="tm-carousel-item">
                                <div class="tm-gallery">
                                    <div class="tm-gallery-inner">
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="w-100" src="{{ asset('front/images/events/e5.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="tm-gallery-content-wrapper">
                                            <div class="tm-gallery-content">
                                                <div class="tm-gallery-content-inner">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                            <a class="lightgallery-trigger styled-icons-item border-white text-white" data-lightbox="image" href="{{ asset('front/images/events/e5.jpg') }}"><i class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item End -->
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <!-- Gallery Item Start -->
                        <div class="tm-sc-gallery gallery-style1-basic gallery-current-style1 mb-30">
                            <div class="tm-carousel-item">
                                <div class="tm-gallery">
                                    <div class="tm-gallery-inner">
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="w-100" src="{{ asset('front/images/events/e6.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="tm-gallery-content-wrapper">
                                            <div class="tm-gallery-content">
                                                <div class="tm-gallery-content-inner">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                            <a class="lightgallery-trigger styled-icons-item border-white text-white" data-lightbox="image" href="{{ asset('front/images/events/e6.jpg') }}"><i class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-floating-objects">
            <span class="floating-object-1 tm-animation-floating z-index--1" data-tm-bg-img="{{ asset('front/images/floating-objects/object-01.png') }}" data-tm-width="485" data-tm-height="529" data-tm-top="0px" data-tm-bottom="auto" data-tm-left="auto" data-tm-right="0" data-tm-opacity="1"></span>
        </div>
    </section>



    <section>
        <div class="swiper container pt-0 pt-md-100 pb-md-100">

            <div class="title-wrappper text-center">
                <h2 class="title mb-10">Our Products</h2>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('front/images/bang/b1.jpg') }}" alt=""> </div>
                <div class="swiper-slide"><img src="{{ asset('front/images/bang/b2.jpg') }}" alt=""> </div>
                <div class="swiper-slide"><img src="{{ asset('front/images/bang/b3.jpg') }}" alt=""> </div>
                <div class="swiper-slide"><img src="{{ asset('front/images/bang/b4.jpg') }}" alt=""> </div>
                <div class="swiper-slide"><img src="{{ asset('front/images/bang/b5.jpg') }}" alt=""> </div>
                <div class="swiper-slide"><img src="{{ asset('front/images/bang/b6.jpg') }}" alt=""> </div>
                <div class="swiper-slide"><img src="{{ asset('front/images/bang/b7.jpg') }}" alt=""> </div>
                <div class="swiper-slide"><img src="{{ asset('front/images/bang/b8.jpg') }}" alt=""> </div>
                <div class="swiper-slide"><img src="{{ asset('front/images/bang/b9.jpg') }}" alt=""> </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
</div>
<!-- end main-content -->

@endsection

@section('front-footer')
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper', {
        slidesPerView: 5,
        loop: true,
        direction: getDirection(),
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            resize: function() {
                swiper.changeDirection(getDirection());
            },
        },
    });

    function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

        return direction;
    }
</script>
@endsection