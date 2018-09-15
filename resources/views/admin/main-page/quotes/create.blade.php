@extends('admin.master.index')
@section('content')

<div class="row">
    
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>ایجاد نقل قول</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6 b-r">
                        <form method="POST" action="{{ route('quote.store') }}" enctype="multipart/form-data" role="form">
                            @csrf()
                            <div class="form-group">
                                <label>نام کامل</label>
                                <input type="text" name="fullname" value="{{ old('fullname') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>نام شرکت</label>
                                <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>محتوای نقل قول</label>
                                <textarea name="quotation" class="form-control" cols="30" rows="5">{{ old('quotation') }}</textarea>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"><strong>ایجاد</strong></button>
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