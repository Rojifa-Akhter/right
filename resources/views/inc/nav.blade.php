<header class="main-header">
    <div class="main-header__wrapper">
        <div class="main-header__wrapper-inner">
            <div class="main-header__logo">
                <a href=" "><img src="assets/images/resources/logo-1.png" alt=""></a>
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
                                            <li class="dropdown current megamenu">
                                                <a href=" ">Home </a>
                                                
                                            </li>
                                            <li>
                                                <a href="/about">About</a>
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
                                                <a href="#">Expert</a>
                                                <ul class="shadow-box">
                                                    <li><a href="project-01.html">Hire</a></li>
                                                    <li><a href="project-02.html">Chat</a></li>
                                                    
                                                    </li>
                                                    <li><a href="project-details.html">Project Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Pages</a>
                                                <ul class="shadow-box">
                                                    <li><a href="farmers.html">Farmers</a></li>
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
                                           
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                            <li>
                                                @if (Route::has('login'))
                                                <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                                                    @auth
                                                    <li>
                                                        <x-app-layout>

                                                        </x-app-layout>
                                                    </li>
                                                    @else
                                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Login</a>

                                                        @if (Route::has('register'))
                                                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a></li>
                                                        @endif
                                                    @endauth
                                                </div>        
                                                @endif
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