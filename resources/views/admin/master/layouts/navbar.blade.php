<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left">
            <li>
                <span class="m-r-sm text-muted welcome-message">به بخش مدیریت خوش آمدید</span>
            </li>
            <li>
                <span class="m-r-sm text-muted welcome-message">آی پی شما : <strong class="ip">192.168.0.0</strong></span>
            </li>
            <li>
                <a href="{{route('main-index')}}">
                    <i class="fa fa-home"></i>
                    صفحه اصلی
                </a>
            </li>
            <li>
                <form style="" method="POST" action="{{ route('logout') }}" class="">
                    @csrf
                    <button class="btn btn-danger login-top-bar" >خروج</button>
                </form>
                {{-- <a href="login.html">
                    <i class="fa fa-sign-out"></i>
                    خروج
                </a> --}}
            </li>
        </ul>
    </nav>
</div>
