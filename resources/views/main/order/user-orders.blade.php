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

<section class="section section-md bg-white text-center">
    <div class="shell">
        <div class="range range-50 range-sm-center">
            <div class="cell-sm-9 cell-md-8 cell-lg-6" style="margin-top:0;">
                <h3>سفارشات من</h3>
                <p>در این قسمت لیست سفارشات خود را مشاهده میکنید</p>
            </div>
        </div>
        <div class="range range-sm-center">
            <div class="range range-md-center">
                <div class="cell-md-12">
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-striped table-custom-primary">
                            <thead>
                                <tr>
                                    <th>محصول</th>
                                    <th>طول (متر)</th>
                                    <th>ارتفاع (متر)</th>
                                    <th>قیمت واحد (تومان)</th>
                                    <th>قیمت کل (تومان)</th>
                                    <th>چاپ شده</th>
                                    <th>تاریخ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->product->title }}</td>
                                        <td>{{ $payment->width }}</td>
                                        <td>{{ $payment->height }}</td>
                                        <td>{{ $payment->product->price }}</td>
                                        <td>{{ $payment->price }}</td>
                                        <td>{{ $payment->status }}</td>
                                        <td>{{ jdate($payment->updated_at)->format('%d %B %Y') }}</td>
                                    </tr>
                                @endforeach
                        </table>
                        {{ $payments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
