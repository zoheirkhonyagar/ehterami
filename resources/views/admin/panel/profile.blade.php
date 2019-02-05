@extends('admin.master.index')
@section('content')

<div class="row">

    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><small style="font-size:14px;">ویرایش پروفایل</small></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <form method="POST" action="{{ route('change-profile') }}" enctype="multipart/form-data" role="form">
                            {{-- @method('PATCH') --}}
                            @csrf()
                            <div class="form-group">
                                <label>نام</label>
                                <input type="text" name="first_name" value="{{ auth()->user()->first_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>نام خانوادگی</label>
                                <input type="text" name="last_name" value="{{ auth()->user()->last_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ایمیل</label>
                                <input type="text" name="email" value="{{ auth()->user()->email }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>شماره تماس</label>
                                <input type="text" name="phone" value="{{ auth()->user()->phone }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>آدرس</label>
                                <input type="text" name="address" value="{{ auth()->user()->address }}" class="form-control">
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
