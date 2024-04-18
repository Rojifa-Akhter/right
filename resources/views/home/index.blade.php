<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    @include('home.css')
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        @include('home.header')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
       @include('home.slider')
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
                                <span class="section-title__tagline">Get to Know Farmer Buddy</span>
                                <h2 class="section-title__title">Farmer Buddy is the Agriculture and Organic farm</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                            <p class="about-one__text-1">We’ve 20 years of agriculture farming experience.</p>
                            <p class="about-one__text-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim dolore
                                veniam.</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>There are many variations of passage of lorem.</p>
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
                                    <a href="about.html" class="thm-btn about-one__btn">About More <i
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
        @include('home.services')
        <!--Services One End-->

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
                            <a href="about.html" class="thm-btn unbeatable-one__btn">Discover More <i
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
                            <p class="healthy-food-one__text">Lorem ipsum dolor sit amet nsectetur cing elit. Suspe
                                ndisse suscipit sagittis leo sit met entum estibu dignissim posuere cubilia durae. Leo
                                sit met entum cubilia crae onec.</p>
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
        @include('home.project')
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
        @include('home.blog')
        <!--Blog One End-->

        <!--Site Footer Start-->
      @include('home.footer')
        <!--Site Footer End-->


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
                    <a href="mailto:needhelp@packageName__.com">needhelp@farmer.com</a>
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



    
</body>


</html>