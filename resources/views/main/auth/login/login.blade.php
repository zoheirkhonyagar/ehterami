@extends('main.master.index')

@section('content')

<section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-1.jpg);">
    <div class="shell">
        <h2 class="breadcrumbs-custom__title">فرم ورود</h2>
    </div>
</section>

<!-- Page title -->
<section class="section section-md bg-white text-center">
    <div class="shell">
        <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-7 cell-lg-6">
                <!-- RD Mailform-->
                <form method="POST" action="{{ route('login') }}" class="rd-mailform rd-mailform_label-centered">
                    @csrf
                    <div class="form-wrap flex-row">
                        <label class="form-label-outside form-label-custom" for="login-email">ایمیل</label>
                        <input class="form-input ltr" id="login-email" type="email" name="email" value="{{ old('email') }}" data-constraints="@Email @Required" dir="ltr" autofocus>
                    </div>
                    @if ($errors->has('email'))
                        <div class="error error-custom" style="color:#e74c3c;">{{ $errors->first('email') }}</div>
                    @endif
                    <div class="form-wrap flex-row">
                        <label class="form-label-outside form-label-custom" for="login-password">رمز عبور</label>
                        <input class="form-input ltr" id="login-password" type="password" name="password" data-constraints="@Required">
                    </div>
                    @if ($errors->has('password'))
                        <div class="error error-custom" style="color:#e74c3c;">{{ $errors->first('password') }}</div>
                    @endif
                    <div class="form-wrap flex-row">
                        <input class="form-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-label-outside form-label-custom" for="remember">مرا به خاطر بسپار !</label>
                    </div>
                    <button class="button button-primary button-block form-button-custom" type="submit">ورود</button>
                    <a href="{{ route('register') }}" class="button button-secondary button-block form-button-custom" type="submit">ثبت نام</a>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
