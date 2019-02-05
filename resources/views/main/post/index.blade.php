@extends('main.master.index')

@section('content')

<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-9.jpg);">
    <div class="shell">
        <h2 class="breadcrumbs-custom__title">اخبار</h2>
        <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">خانه</a></li>
            <li class="active">اخبار</li>
        </ul>
    </div>
</section>

<!-- News-->
<section class="section section-md bg-gray-4 text-center">
    <div class="shell shell-wide">
        <div class="range range-30 range-flex">
            @foreach ($posts as $post)
                <div class="cell-sm-12 cell-lg-4">
                    <article class="post-modern">
                        <a class="post-modern__image-wrap" href="{{ route('show-single-post' , [ 'id' => $post->id ]) }}">
                            <img class="post-modern__image" src="{{ asset('uploads') . '/' . $post->image }}" alt="{{ $post->title }}">
                        </a>
                        <div class="post-modern__main">
                            <p class="post-modern__title"><a href="{{ route('show-single-post' , [ 'id' => $post->id ]) }}">{{ $post->title }}</a></p>
                            {!! substr($post->body , 0 , 351) . ' ...' !!}
                            <ul class="post-modern__meta">
                                <li>
                                    <span class="icon icon-primary mdi mdi-clock"></span>
                                    <a href="{{ route('show-single-post' , [ 'id' => $post->id ]) }}">{{ jdate($post->created_at)->format('%d %B %Y') }}</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
        <!-- Pagination-->
        {{ $posts->links() }}
        {{-- <ul class="pagination-custom">
            <li class="pagination-control"><a href="#">قبلی</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li class="active"><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="pagination-control"><a href="#">بعدی</a></li>
        </ul> --}}
    </div>
</section>

@endsection
