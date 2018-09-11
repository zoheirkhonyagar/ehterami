<div class="rd-navbar-main-outer">
    <div class="rd-navbar-main">
        <!-- RD Navbar Panel -->
        <div class="rd-navbar-panel">
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand">
                <a class="brand" href="{{ route('main-index') }}">
                    <div class="brand__name"><img src="images/logo-135x47.png" alt="" width="135" height="47">
                    </div>
                </a>
            </div>
        </div>
        <!-- RD Navbar Nav -->
        <div class="rd-navbar-nav-wrap">
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
                <li class="active"><a href="{{ route('main-index') }}">خانه</a></li>
                <li><a href="{{ route('about-us-index') }}">درباره ما</a></li>
                <li><a href="{{ route('portfolio-index') }}">خدمات و نمونه کارها</a></li>
                <li><a href="{{ route('news-index') }}">اخبار شرکت</a></li>
                <li><a href="{{ route('order-index') }}">سفارش</a>
                    <ul class="rd-navbar-dropdown">
                        <li><a href="single-post.html">سفارش طراحی</a></li>
                        <li><a href="single-post.html">سفارش بنر و فلکسی</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact-us-index') }}">تماس</a></li>
            </ul>
        </div>
    </div>
</div>