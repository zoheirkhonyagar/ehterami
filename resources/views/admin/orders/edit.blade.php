@extends('admin.master.index')
@section('content')

<div class="row">

    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><small style="font-size:14px;">ویرایش سفارش</small></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <form method="POST" action="{{ route('payment.update' , $payment->id) }}" enctype="multipart/form-data" role="form">
                            @method('PATCH')
                            @csrf()
                            <div class="form-group">
                                <label>چاپ شده</label>
                                <select class="form-control m-b" name="status">
                                        <option {{ $payment->status == 0 ? 'selected' : '' }} value="0">0</option>
                                        <option {{ $payment->status == 1 ? 'selected' : '' }} value="1">1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"><strong>بروزرسانی</strong></button>
                            </div>
                            @foreach ($errors->all() as $message)
                                <div class="error" style="color:#e74c3c;">
                                    {{ $message }}
                                </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection