@extends('admin.master.index')
@section('content')

<div class="row">
    
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>ایجاد مدال</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <form method="POST" action="{{ route('medal.store') }}" enctype="multipart/form-data" role="form">
                            @csrf()
                            <div class="form-group">
                                <label>عنوان</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>تصویر</label>
                                <input type="file" id="image" name="image" class="form-control"> 
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