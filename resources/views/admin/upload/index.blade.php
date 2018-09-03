@extends('admin.master.index')

@section('content')

<div class="row">
    <div class="col-lg-5">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>آپلود تصویر</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{ route('upload-image') }}" enctype="multipart/form-data" method="post">
                    @csrf()
                    <div class="form-group"><label class="col-lg-2 control-label">ایمیل</label>
                        <div class="col-lg-10">
                            <input type="file" name="image" class="form-control"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <ul>
                                <li style="color:red"></li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-white" type="submit">ورود</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection