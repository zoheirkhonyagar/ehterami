@extends('main.master.index')

@section('content')

    <section class="section section-layout-1">
        <div class="section-layout-main">
            <div class="swiper-container swiper-slider swiper-slider_style-2" data-autoplay="5000" data-simulate-touch="true" data-slide-effect="fade">
                <div class="swiper-wrapper">
                    @foreach($sliders as $slider)
                        <div class="swiper-slide" data-slide-bg="{{ asset('uploads') . '/' . $slider->image }}">
                            <div class="swiper-slide-caption">
                                <div class="shell">
                                    <div class="range">
                                        <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                            @if($slider->title)
                                                <h1 data-caption-animate="fadeInUpSmall">{{ $slider->title }}</h1>
                                            @endif
                                            @if($slider->description)
                                                <div class="object-decorated">
                                                    <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">{{ $slider->description }}</h4>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
        </div>
        <div class="section-layout-aside">
            @foreach($slogans as $slogan)
                <div class="section-layout-aside__item">
                    <a class="thumb-modern" href="#"><img class="thumb-modern__image" src="{{ asset('uploads') . '/' . $slogan->image }}" alt="" width="538" height="200">
                        <div class="thumb-modern__caption">
                            <p class="thumb-modern__title">{{ $slogan->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Experience since 1999-->
    <section class="section section-md bg-white">
        <div class="bg-gray-4">
            <div class="shell-fluid shell-condensed">
                <div class="range range-30 range-md-reverse">
                    <div class="cell-sm-12 cell-md-6">
                        <div class="section-md shell-fluid-cell">
                            <div class="box-centered box-width-1 box-custom">
                                <h2><span>تجربه</span><span class="object-decorated object-decorated_inline" style="max-width: 125px;"><span class="heading-5">از سال 2006</span></span></h2>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان</p>
                                <div class="group-md group-middle button-group"><a class="button button-darker" href="contacts.html">ارتباط با ما</a>
                                    <p>یا</p><a class="button button-primary" href="#">تماس با ما</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-12 cell-md-6 reveal-flex">
                        <div class="thumb-video"><img class="thumb-video__image" src="images/video-preview-962x465.jpg" alt="" width="962" height="465">
                            <div class="thumb-video__caption">
                                <a class="thumb-video__button" href="http://vimeo.com/108425305" data-lightgallery="item" data-src="http://vimeo.com/108425305"></a>
                                <h4 class="thumb-video__title">ارائه ویدیویی</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counters-->
    <section class="section parallax-container bg-gray-dark">
        <div class="material-parallax"><img src="images/parallax-3.jpg" alt=""></div>
        <div class="parallax-content">
            <div class="section-md text-center">
                <div class="shell shell-wide">
                    <ul class="list-blocks">
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                            <span class="big">42</span>
                                    </div>
                                    <p class="box-counter-modern__title">سال در صنعت</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                            <span class="big">31</span>
                                    </div>
                                    <p class="box-counter-modern__title">شریک جهانی</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                        <span class="big">10</span>
                                    </div>
                                    <p class="box-counter-modern__title">نمایندگی تبلیغاتی</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                            <span class="big">65</span>
                                    </div>
                                    <p class="box-counter-modern__title">پروژه موفق</p>
                                </article>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Projects-->
    <section class="section section-md bg-white">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>پروژه های ما</h2>
                        <div class="section__header-element"><a class="link link-arrow" href="our-work.html"><span>مشاهده همه پروژه ها</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shell-fluid">
            <div class="isotope" data-isotope-layout="masonry" data-isotope-group="projects">
                <div class="row row-no-gutter">
                    <div class="col-xs-6 col-md-4 isotope-item">
                        <!-- Thumb Zoe-->
                        <a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-1-639x524.jpg" alt="" width="639" height="524">
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">لورم ایپسوم متن</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2 isotope-item">
                        <!-- Thumb Zoe-->
                        <a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-2-320x262.jpg" alt="" width="320" height="262">
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">لورم ایپسوم متن</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2 isotope-item">
                        <!-- Thumb Zoe-->
                        <a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-4-320x524.jpg" alt="" width="320" height="524">
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">لورم ایپسوم</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4 isotope-item">
                        <!-- Thumb Zoe-->
                        <a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-3-640x524.jpg" alt="" width="640" height="524">
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">لورم ایپسوم متن</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-2 isotope-item">
                        <!-- Thumb Zoe-->
                        <a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="images/project-5-320x262.jpg" alt="" width="320" height="262">
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">لورم ایپسوم</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients-->
    <section class="section section-md bg-white text-center">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>مشتریان</h2>
                        <div class="section__header-element"><a class="link link-arrow" href="contacts.html"><span>ارتباط با ما</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shell-fluid">
            <div class="range range-condensed range-md-reverse range-flex">
                <div class="cell-md-6 bg-gray-dark bg-image" style="background-image: url(images/parallax-5.jpg);">
                    <div class="section-variant-1">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel owl-carousel_style-3" data-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="images/testimonials-1-88x88.jpg" alt="" width="88" height="88">
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">استیو جابز</span></li>
                                            <li><span class="small">مدیرعامل سیب پردازان</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="images/testimonials-2-88x88.jpg" alt="" width="88" height="88">
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">بیل گیتس</span></li>
                                            <li><span class="small">مدیر ارشد مایکروسافت</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="images/testimonials-3-88x88.jpg" alt="" width="88" height="88">
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">جان اسنو</span></li>
                                            <li><span class="small">مدیر مسئول دیوار بزرگ</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-md-6">
                    <div class="link-block-group">
                        <a class="link-block" href="#"><img src="images/brand-1-216x102.png" alt="" width="216" height="102"></a>
                        <a class="link-block" href="#"><img src="images/brand-2-155x34.png" alt="" width="155" height="34"></a>
                        <a class="link-block" href="#"><img src="images/brand-3-122x33.png" alt="" width="122" height="33"></a>
                        <a class="link-block" href="#"><img src="images/brand-4-100x76.png" alt="" width="100" height="76"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News-->
    <section class="section section-md bg-white">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>اخبار</h2>
                        <div class="section__header-element"><a class="link link-arrow" href="news.html"><span>اخبار ما را بخوانید</span></a></div>
                    </div>
                    <div class="range range-center range-30 range-flex">
                        <div class="cell-xs-12 cell-sm-12 cell-md-6 cell-lg-3">
                            <article class="post-modern">
                                <a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-2-365x215.jpg" alt="" width="764" height="215"></a>
                                <div class="post-modern__main">
                                    <p class="post-modern__title"><a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a></p>
                                    <p class="post-modern__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود</p>
                                    <ul class="post-modern__meta">
                                        <li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">6 فروردین 1397</a></li>
                                        <li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>
                                        <li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="cell-xs-12 cell-sm-12 cell-md-6 cell-lg-3">
                            <article class="post-modern">
                                <a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-2-365x215.jpg" alt="" width="764" height="215"></a>
                                <div class="post-modern__main">
                                    <p class="post-modern__title"><a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a></p>
                                    <p class="post-modern__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود</p>
                                    <ul class="post-modern__meta">
                                        <li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">6 فروردین 1397</a></li>
                                        <li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>
                                        <li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="cell-xs-12 cell-sm-12 cell-md-6 cell-lg-3">
                            <article class="post-modern">
                                <a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-2-365x215.jpg" alt="" width="365" height="215"></a>
                                <div class="post-modern__main">
                                    <p class="post-modern__title"><a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a></p>
                                    <p class="post-modern__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</p>
                                    <ul class="post-modern__meta">
                                        <li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">6 فروردین 1397</a></li>
                                        <li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>
                                        <li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="cell-xs-12 cell-sm-12 cell-md-6 cell-lg-3">
                            <article class="post-modern">
                                <a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-2-365x215.jpg" alt="" width="365" height="215"></a>
                                <div class="post-modern__main">
                                    <p class="post-modern__title"><a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a></p>
                                    <p class="post-modern__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</p>
                                    <ul class="post-modern__meta">
                                        <li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">6 فروردین 1397</a></li>
                                        <li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>
                                        <li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    



@endsection