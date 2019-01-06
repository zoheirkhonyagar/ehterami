@extends('main.master.index')
@section('content')
    <section class="section section-md bg-white">
        <div class="shell blog">
            <div class="range range-90">
                <div class="cell-md-8 cell-lg-9 blog__main">
                    <article class="post-single">
                        {{-- <img class="post-single__image" src="{{ asset('uploads') . '/' . $portfolio->image }}" alt="" width="870" height="412"> --}}
                        <h4 class="post-single__title">{{ $portfolio->title }}</h4>
                        <ul class="post-single__meta">
                            <li>
                                <dl>
                                    <dt>تاریخ</dt>
                                    <dd>
                                        <time datetime="2017-01-22">{{ jdate($portfolio->created_at)->format('%d %B %Y') }}</time>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>دسته</dt>
                                    <dd>{{$portfolio->subcategories()->first()->title}}</dd>
                                </dl>
                            </li>
                        </ul>
                        <div class="post-single__main">
                            <p>
                                {!! $portfolio->body !!}
                            </p>
                        </div>
                        <div class="post-single__footer">
                            <p class="heading-5">اشتراک گذاری این مطلب:</p>
                            <div class="group-sm"><a class="button button-xs button-facebook button-icon button-icon-left" href="#"><span class="icon fa fa-facebook"></span>فیسبوک</a><a class="button button-xs button-twitter button-icon button-icon-left" href="#"><span class="icon fa fa-twitter"></span>توییتر</a><a class="button button-xs button-google button-icon button-icon-left" href="#"><span class="icon fa fa-google-plus"></span>گوگل پلاس</a></div>
                        </div>
                    </article>
                </div>
                <div class="cell-md-4 cell-lg-3 blog__aside">
                    <div class="blog-aside__column">
                        <div class="blog__aside-item">
                            <p class="heading-8 blog-title">دسته بندی ها</p>
                            <ul class="list-marked-bordered">
                                <li><a href="#"><span>دیجیتال</span><span class="count">(4)</span></a></li>
                                <li><a href="#"><span>بازاریابی برند</span><span class="count">(2)</span></a></li>
                                <li><a href="#"><span>خرید رسانه</span><span class="count">(6)</span></a></li>
                            </ul>
                        </div>
                        <div class="blog__aside-item">
                            <p class="heading-8 blog-title">مطالب محبوب</p>
                            <div class="post-inline-wrap">
                                <!-- Post inline-->
                                <article class="post-inline">
                                    <div class="post-inline__main">
                                        <p class="post-inline__title"><a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></p>
                                    </div>
                                    <div class="post-inline__footer">
                                        <p class="post-inline__time">13 فروردین 1397</p>
                                    </div>
                                </article>
                                <!-- Post inline-->
                                <article class="post-inline">
                                    <div class="post-inline__main">
                                        <p class="post-inline__title"><a href="single-post.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a></p>
                                    </div>
                                    <div class="post-inline__footer">
                                        <p class="post-inline__time">25 اردیبهشت 1397</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
