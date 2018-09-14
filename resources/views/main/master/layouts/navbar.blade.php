<div class="rd-navbar-main-outer">
    <div class="rd-navbar-main">
        <!-- RD Navbar Panel -->
        <div class="rd-navbar-panel">
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand" style="text-align:center;">
                <a class="brand" href="{{ route('main-index') }}">
                    <div class="brand__name"><img src="images/logo.png" alt="Ehterami-logo" width="110" height="110" style="width:110px;height:110px;max-height:110px">
                    </div>
                </a>
            </div>
        </div>
        <!-- RD Navbar Nav -->
        <div class="rd-navbar-nav-wrap">
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
                <li class={{ \Request::route()->getName() == 'main-index' ? "active" : '' }}><a href="{{ route('main-index') }}">خانه</a></li>
                <li class={{ \Request::route()->getName() == 'about-us-index' ? "active" : '' }}><a href="{{ route('about-us-index') }}">درباره ما</a></li>
                <li class={{ \Request::route()->getName() == 'portfolio-index' ? "active" : '' }}><a href="{{ route('portfolio-index') }}">خدمات و نمونه کارها</a></li>
                <li class={{ \Request::route()->getName() == 'news-index' ? "active" : '' }}><a href="{{ route('news-index') }}">اخبار شرکت</a></li>
                <li class={{ \Request::route()->getName() == 'order-index' ? "active" : '' }}><a href="{{ route('order-index') }}">سفارش</a>
                    <ul class="rd-navbar-dropdown">
                        <li><a href="#">سفارش طراحی</a></li>
                        <li><a href="#">سفارش بنر و فلکسی</a></li>
                    </ul>
                </li>
                <li class={{ \Request::route()->getName() == 'contact-us-index' ? "active" : '' }}><a href="{{ route('contact-us-index') }}">تماس</a></li>
            </ul>
        </div>
    </div>
</div>