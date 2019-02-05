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