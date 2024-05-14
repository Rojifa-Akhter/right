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
                                          <li class="dropdown current megamenu">
                                              <a href=" {{ '/' }}">Home </a>
                                          </li>
                                          <li>
                                              <a href="{{ url('about') }}">About</a>
                                          </li>
                                          <li class="dropdown">
                                              <a>Services</a>
                                              <ul class="shadow-box">
                                                  <li><a href="{{ url('recommendCrop') }}">Services</a>
                                                  </li>
                                                  
                                                  <li><a href="{{ url('weather') }}">Weather Information</a></li>
                                              </ul>
                                          </li>
        
                                          <li class="dropdown">
                                              <a href="{{ url('expert') }}">Expert</a>
                                              
                                          </li>
                                          <li class="dropdown">
                                              <a href="{{ url('blog') }}">Blog</a>
                                          </li>
                               
                                          <li>
                                              <a href="{{ url('contact') }}">Contact</a>
                                          </li>

                                          

                                        @if (Route::has('login'))
                
                                            @auth
                                                <li>
                                                <x-app-layout>
                                                    
                                                </x-app-layout>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="{{ url('myBlog') }}">My Post</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="{{ url('createBlog') }}">Create Blog</a>
                                                </li>
                                                @else
                                                <li>
                                                    <a href="{{ url('login') }}">Login</a>
                                                </li>
                                            
                                                @if (Route::has('register'))
                                                <li>
                                                    <a  href="{{ url('register') }}">Register</a>
                                                </li>
                                                @endif
                                            @endauth
                                        
                                        @endif
                                        
                                      </ul>
                                  </div>
                              </div>
                              <div class="main-menu__right">
                                  <div class="main-menu__search-cart-btn-box">
                                      <div class="main-menu__search-box">
                                          <a href="#"
                                              class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                      </div>
                                      {{-- <div class="main-menu__cart-box">
                                          <a href="cart.html" class="main-menu__cart icon-shopping-cart"></a>
                                      </div> --}}
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
              {{-- <div class="main-header__call-box">
                  <div class="main-header__call-inner">
                      <div class="main-header__call-icon">
                          <span class="fas fa-phone"></span>
                      </div>
                  </div>
              </div> --}}
          </div>
      </div>
  </div>
</header>