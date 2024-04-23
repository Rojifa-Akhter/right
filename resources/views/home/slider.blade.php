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
                                <p class="main-slider__sub-title">We are suggested Natural Products</p>
                                <h2 class="main-slider__title">Agriculture.</h2>
                                <div class="main-slider__btn-box">
                                    <a href="{{ url('about') }}" class="thm-btn main-slider__btn">Discover More <i
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
                                <p class="main-slider__sub-title">We are Suggested Natural Products</p>
                                <h2 class="main-slider__title">Agriculture.</h2>
                                <div class="main-slider__btn-box">
                                    <a href="{{ url('about') }}" class="thm-btn main-slider__btn">Discover More <i
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
                                <p class="main-slider__sub-title">We are Suggested Natural Products</p>
                                <h2 class="main-slider__title">Agriculture.</h2>
                                <div class="main-slider__btn-box">
                                    <a href=href="{{ url('') }}" class="thm-btn main-slider__btn">Discover More <i
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