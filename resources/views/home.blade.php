<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home One || Farmer Buddy  || Farmer Buddy  HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Farmer Buddy  HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/agrion-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/agrion.css" />
    <link rel="stylesheet" href="assets/css/agrion-responsive.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        @include('inc.nav')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="clearfix main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                        <h2 class="main-slider__title">Agriculture.</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="/about" class="thm-btn main-slider__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                        <h2 class="main-slider__title">Agriculture.</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="/about" class="thm-btn main-slider__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                        <h2 class="main-slider__title">Agriculture.</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-farm"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">the Best Quality <br> Standards</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-agriculture"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">a Smart organic <br> services</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-harvest"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">Natural Healthy <br> prodducts</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-shape-1 float-bob-x">
                <img src="assets/images/shapes/about-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="text-left section-title">
                                <span class="section-title__tagline">Get to Know Farmer Buddy </span>
                                <h2 class="section-title__title">Farmer Buddy is the Agriculture management system</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                            <p class="about-one__text-1">We’ve 20 years of agriculture farming experience.</p>
                            <p class="about-one__text-2">A farmer management service is a platform or system designed to help farmers efficiently manage their operations and resources. It typically includes features such as crop planning, inventory management, financial tracking, equipment maintenance, and workforce scheduling. These services can be provided through software applications or online platforms, allowing farmers to access and update information from anywhere, at any time. By streamlining various aspects of farm management, these services help farmers optimize their productivity, reduce costs, and make better-informed decisions to improve overall profitability.

                            </p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>There are many variations of passage of agricultures.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Available but the majority alteration.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__btn-and-ceo">
                                <div class="about-one__btn-box">
                                    <a href="/about" class="thm-btn about-one__btn">About More <i
                                            class="icon-right-arrow"></i> </a>
                                </div>
                                <div class="about-one__ceo">
                                    <div class="about-one__ceo-img">
                                        <img src="assets/images/resources/about-one-ceo-img.jpg" alt="">
                                    </div>
                                    <div class="about-one__ceo-content">
                                        <h4 class="about-one__ceo-name">Mike Hardson</h4>
                                        <p class="about-one__ceo-title">CEO of Farmer Buddy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img-one">
                                    <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                                </div>
                                <div class="about-one__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="about-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__bg" style="background-image: url(assets/images/shapes/services-one-shape-1.png);">
            </div>
            <div class="container">
                <div class="text-center section-title">
                    <span class="section-title__tagline">What We’re Doing</span>
                    <h2 class="section-title__title">Services We’re offering</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-one-1.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-tractor"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="agriculture-products.html">Agriculture <br>
                                        Products</a></h3>
                                <p class="services-one__text">I was impresed by the farmer buddy  services, not lorem ipsum is
                                    simply free text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-one-2.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-organic-food"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="organic-products.html">Organic
                                        <br> Products</a></h3>
                                <p class="services-one__text">I was impresed by the Farmer Buddy  services, not lorem ipsum is
                                    simply free text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-one-3.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-vegetables"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="fresh-vegetables.html">Fresh
                                        <br> Vegetables</a></h3>
                                <p class="services-one__text">I was impresed by the farmer_buddy  services, not lorem ipsum is
                                    simply free text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-one-4.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-dairy"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="dairy-products.html">Dairy <br> Products</a>
                                </h3>
                                <p class="services-one__text">I was impresed by the farmer_buddy services, not lorem ipsum is
                                    simply free text.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="brand-one__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                                "margin": 0,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":false,
                                "dots":false,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":1
                                    },
                                    "600":{
                                        "items":2
                                    },
                                    "800":{
                                        "items":3
                                    },
                                    "1024":{
                                        "items": 4
                                    },
                                    "1200":{
                                        "items": 5
                                    }
                                }
                            }'>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-1.png" alt="">
                                    </div>
                                </div>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-2.png" alt="">
                                    </div>
                                </div>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-3.png" alt="">
                                    </div>
                                </div>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-4.png" alt="">
                                    </div>
                                </div>
                                <!--Brand One Single-->
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="assets/images/brand/brand-1-5.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Unbeatable One Start-->
        <section class="unbeatable-one">
            <div class="unbeatable-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/unbeatable-one-bg.jpg);"></div>
            <div class="container">
                <div class="text-center unbeatable-one__inner">
                    <div class="unbeatable-one__content">
                        <div class="unbeatable-one__shape-one wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <img src="assets/images/shapes/unbeatable-shape-1.png" alt="" class="float-bob-y">
                        </div>
                        <div class="unbeatable-one__shape-two wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <img src="assets/images/shapes/unbeatable-shape-2.png" alt="" class="float-bob-y">
                        </div>
                        <p class="unbeatable-one__tagline">We’re Selling Healthy Products</p>
                        <h3 class="unbeatable-one__title">Unbeatable Organic and
                            <br> Agriculture Services</h3>
                        <div class="unbeatable-one__btn-box">
                            <a href="/about" class="thm-btn unbeatable-one__btn">Discover More <i
                                    class="icon-right-arrow"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Unbeatable One End-->

        <!--Healthey Food One Start-->
        <section class="healthy-food-one">
            <div class="healthy-food-one__bg float-bob-x"
                style="background-image: url(assets/images/shapes/healthy-food-one-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="healthy-food-one__left">
                            <div class="healthy-food-one__img">
                                <img src="assets/images/resources/healthy-food-one-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="healthy-food-one__right">
                            <div class="text-left section-title">
                                <span class="section-title__tagline">Pure Organic Food</span>
                                <h2 class="section-title__title">Healthy food for your good
                                    growth</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                            <p class="healthy-food-one__text">"Healthy Food for Your Good Growth" is an essential component of an agricultural management system, highlighting the significance of farming nutritious crops for long-term growth and development. Farmers may help customers by prioritizing the cultivation of nutritious, nutrient-rich produce while also optimizing their own farming methods. This strategy entails using modern techniques and technology to improve crop quality and output while simultaneously encouraging ecologically friendly farming practices. Agriculture management systems can help to promote a sustainable agricultural ecosystem that benefits both farmers and customers by implementing effective management tactics and committing to creating nutritious food.</p>
                            <ul class="list-unstyled healthy-food-one__list">
                                <li class="healthy-food-one__single">
                                    <div class="healthy-food-one__content">
                                        <div class="healthy-food-one__icon">
                                            <span class="icon-harvester"></span>
                                        </div>
                                        <p class="healthy-food-one__title">Harvesting</p>
                                    </div>
                                </li>
                                <li class="healthy-food-one__single">
                                    <div class="healthy-food-one__content">
                                        <div class="healthy-food-one__icon">
                                            <span class="icon-agriculture-1"></span>
                                        </div>
                                        <p class="healthy-food-one__title">Growth</p>
                                    </div>
                                </li>
                                <li class="healthy-food-one__single">
                                    <div class="healthy-food-one__content">
                                        <div class="healthy-food-one__icon">
                                            <span class="icon-harvest-1"></span>
                                        </div>
                                        <p class="healthy-food-one__title">Maintenance</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Healthey Food One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-bg"
                style="background-image: url(assets/images/backgrounds/testimonial-one-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__top">
                            <div class="text-center section-title">
                                <span class="section-title__tagline">Our Testimonials</span>
                                <h2 class="section-title__title">What They’re taking about</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__bottom">
                            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 3
                                    }
                                }
                            }'>
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                                amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Sarah Albert</h4>
                                                <p class="testimonial-one__client-sub-title">Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                                amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Kevin Martin</h4>
                                                <p class="testimonial-one__client-sub-title">Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                                amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Aleesha Brown</h4>
                                                <p class="testimonial-one__client-sub-title">Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                                amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-4.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Mike Hardson</h4>
                                                <p class="testimonial-one__client-sub-title">Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                                amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-5.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">Jolie Michale</h4>
                                                <p class="testimonial-one__client-sub-title">Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                                amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.</p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-6.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__client-details-box">
                                            <div class="testimonial-one__client-details">
                                                <h4 class="testimonial-one__client-name">David Smith</h4>
                                                <p class="testimonial-one__client-sub-title">Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__bg" style="background-image: url(assets/images/shapes/counter-one-shape-3.png);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="counter-one__inner">
                            <ul class="list-unstyled counter-one__list">
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-seeds"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="6420" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Agriculture Products</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="200ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-cotton"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="8800" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Projects completed</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-customer"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="9360" data-speed="1500">00</h3>
                                        <p class="counter-one__text">satisfied customers</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-farmer"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="1070" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Expert farmers</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Call One Start-->
        <section class="call-one">
            <div class="container">
                <div class="call-one__inner wow fadeInUp" data-wow-delay="100ms">
                    <div class="call-one__left">
                        <h3 class="call-one__content">Healthy products</h3>
                        <div class="call-one__icon">
                            <span class="icon-phone-ringing"></span>
                        </div>
                    </div>
                    <div class="call-one__right">
                        <div class="call-one__contact-info">
                            <p>Lorem ipsum dolor sit am cons sid</p>
                            <a href="tel:12463330088">+ 1- (246) 333-0088</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Call One End-->

        <!--Project One Start-->
        <section class="project-one">
            <div class="project-one__bg float-bob-y-2"
                style="background-image: url(assets/images/shapes/project-one-shape-1.png);">
            </div>
            <div class="container">
                <div class="text-center section-title">
                    <span class="section-title__tagline">Our Latest Projects</span>
                    <h2 class="section-title__title">Recently completed Projects</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-one-1.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">healthy</span>
                                    <h3 class="project-one__title"><a href="project-details.html">organic
                                            <br> solutions</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-one-2.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">farming</span>
                                    <h3 class="project-one__title"><a href="project-details.html">Harvest
                                            <br> Innovations</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-one-3.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">organic</span>
                                    <h3 class="project-one__title"><a href="project-details.html">Agriculture
                                            <br> farming</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-one-4.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">solution</span>
                                    <h3 class="project-one__title"><a href="project-details.html">the Farming
                                            <br> season</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                </div>
            </div>
        </section>
        <!--Project One End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-one__left">
                            <div class="text-left section-title">
                                <span class="section-title__tagline">Contact Now</span>
                                <h2 class="section-title__title">Get in touch now</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                            <p class="contact-one__text">Lorem ipsum dolor sit amet, adipiscing elit. In hac habitasse
                                platea dictumst. Duis porta, <br> quam ut finibus ultrices.</p>
                            <ul class="list-unstyled contact-one__contact-list">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-phone-alt"></span>
                                    </div>
                                    <div class="content">
                                        <p>Have Question?</p>
                                        <h4><a href="tel:9288009850">Free +92 (8800)-9850</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <div class="content">
                                        <p>Write Email</p>
                                        <h4><a href="mailto:needhelp@company.com">needhelp@company.com</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker"></span>
                                    </div>
                                    <div class="content">
                                        <p>Visit Now</p>
                                        <h4>88 Broklyn Golden Street. USA</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-one__right">
                            <div class="contact-one__bg float-bob-x"
                                style="background-image: url(assets/images/shapes/contact-one-shape-1.png);"></div>
                            <div class="row">
                                <div class="contact-one__form-box">
                                    <form action="https://pixydrops.com/agrionhtml/main-html/assets/inc/sendemail.php"
                                        class="contact-one__form contact-one-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="contact-one__input-box">
                                                    <input type="text" placeholder="Your Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="contact-one__input-box">
                                                    <input type="email" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="contact-one__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                                </div>
                                                <div class="contact-one__btn-box">
                                                    <a href="about.html" class="thm-btn contact-one__btn">Send a Message
                                                        <i class="icon-right-arrow"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="text-center section-title">
                    <span class="section-title__tagline">From the Blog Post</span>
                    <h2 class="section-title__title">Latest News & Articles</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-one-1.jpg" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details.html">Why Agriculture & Eco is for the
                                        Envoirment</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-one-2.jpg" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details.html">Wheat Harvest Organic Gather
                                        nice Moment</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-one-3.jpg" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details.html">Agriculture Matters to the
                                        Future of World</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <!--Cta One Start-->
        <section class="cta-one">
            <div class="cta-one__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/cta-one-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <div class="cta-one__left">
                                <div class="cta-one__icon">
                                    <span class="icon-agriculture-2"></span>
                                </div>
                                <h3 class="cta-one__title">We’re popular leader in agriculture <br> & Organic market.
                                </h3>
                            </div>
                            <div class="cta-one__right">
                                <a href="about.html" class="thm-btn cta-one__btn">Discover More <i
                                        class="icon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Cta One End-->

        <!--Site Footer Start-->
        @include('inc.footer')


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="122"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@agrion.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>




    <!-- template js -->
    <script src="assets/js/agrion.js"></script>
</body>


</html>