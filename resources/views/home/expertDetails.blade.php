<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <base href="/public">
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
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Pages</li>
                    </ul>
                    <h2>Expert Details</h2>
                </div>
            </div>
        </section>

        <section class="team-page">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single" style="background: rgb(213, 213, 132)">
                            <div class="team-one__shape-1">
                                <img src="assets/images/shapes/team-one-shape-1.png" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="expertimage/{{ $expert->image }}" alt="">
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i> <span class="team-one__social-name">Facebook</span></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i> <span class="team-one__social-name">Twitter</span></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i> <span class="team-one__social-name">Pinterest</span></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i><span class="team-one__social-name">Instagram</span></a></li>
                                    </ul>
                                    <div class="team-one__icon">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content"">
                                
                                    <h3 class="team-one__title">{{ $expert->name }}</a></h3>
                                    <p style="padding: 10px" class="team-one__subtitle">{{ $expert->speciality }}</p>
                   
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" style="background-color: rgb(112, 112, 92)">
                        
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div>
                                <input type="text" name="name">
                            </div>
                            
                        </div>
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div>
                                <input type="email" name="email">
                            </div>
                            
                        </div>
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">Phone</label>
                            <div>
                                <input type="number" name="phone">
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <label class="col-sm-2 col-form-label">Date</label>
                            <div>
                                <input type="date" name="date">
                            </div>
                        </div>
                        <div style="margin-top: 10px;">
                        <input type="submit" class="btn btn-primary" value="Book Expert">

                        </div>                      
                        
                    </div>
                    
                </div>
            </div>
        </section>




 





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
                <a href="{{ url('home.index') }}" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="122"
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