<footer class="footer-corporate">
    <div class="footer-corporate__main bg-gray-darker">
        <div class="shell shell-fluid shell-condensed">
            <div class="range range-xs-center range_xl-ten range-50 footer-corporate__range">
                <div class="cell-xs-12 cell-sm-12 cell-md-4 cell-lg-4 cell-xl-2 footer-corporate__column">
                    <h4 class="heading-bordered">دفتر مرکزی</h4>
                    <ul class="list-md">
                        <li>
                            <dl class="list-terms-inline">
                                <dt>آدرس</dt>
                                <dd>{{$information->address}}</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>ایمیل</dt>
                                <dd><a href="mailto:{{$information->email}}">{{$information->email}}</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>تلفن</dt>
                                <dd><a href="#" class="ltr_text">{{$information->phone_number1}}</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="cell-xs-12 cell-sm-12 cell-md-4 cell-lg-4 footer-corporate__column">
                    <h4 class="heading-bordered">جدیدترین خبر ها</h4>
                    <ul class="post-group post-light-group">
                        @foreach ($posts as $post)
                            <li>
                                <article class="post-light">
                                    <p class="post-light__title">
                                        <a href="{{ route('show-single-post' , [ 'id' => $post->id ]) }}">{{ $post->title }}</a>
                                    </p>
                                    <time datetime="2017">{{ jdate($post->created_at)->format('%d %B %Y') }}</time>
                                </article>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="cell-xs-12 cell-sm-12 cell-md-4 cell-lg-4 cell-xl-1 footer-corporate__column">
                    <h4 class="heading-bordered">لینک ها</h4>
                    <ul class="list-xxs list_darker">
                        <li><a href="{{ route('main-index') }}">خانه</a></li>
                        <li><a href="{{ route('about-us-index') }}">درباره ما</a></li>
                        <li><a href="{{ route('main-portfolio-index') }}">خدمات و نمونه کارها</a></li>
                        <li><a href="{{ route('news-index') }}">اخبار</a></li>
                        <li><a href="{{ route('contact-us-index') }}">تماس</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-corporate__aside bg-gray-base text-center">
        <div class="shell shell-fluid shell-condensed">
            <div class="range range-20 range_xl-ten footer-corporate__range">
                <div class="cell-sm-8 cell-xl-6 footer-corporate__aside-column text-sm-left">
                    <!-- Rights-->
                    <p class="rights">
                        پیاده سازی با <i class="fa fa-heart" style="font-style: normal;" aria-hidden="true"></i> توسط :
                        <a href="https://github.com/zoheirkhonyagar" target="_blank">زهیر خنیاگر</a>
                    </p>
                </div>
                <div class="cell-sm-4 cell-xl-4 footer-corporate__aside-column text-sm-right">
                    <ul class="list-inline-xxs">
                        <li>
                            <a class="icon icon-xs icon-style-modern fa fa-twitter" href="{{ 'https://twitter.com/' . $information->twitter}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-xs icon-style-modern fa fa-facebook" href="{{ 'https://facebook.com/' . $information->facebook}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-xs icon-style-modern fa fa-instagram" href="{{ 'https://instagram.com/' . $information->instagram}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-xs icon-style-modern fa fa-telegram" href="{{ 'https://telegram.me/' . $information->telegram}}"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
