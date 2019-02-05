@extends('main.master.index')
@section('content')
    <section class="section section-md bg-white my-bg-white">
        <div class="shell blog" style="max-width:1200px;">
            <div class="range range-90">
                <div class="cell-md-12 cell-lg-12 blog__main my_blog_main">
                    <article class="post-single">
                        {{-- <img class="post-single__image" src="{{ asset('uploads') . '/' . $post->image }}" width="100%" alt=""> --}}
                        <h4 class="post-single__title">{{ $post->title }}</h4>
                        <ul class="post-single__meta">
                            <li>
                                <dl>
                                    <dt>تاریخ</dt>
                                    <dd>
                                        <time datetime="2017-01-22">{{ jdate($post->created_at)->format('%d %B %Y') }}</time>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                        <div class="post-single__main">
                            <p>
                                {!! $post->body !!}
                            </p>
                        </div>
                        <div class="post-single__footer">
                            <p class="heading-5">اشتراک گذاری این مطلب:</p>
                            <div class="group-sm"><a class="button button-xs button-facebook button-icon button-icon-left" href="#"><span class="icon fa fa-facebook"></span>فیسبوک</a><a class="button button-xs button-twitter button-icon button-icon-left" href="#"><span class="icon fa fa-twitter"></span>توییتر</a><a class="button button-xs button-google button-icon button-icon-left" href="#"><span class="icon fa fa-google-plus"></span>گوگل پلاس</a></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection
