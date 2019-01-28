@extends('main.master.index')

@section('content')

<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-6.jpg);">
    <div class="shell">
        <h2 class="breadcrumbs-custom__title">سفارش</h2>
        <ul class="breadcrumbs-custom__path">
            <li><a href="{{ route('main-index') }}">خانه</a></li>
            <li class="active">سفارش</li>
        </ul>
    </div>
</section>

<!-- Get in Touch-->
<section class="section section-lg bg-white">
    <div class="shell">
        <div class="layout-bordered">
            <div class="layout-bordered__main text-center">
                <div class="layout-bordered__main-inner">
                    @if(auth()->user())
                        <h3>سفارشات</h3>
                        <p>در این قسمت میتوانید نوع سفارش خود را انتخاب و ابعاد چاپی مورد نظر را وارد کنید</p>
                        <!-- RD Mailform-->
                        <form class="rd-mailform" data-form-output="form-output-global"  data-form-type="contact" enctype="multipart/form-data" method="post" action="{{ route('payment') }}">
                            @csrf()
                            <div class="range range-sm-bottom range-20">
                                <div class="cell-xs-12">
                                    <div class="form-wrap">
                                        <select class="form-select" name="product" id="product-choose">
                                            @foreach ($products as $product)
                                                <option data-price="{{ $product->price }}" value="{{ $product->id }}">{{ $product->getPriceWithName() }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('product'))
                                        <div class="error" style="color:#e74c3c;">{{ $errors->first('product') }}</div>
                                    @endif
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="order-width" value="{{ old('width') }}" type="text" name="width" data-constraints="@Required">
                                        <label class="form-label" for="order-width">طول ( به متر وارد شود )</label>
                                    </div>
                                    @if ($errors->has('width'))
                                        <div class="error" style="color:#e74c3c;">{{ $errors->first('width') }}</div>
                                    @endif
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="order-height" value="{{ old('height') }}" type="text" name="height" data-constraints="@Required">
                                        <label class="form-label" for="order-height">ارتفاع ( به متر وارد شود )</label>
                                    </div>
                                    @if ($errors->has('height'))
                                        <div class="error" style="color:#e74c3c;">{{ $errors->first('height') }}</div>
                                    @endif
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-wrap">
                                        <input type="file" class="form-input" id="image" name="image" data-constraints="@Required">
                                    </div>
                                    @if ($errors->has('image'))
                                        <div class="error" style="color:#e74c3c;">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                                <div class="cell-sm-6">
                                    <button class="button button-block button-primary" type="submit">ثبت سفارش و پرداخت</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <h3>سفارشات</h3>
                        <p>برای ثبت سفارش باید به پنل کاربری وارد شوید</p>
                        <div>
                            <a class="button-primary login-top-bar" style="margin:10px 0;display:block;" href="{{route('login')}}">ورود / ثبت نام</a>
                        </div>
                    @endif

                </div>
            </div>
            <div class="layout-bordered__aside">
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
