@extends('main.master.index')

@section('content')

<section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-1.jpg);">
    <div class="shell">
        <h2 class="breadcrumbs-custom__title">فرم ها</h2>
        <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">خانه</a></li>
            <li><a href="#">صفحات</a></li>
            <li class="active">فرم ها</li>
        </ul>
    </div>
</section>

<!-- Page title -->
<section class="section section-md bg-white text-center">
    <div class="shell">
        <div class="range range-50 range-sm-center">
            <div class="cell-sm-9 cell-md-8 cell-lg-6">
                <h3>فرم ها</h3>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در</p>
            </div>
        </div>
        <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-7 cell-lg-6">
                <h4>فرم ورود</h4>
                <div class="group-sm group-sm-justify group-middle"><a class="button button-sm button-facebook button-icon button-icon-left" href="#"><span class="icon fa fa-facebook"></span>فیسبوک</a><a class="button button-sm button-twitter button-icon button-icon-left" href="#"><span class="icon fa fa-twitter"></span>توییتر</a><a class="button button-sm button-google button-icon button-icon-left" href="#"><span class="icon fa fa-google-plus"></span>لورم ایپسوم</a></div>
                <div class="text-decoration-lines"><span class="text-decoration-lines__content">یا</span></div>
                <!-- RD Mailform-->
                <form class="rd-mailform rd-mailform_label-centered">
                    <div class="form-wrap">
                        <label class="form-label-outside" for="login-email">ایمیل</label>
                        <input class="form-input" id="login-email" type="email" name="email" data-constraints="@Email @Required" dir="ltr">
                    </div>
                    <div class="form-wrap">
                        <label class="form-label-outside" for="login-password">رمز عبور</label>
                        <input class="form-input" id="login-password" type="password" name="pass" data-constraints="@Required">
                    </div>
                    <button class="button button-primary button-block" type="submit">ورود</button>
                </form>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
