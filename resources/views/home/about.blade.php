<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li>About</li>
                    </ul>
                    <h2>About us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Three Start-->
        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-three__left">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-three__left-single">
                                        <div class="about-three__left-img">
                                            <img src="assets/images/resources/about-three-img-1.jpg" alt="">
                                        </div>
                                        <div class="about-three__left-img about-three__left-img--2">
                                            <img src="assets/images/resources/about-three-img-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-three__left-single">
                                        <div class="about-three__left-img">
                                            <img src="assets/images/resources/about-three-img-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-three__right">
                            <div class="text-left section-title">
                                <span class="section-title__tagline">Get to Know Farmer Buddy</span>
                                <h2 class="section-title__title">We are the skilled, superior farming leaders at Farmer Buddy.</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                            <p class="about-three__text-1">There are many variations of passages of available but the
                                majority have suffered alteration in some form, by injected humou or words even slightly
                                believable.</p>
                            <ul class="list-unstyled about-three__points">
                                <li>
                                    <div class="icon-box">
                                        <span class="fa fa-check"></span>
                                        <p class="icon-box-text">Magnis Dis Nascet</p>
                                    </div>
                                    <div class="content">
                                        <p>Farmers will be able to use effective methods for pest prevention</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="fa fa-check"></span>
                                        <p class="icon-box-text">Libro id Edge</p>
                                    </div>
                                    <div class="content">
                                        <p>Farmers will be able to use a Precise amount of fertilizer </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-three__progress">
                                <div class="about-three__progress-single">
                                    <h4 class="about-three__progress-title">Agriculture</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="91%">
                                            <div class="count-text">91%</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Three End-->

        <!--Brand One Start-->
        
        <!--Brand One End-->

        <!--Provide One Start-->
        <section class="Provide-One">
            <div class="Provide-One__wrap">
                <div class="Provide-One__left">
                    <div class="Provide-One__bg"
                        style="background-image: url(assets/images/backgrounds/provide-one-bg.jpg);"></div>
                    <div class="provide-one__sopport">
                        <div class="provide-one__support-icon">
                            <span class="icon-harvester"></span>
                        </div>
                        <p class="provide-one__support-text">We’re here to support
                            you every step of the way.</p>
                    </div>
                </div>
                <div class="Provide-One__right">
                    <div class="provide-one__bg-shape float-bob-x">
                        <img src="assets/images/backgrounds/provide-one-shape-1.png" alt="">
                    </div>
                    <div class="Provide-One__content">
                        <div class="text-left section-title">
                            <span class="section-title__tagline">Our Beneifts</span>
                            <h2 class="section-title__title">PROVIDING SUPPORTIVE SERVICES
                                </h2>
                            <div class="section-title__icon">
                                <img src="assets/images/icon/section-title-icon-1.png" alt="">
                            </div>
                        </div>
                        <p class="Provide-One__text">There cursus massa at urnaaculis estie. Sed aliquamellus vitae
                            ultrs condmentum leo massa mollis estiegittis miristum nulla sed medy fringilla vitae.</p>
                        <div class="Provide-One__progress-wrap">
                            <div class="Provide-One__progress">
                                <div class="Provide-One__progress-box">
                                    <div class="circle-progress"
                                        data-options='{ "value": 0.9,"thickness": 3,"emptyFill": "#36731f","lineCap": "square", "size": 108, "fill": { "color": "#ffcd1e" } }'>
                                    </div><!-- /.circle-progress -->
                                    <span>90%</span>
                                </div>
                                <div class="Provide-One__progress-content">
                                    <h3>acurate <br> suggestions</h3>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Provide One End-->

        <!--Team One Start-->
        <section class="team-one team-two">
            <div class="container">
                <div class="text-center section-title">
                    <span class="section-title__tagline">Team Members</span>
                    <h2 class="section-title__title">Meet our Experts</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__shape-1">
                                <img src="assets/images/shapes/team-one-shape-1.png" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/team/team-1-1.jpg" alt="">
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i> <span
                                                    class="team-one__social-name">Facebook</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i> <span
                                                    class="team-one__social-name">Twitter</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i> <span
                                                    class="team-one__social-name">Pinterest</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i><span
                                                    class="team-one__social-name">Instagram</span></a>
                                        </li>
                                    </ul>
                                    <div class="team-one__icon">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ url('expert') }}">Aleesha Brown</a></h3>
                                <p class="team-one__subtitle">Senior Expert</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__shape-1">
                                <img src="assets/images/shapes/team-one-shape-1.png" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/team/team-1-2.jpg" alt="">
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i> <span
                                                    class="team-one__social-name">Facebook</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i> <span
                                                    class="team-one__social-name">Twitter</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i> <span
                                                    class="team-one__social-name">Pinterest</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i><span
                                                    class="team-one__social-name">Instagram</span></a>
                                        </li>
                                    </ul>
                                    <div class="team-one__icon">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ url('expert') }}">Kevin Martin</a></h3>
                                <p class="team-one__subtitle">Senior Expert</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__shape-1">
                                <img src="assets/images/shapes/team-one-shape-1.png" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/team/team-1-3.jpg" alt="">
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i> <span
                                                    class="team-one__social-name">Facebook</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i> <span
                                                    class="team-one__social-name">Twitter</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i> <span
                                                    class="team-one__social-name">Pinterest</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i><span
                                                    class="team-one__social-name">Instagram</span></a>
                                        </li>
                                    </ul>
                                    <div class="team-one__icon">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ url('expert') }}">Sarah Albert</a></h3>
                                <p class="team-one__subtitle">Senior Expert</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Testimonial Three Start-->
        
        <!--Testimonial Three End-->

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
                                <h3 class="cta-one__title">We’re popular leader in agriculture <br> & local farmers.
                                </h3>
                            </div>
                            <div class="cta-one__right">
                                <a href="{{ url('about') }}" class="thm-btn cta-one__btn">Discover More <i
                                        class="icon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Cta One End-->

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
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            



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