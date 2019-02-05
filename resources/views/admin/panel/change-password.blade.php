@extends('admin.master.index')
@section('content')

<div class="row">

    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><small style="font-size:14px;">تغییر رمز</small></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <form method="POST" action="{{ route('change-profile-password') }}" enctype="multipart/form-data" role="form">
                            @csrf()
                            <div class="form-group">
                                <label>رمز عبور</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <div class="form-group">
                                <label>تکرار رمز عبور</label>
                                <input class="form-control" type="password" name="password_confirmation">
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
