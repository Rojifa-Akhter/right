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
        <header class="main-header">
            <div class="main-header__wrapper">
                <div class="main-header__wrapper-inner">
                    <div class="main-header__logo">
                        <a href="{{ url('/') }}"><img src="assets/images/resources/logo-1.png" alt=""></a>
                    </div>
                    <div class="main-header__menu-box">
                        
                        <div class="main-header__menu-box-bottom">
                            <nav class="main-menu">
                                <div class="main-menu__wrapper">
                                    <div class="main-menu__wrapper-inner">
                                        <div class="main-menu__left">
                                            <div class="main-menu__main-menu-box">
                                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                                <ul class="main-menu__list">
                                                    <li class="dropdown megamenu">
                                                        <a href="{{ url('/') }}">Home </a>
                                                        
                                                    </li>
                                                    <li class="current">
                                                        <a href="{{ url('/about') }}">About</a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Services</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="services.html">Services</a>
                                                            </li>
                                                            <li><a href="services-carousel.html">Services Carousel</a>
                                                            </li>
                                                            <li><a href="agriculture-products.html">Agriculture
                                                                    Products</a></li>
                                                            <li><a href="organic-products.html">Organic Products</a>
                                                            </li>
                                                            <li><a href="fresh-vegetables.html">Fresh Vegetables</a>
                                                            </li>
                                                            <li><a href="dairy-products.html">Dairy Products</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Projects</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="project-01.html">Projects 01</a></li>
                                                            <li><a href="project-02.html">Projects 02</a></li>
                                                            <li><a href="project-carousel.html">Project Carousel</a>
                                                            </li>
                                                            <li><a href="project-details.html">Project Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Pages</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="{{ url('expert') }}">Expert</a></li>
                                                            <li><a href="farmers-carousel.html">Farmers Carousel</a>
                                                            </li>
                                                            <li><a href="testimonials.html">Testimonials</a></li>
                                                            <li><a href="testimonials-carousel.html">Testimonial
                                                                    Carousel</a></li>
                                                            <li><a href="faq.html">FAQs</a></li>
                                                            <li><a href="404.html">404 Error</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Blog</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                            <li><a href="blog-details.html">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Shop</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="products.html">Products</a></li>
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="main-menu__right">
                                            <div class="main-menu__search-cart-btn-box">
                                                <div class="main-menu__search-box">
                                                    <a href="#"
                                                        class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                                </div>
                                                <div class="main-menu__cart-box">
                                                    <a href="cart.html" class="main-menu__cart icon-shopping-cart"></a>
                                                </div>
                                                <div class="main-menu__btn-box">
                                                    <a href="contact.html" class="thm-btn main-menu__btn">Get Free Quote
                                                        <i class="icon-right-arrow"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="main-header__phone-contact-box">
                        <div class="main-header__phone-number">
                            <a href="tel:9200886823">+92 (0088) 6823</a>
                        </div>
                        <div class="main-header__call-box">
                            <div class="main-header__call-inner">
                                <div class="main-header__call-icon">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

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
                        <li><a href="index.html">Home</a></li>
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
                                        <p>Lorem ipsum is free do sited</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="fa fa-check"></span>
                                        <p class="icon-box-text">Libro id Edge</p>
                                    </div>
                                    <div class="content">
                                        <p>Lorem ipsum is free do sited</p>
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
                                <div class="about-three__progress-single">
                                    <h4 class="about-three__progress-title">Organic</h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="68%">
                                            <div class="count-text">68%</div>
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
                            <h2 class="section-title__title">pROVIDING HIGH QUALITY
                                PRODUCTS</h2>
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
                            <div class="Provide-One__progress">
                                <div class="Provide-One__progress-box">
                                    <div class="circle-progress"
                                        data-options='{ "value": 0.5,"thickness": 3,"emptyFill": "#36731f","lineCap": "square", "size": 108, "fill": { "color": "#ffcd1e" } }'>
                                    </div><!-- /.circle-progress -->
                                    <span>66%</span>
                                </div><!-- /.about-five__progress-box -->
                                <div class="Provide-One__progress-content">
                                    <h3>Quality <br> products</h3>
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
        <section class="testimonial-three">
            <div class="testimonial-three__shape-1"
                style="background-image: url(assets/images/shapes/testimonial-three-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="testimonial-three__left">
                            <div class="text-left section-title">
                                <span class="section-title__tagline">Our Testimonials</span>
                                <h2 class="section-title__title">What They’re taking about farmer buddy</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonial-three__right">
                            <div class="testimonial-three__carousel thm-owl__carousel owl-theme owl-carousel"
                                data-owl-options='{
                                "items": 3,
                                "margin": 30,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":true,
                                "dots":false,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":1
                                    },
                                    "768":{
                                        "items":2
                                    },
                                    "992":{
                                        "items": 2
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