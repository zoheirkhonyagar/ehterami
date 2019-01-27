<div class="rd-navbar-aside-outer rd-navbar-content-outer">
    <div class="rd-navbar-content__toggle rd-navbar-fullwidth--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
    <div class="rd-navbar-aside rd-navbar-content">
        <div class="rd-navbar-aside__item">
            <ul class="rd-navbar-items-list">
                <li>
                    <div class="unit unit-spacing-xxs unit-horizontal">
                        <div class="unit__left"><span style="top:8px;" class="icon icon-sm icon-primary fl-bigmug-line-two319"></span></div>
                        <div class="unit__body">
                        @if (Auth::check())
                            <form style="padding :0;margin:0;display:inline-block;" method="POST" action="{{ route('logout') }}" class="">
                                @csrf
                                <button class="button-secondary login-top-bar" >خروج</button>
                            </form>
                            @if(Auth::user()->isAdmin())
                                <a class="button-primary login-top-bar" style="display:inline-block;" href="{{ route('admin-index') }}">پنل مدیریت</a>
                            @endif
                        @else
                            <a class="button-primary login-top-bar" href="{{ route('login') }}">ورود / ثبت نام</a>
                        @endif

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        {{-- <div class="rd-navbar-aside__item">
            <ul class="rd-navbar-items-list">
                <li>
                    <div class="unit unit-spacing-xxs unit-horizontal">
                        <div class="unit__left"><span class="text-primary">تلفن:</span></div>
                        <div class="unit__body"><a href="#" class="ltr_text">{{$information->phone_number1}}</a></div>
                    </div>
                </li>
            </ul>
        </div> --}}
    </div>
</div>
