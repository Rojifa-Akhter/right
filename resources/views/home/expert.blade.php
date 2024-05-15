<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Expert Page</title>
    @include('home.css')
</head>
<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>

    <div class="page-wrapper">
        @include('home.header')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Pages</li>
                    </ul>
                    <h2>Our Experts</h2>
                </div>
            </div>
        </section>

        <section class="team-page">
            <div class="container">
                <div class="row">
                    @foreach ($expert as $expert)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__shape-1">
                                <img src="assets/images/shapes/team-one-shape-1.png" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="expertimage/{{ $expert->image }}" alt="">
                                   
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ url('createExpert') }}">{{ $expert->name }}</a></h3>
                                <p style="padding: 10px" class="team-one__subtitle">{{ $expert->speciality }}</p>

                                <a class="btn btn-primary" href="{{ url('expertDetails',$expert->id) }}">Expert Details</a>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('home.footer')
    </div>

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="143" alt="" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li><i class="fa fa-envelope"></i><a href="mailto:needhelp@packageName__.com">needhelp@agrion.com</a></li>
                <li><i class="fa fa-phone-alt"></i><a href="tel:666-888-0000">666 888 0000</a></li>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn"><i class="icon-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</body>
</html>
