@extends('main.master.index')

@section('content')

    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">درباره ما</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="{{ route('main-index') }}">خانه</a></li>
                <li class="active">درباره ما</li>
            </ul>
        </div>
    </section>

    <!-- Experience since 1999-->
    <section class="section section-md bg-white">
        <div class="shell">
            <div class="range range-70 range-sm-center range-lg-justify">
                <div class="cell-sm-10 cell-md-6 cell-lg-5" style="line-height: 41px;text-align: justify;">
                    <h4>درباره ما</h4>
                    {!! $aboutUsHistory->body !!}
                </div>
                <div class="cell-sm-10 cell-md-6">
                    <div class="row grid-2">
                        <div class="col-xs-12">
                            <img src="{{ asset('uploads') . '/' . $aboutUsHistory->image }}" alt="" width="273" height="214">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Social Responsibility & Eco Standards-->
    <section class="section section-sm bg-white">
        <div class="shell">
            <div class="range range-50 range-sm-center range-md-left range-lg-justify">

                <div class="cell-sm-12 cell-md-12 cell-lg-12">
                    <h4 class="text-center">گواهینامه های ما</h4>
                    <p class="text-center">در این قسمت میتوانید لوح ها و گواهی نامه های مارا مشاهده نمایید</p>
                    <div class="group-3-columns" style="max-width: 430px;" data-lightgallery="group">
                        @foreach($medals as $medal)
                            <div class="column-item">
                                <a class="thumb-light" href="{{ asset('uploads') . '/' . $medal->image }}" data-lightgallery="group-item"><img src="images/certificate-1-120x171.jpg" alt="" width="120" height="171">
                                    <div class="thumb-light__overlay"></div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
