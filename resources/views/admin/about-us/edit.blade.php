@extends('admin.master.index')
@section('content')

<div class="row">
    
    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><small style="font-size:14px;">ویرایش نقل قول</small></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6 b-r">
                        <form method="POST" action="{{ route('quote.update' , $quote->id) }}" enctype="multipart/form-data" role="form">
                            @method('PATCH')
                            @csrf()
                            <div class="form-group">
                                <label>نام کامل</label>
                                <input type="text" name="fullname" value="{{ $quote->fullname }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>نام شرکت</label>
                                <input type="text" name="company_name" value="{{ $quote->company_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>محتوای نقل قول</label>
                                <textarea name="quotation" class="form-control" cols="30" rows="5">{{ $quote->quotation }}</textarea>
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