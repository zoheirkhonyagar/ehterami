@extends('main.master.index')

@section('content')
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-1.jpg);">
    <div class="shell">
        <h2 class="breadcrumbs-custom__title">فرم ثبت نام</h2>
    </div>
</section>

<!-- Page title -->
<section class="section section-md bg-white text-center">
    <div class="shell">
        <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-7 cell-lg-6">
                <!-- RD Mailform-->
                <form method="POST" action="{{ route('register') }}" class="rd-mailform rd-mailform_label-centered">
                    @csrf
                    <div class="form-wrap flex-row">
                        <label class="form-label-outside form-label-custom" for="register-firstname">نام</label>
                        <input class="form-input" id="register-firstname" type="text" name="first_name" value="{{ old('first_name') }}" data-constraints="@Required" autofocus>
                    </div>
                    @if ($errors->has('first_name'))
                        <div class="error error-custom" style="color:#e74c3c;">{{ $errors->first('first_name') }}</div>
                    @endif
                    <div class="form-wrap flex-row">
                        <label class="form-label-outside form-label-custom" for="register-lastname">نام خانوادگی</label>
                        <input class="form-input" id="register-lastname" type="text" name="last_name" value="{{ old('last_name') }}" data-constraints="@Required">
                    </div>
                    @if ($errors->has('last_name'))
                        <div class="error error-custom" style="color:#e74c3c;">{{ $errors->first('last_name') }}</div>
                    @endif
                    <div class="form-wrap flex-row">
                        <label class="form-label-outside form-label-custom" for="register-phone">شماره همراه</label>
                        <input class="form-input" id="register-phone" type="text" name="phone" value="{{ old('phone') }}" data-constraints="@Required">
                    </div>
                    @if ($errors->has('phone'))
                        <div class="error error-custom" style="color:#e74c3c;">{{ $errors->first('phone') }}</div>
                    @endif
                    <div class="form-wrap flex-row">
                        <label class="form-label-outside form-label-custom" for="register-email">ایمیل</label>
                        <input class="form-input ltr" id="register-email" type="email" name="email" value="{{ old('email') }}" data-constraints="@Email @Required" dir="ltr">
                    </div>
                    @if ($errors->has('email'))
                        <div class="error error-custom" style="color:#e74c3c;">{{ $errors->first('email') }}</div>
                    @endif
                    <div class="form-wrap flex-row">
                        <label class="form-label-outside form-label-custom" for="register-password">رمز عبور</label>
                        <input class="form-input ltr" id="register-password" type="password" name="password" data-constraints="@Required">
                    </div>
                    @if ($errors->has('password'))
                        <div class="error error-custom" style="color:#e74c3c;">{{ $errors->first('password') }}</div>
                    @endif
                    <div class="form-wrap flex-row">
                        <label class="form-label-outside form-label-custom" for="register-password-confirm">تکرار رمز عبور</label>
                        <input class="form-input ltr" id="register-password-confirm" type="password" name="password_confirmation" data-constraints="@Required">
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <div class="error error-custom" style="color:#e74c3c;">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                    <button class="button button-primary button-block form-button-custom" type="submit">ثبت نام</button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
