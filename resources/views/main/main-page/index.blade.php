@extends('main.master.index')

@section('content')

    <section class="section section-layout-1">
        @include('main.main-page.components.slider')
        @include('main.main-page.components.slogans')
    </section>

    <!-- Experience since 1999-->
    @include('main.main-page.components.experience')

    <!-- Counters-->
    @include('main.main-page.components.counter-items')


    <!-- Our Projects-->
    @include('main.main-page.components.last-portfolio')

    <!-- Clients-->
    @include('main.main-page.components.clients')

    <!-- News-->
    @include('main.main-page.components.last-news')
    



@endsection