<section class="section section-md bg-white text-center">
    <div class="shell shell-wide">
        <div class="range range-md-center">
            <div class="cell-lg-11">
                <!-- Section Header-->
                <div class="section__header">
                    <h2>مشتریان</h2>
                    <div class="section__header-element">
                        <a class="link link-arrow" href="{{ route('contact-us-index') }}"><span>ارتباط با ما</span></a>
                    </div>
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
                        @foreach($quotes as $quote)
                        <div class="item">
                            <!-- Quote light-->
                            <article class="quote-light">
                                <div class="quote-light__main">
                                    <p class="q">{{ $quote->quotation }}</p>
                                    <ul class="quote-light__meta">
                                        <li><span class="cite">{{ $quote->fullname }}</span></li>
                                        <li><span class="small">{{ $quote->company_name }}</span></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="cell-md-6">
                <div class="link-block-group">
                    <a class="link-block" href="#"><img src="images/oraganize/foolad-d.png" alt="شرکت فولاد هرمزگان"></a>
                    <a class="link-block" href="#"><img src="/images/oraganize/barq-d.png" alt="شرکت توزیع نیروی برق استان هرمزگان"></a>
                    <a class="link-block" href="#"><img src="/images/oraganize/amoozesh-d.png" alt="اداره کل آموزش و پرورش استان هرمزگان"></a>
                    <a class="link-block" href="#"><img src="/images/oraganize/banader.png" alt="اداره کل بنادر و دریانوردی هرمزگان" ></a>
                </div>
            </div>
        </div>
    </div>
</section>
