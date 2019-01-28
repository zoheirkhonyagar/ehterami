@extends('admin.master.index')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                    <h5>سفارشات چاپ شده</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up">
                        </i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times">
                        </i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-hover no-margins">
                    <thead>
                        <tr>
                            <th>نام مشتری</th>
                            <th>شماره تماس</th>
                            <th>نام محصول</th>
                            <th>طول (متر)</th>
                            <th>ارتفاع (متر)</th>
                            <th>قیمت (تومان)</th>
                            <th>تاریخ ارسال</th>
                            <th>لینک دانلود</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->user->fullname() }}</td>
                                <td>{{ $payment->user->phone }}</td>
                                <td>{{ $payment->product->title }}</td>
                                <td>{{ $payment->width }}</td>
                                <td>{{ $payment->height }}</td>
                                <td>{{ $payment->price }}</td>
                                <td>{{ jdate($payment->created_at)->format('%d %B %Y') }}</td>
                                <td><a href="{{ asset('uploads') . '/' . $payment->image }}">دانلود</a></td>
                                <td class="text-navy">
                                    <form action="{{ route('payment.destroy' , [ 'id' => $payment->id ]) }}" method="post">
                                        {{ method_field('delete') }}
                                        {{ csrf_field() }}
                                        <a class="btn btn-info btn-xs"  href="{{ route( 'payment.edit' , [ 'id' => $payment->id ] ) }}">ویرایش</a>
                                        <button type="submit" class="btn btn-danger btn-xs">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{ $payments->links() }}

@endsection
