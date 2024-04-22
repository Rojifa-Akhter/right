<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Blog</title>
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
                        <li>Blog</li>
                    </ul>
                    <h2>Blog posts</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start-->
        <section class="blog-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="/postimage/{{ $blog->image }}" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <i class="fas fa-user-circle"></i>{{ $blog->name }}</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title">{{ $blog->title }}</a></h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Page End-->

        <!--Site Footer Start-->
        @include('home.footer')
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <!-- Mobile Nav Content -->
    </div>

    <div class="search-popup">
        <!-- Search Popup Content -->
    </div>

</body>

</html>
