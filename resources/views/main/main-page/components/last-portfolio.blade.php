<section class="section section-md bg-white">
    <div class="shell shell-wide">
        <div class="range range-md-center">
            <div class="cell-lg-11">
                <!-- Section Header-->
                <div class="section__header">
                    <h2>پروژه های ما</h2>
                    <div class="section__header-element">
                        <a class="link link-arrow" href="{{route('portfolio.index')}}"><span>مشاهده همه پروژه ها</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shell-fluid">
        <div class="isotope" data-isotope-layout="masonry" data-isotope-group="projects">
            <div class="row row-no-gutter">
                @foreach ($portfolios as $portfolio)
                    <div class="col-xs-6 col-sm-4 col-md-3 isotope-item">
                        <!-- Thumb Zoe-->
                        <a class="thumb-zoe" href="{{ route('main-portfolio-show' , [ 'id' => $portfolio->id]) }}">
                            <img class="thumb-zoe__image" src="{{ asset('uploads') . '/' . $portfolio->image }}" alt="" width="320" height="262">
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">{{ $portfolio->title }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
