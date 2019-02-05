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

<!-- Get in Touch-->
<section class="section section-lg bg-white">
    <div class="parallax-content">
        <div style="padding-top:0;" class="section-md text-center">
            <div class="shell shell-wide">
                <ul class="list-blocks">
                    @foreach ($subcategories as $sub)
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner my-block">
                                <a class="category-link" href="{{ route('show-portfolios' , ['id' => $sub->id]) }}">
                                    <article class="box-counter-modern">
                                        <h3 class="box-counter-modern__title my-title">{{ $sub->title }}</h3>
                                    </article>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
