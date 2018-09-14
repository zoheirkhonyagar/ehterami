@extends('admin.master.index')
@section('content')

<div class="row">
    
    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><small style="font-size:14px;">اطلاعات کلی وبسایت</small></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6 b-r">
                        <form method="POST" action="{{ route('information.update' , $information->id) }}" enctype="multipart/form-data" role="form">
                            @method('PATCH')
                            @csrf()
                            <div class="form-group">
                                <label>نام وبسایت</label>
                                <input type="text" name="app_name" value="{{ $information->app_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>تجربیات</label>
                                <textarea name="experience" class="form-control" cols="30" rows="5">{{ $information->experience }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>لینک ویدیو</label>
                                <input type="text" name="video_url" value="{{ $information->video_url }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>توئیتر</label>
                                <input type="text" name="twitter" value="{{ $information->twitter }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>فیسبوک</label>
                                <input type="text" name="facebook" value="{{ $information->facebook }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>اینستاگرام</label>
                                <input type="text" name="instagram" value="{{ $information->instagram }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>تلگرام</label>
                                <input type="text" name="telegram" value="{{ $information->telegram }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>آدرس</label>
                                <textarea name="address" class="form-control" cols="30" rows="2">{{ $information->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>شماره تماس 1</label>
                                <input type="text" name="phone_number1" value="{{ $information->phone_number1 }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>شماره تماس 2</label>
                                <input type="text" name="phone_number2" value="{{ $information->phone_number2 }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ایمیل</label>
                                <input type="text" name="email" value="{{ $information->email }}" class="form-control">
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