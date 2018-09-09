@extends('admin.master.index')

@section('custom-meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')

<div class="row">
    <div class="col-lg-5">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>آپلود تصویر</h5>
            </div>
            <div class="ibox-content">
                <form id="upload" class="form-horizontal" action="{{ route('single-upload-image') }}" enctype="multipart/form-data" method="post">
                    @csrf()
                    <div class="form-group"><label class="col-lg-2 control-label">تصویر</label>
                        <div class="col-lg-10">
                            <input type="file" id="images" name="image" multiple class="form-control"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-white" id="submit" type="submit">آپلود</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection