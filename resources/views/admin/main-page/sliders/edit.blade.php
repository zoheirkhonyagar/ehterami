@extends('admin.master.index')
@section('content')

<div class="row">
    
    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>فرم ساده <small>فرم ساده ورود</small></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6 b-r">
                        <form method="POST" action="{{ route('slider.update' , $slider->id) }}" enctype="multipart/form-data" role="form">
                            @method('PATCH')
                            @csrf()
                            <div class="form-group">
                                <label>نام اسلایدر</label>
                                <input type="text" name="name" value="{{ $slider->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>عنوان اسلایدر</label>
                                <input type="text" name="title" value="{{ $slider->title }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>توضیحات اسلایدر</label>
                                <input type="text" name="description" value="{{ $slider->description }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>اولویت</label>
                                <input type="text" name="priority" value="{{ $slider->priority }}" class="form-control">
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