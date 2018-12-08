@extends('main.master.index')

@section('content')

<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-6.jpg);">
    <div class="shell">
        <h2 class="breadcrumbs-custom__title">تماس</h2>
        <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">خانه</a></li>
            <li class="active">تماس</li>
        </ul>
    </div>
</section>

<!-- Get in Touch-->
<section class="section section-lg bg-white">
    <div class="shell">
        <div class="layout-bordered">
            <div class="layout-bordered__main text-center">
                <div class="layout-bordered__main-inner">
                    <h3>در ارتباط باشید</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان</p>
                    <!-- RD Mailform-->
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{ route('contact-us-store') }}">
                        @csrf()
                        <div class="range range-sm-bottom range-20">
                            <div class="cell-xs-12">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-first-name" value="{{ old('fullname') }}" type="text" name="fullname" data-constraints="@Required">
                                    <label class="form-label" for="contact-first-name">نام و نام خانوادگی</label>
                                </div>
                                @if ($errors->has('fullname'))
                                    <div class="error" style="color:#e74c3c;">{{ $errors->first('fullname') }}</div>
                                @endif
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email" value="{{ old('email') }}" type="email" name="email" data-constraints="@Email @Required" dir="ltr">
                                    <label class="form-label" for="contact-email">ایمیل</label>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="error" style="color:#e74c3c;">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-phone" value="{{ old('phone') }}" type="text" name="phone" data-constraints="@Numeric @Required">
                                    <label class="form-label" for="contact-phone">تلفن</label>
                                </div>
                                @if ($errors->has('phone'))
                                    <div class="error" style="color:#e74c3c;">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message">پیام شما</label>
                                    <textarea class="form-input" id="contact-message" name="body" data-constraints="@Required">{{ old('body') }}</textarea>
                                </div>
                                @if ($errors->has('body'))
                                    <div class="error" style="color:#e74c3c;">{{ $errors->first('body') }}</div>
                                @endif
                            </div>
                            <div class="cell-sm-6">
                                <button class="button button-block button-primary" type="submit">ارسال پیام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="layout-bordered__aside">
                <div class="layout-bordered__aside-item">
                    <p class="heading-8">اجتماعی باشید </p>
                    <ul class="list-inline-xs">
                        <li>
                            <a class="icon icon-sm icon-default fa fa-telegram" href="{{ 'https://telegram.me/' . $information->telegram}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-default fa fa-instagram" href="{{ 'https://instagram.com/' . $information->instagram}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-default fa fa-facebook" href="{{ 'https://facebook.com/' . $information->facebook}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-default fa fa-twitter" href="{{ 'https://twitter.com/' . $information->twitter}}"></a>
                        </li>
                    </ul>
                </div>
                <div class="layout-bordered__aside-item">
                    <p class="heading-8">تلفن</p>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                        <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
                        <div class="unit__body"><a href="callto:#" class="ltr_text">{{ $information->phone_number1 }}</a></div>
                    </div>
                </div>
                <div class="layout-bordered__aside-item">
                    <p class="heading-8">ایمیل</p>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                        <div class="unit__left"><span class="icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
                        <div class="unit__body"><a href="mailto:#">{{ $information->email }}</a></div>
                    </div>
                </div>
                <div class="layout-bordered__aside-item">
                    <p class="heading-8">آدرس</p>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                        <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                        <div class="unit__body"><a href="#">{{ $information->address }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
@endsection