<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="logo-element">
                    <span class="block m-t-xs" style="margin-top:0;">
                        <img src="/images/logo.png" alt="logo" width="100px" height="100px">
                    </span>
                </div>
                <div class="dropdown profile-element my-profile-element">
                    <a class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::user()->fullname() }}</strong>
                            </span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInLeft m-t-xs">
                        <li>
                            <a href="profile.html">
                            پروفایل</a>
                        </li>
                        <li>
                            <a href="contacts.html">
                            مخاطبین</a>
                        </li>
                        <li>
                            <a href="mailbox.html">
                            ایمیل</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="login.html">
                            خروج</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="active">
                <a href="{{ route('admin-index') }}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">داشبورد ها</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="nav-label">صفحه اصلی</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('slider.index') }}">اسلایدر</a>
                    </li>
                    <li>
                        <a href="{{ route('slogan.index') }}">شعارهای تبلیغاتی</a>
                    </li>
                    <li>
                        <a href="#">آیتم های آماردهی</a>
                    </li>
                    <li>
                        <a href="{{ route('quote.index') }}">از زبان مشتریان</a>
                    </li>
                    <li>
                        <a href="#">لوگو سازمان ها</a>
                    </li>
                    <li>
                        <a href="{{ route('information.index') }}">اطلاعات کلی</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="nav-label">درباره ما</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('about-us-history.index') }}">تاریخچه</a>
                    </li>
                    <li>
                        <a href="{{ route('medal.index') }}">مدال ها و افتخارات</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="nav-label">نمونه کارها</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('portfolio.index') }}">لیست نمونه کارها</a>
                    </li>
                    <li>
                        <a href="{{ route('category.index') }}">دسته بندی ها</a>
                    </li>
                    <li>
                        <a href="{{ route('subcategory.index') }}">زیردسته ها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="nav-label">محصولات</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('product.index') }}">لیست محصولات</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="nav-label">اخبار</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ route('post.index') }}">لیست اخبار</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('contact.index') }}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">پیام های دریافتی</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
