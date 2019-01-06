@extends('main.master.index')

@section('content')

<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(/images/bg-image-6.jpg);">
    <div class="shell">
        <h2 class="breadcrumbs-custom__title">نمونه کارها</h2>
        <ul class="breadcrumbs-custom__path">
            <li><a href="{{ route('main-index') }}">خانه</a></li>
            <li class="active">نمونه کارها</li>
        </ul>
    </div>
</section>

<section class="section section-md bg-white">
    <div class="shell shell-wide">
        <div class="range range-md-center">
            <div class="cell-lg-11">
                <!-- Section Header-->
                <div class="section__header">
                    <h2 class="my-h2-title"><a class="link" href="{{ route('show-sub' , [ 'id' => $category->id ]) }}">{{ $category->title }}</a><span style="margin:0 25px;color:#168d89;">></span><a href="{{ route('show-portfolios' , [ 'id' => $subcategory->id ]) }}">{{ $subcategory->title }}</a></h2>
                    <div class="section__header-element">
                        <a class="link link-arrow" href="{{route('main-portfolio-index')}}"><span>مشاهده همه پروژه ها</span></a>
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

@endsection
