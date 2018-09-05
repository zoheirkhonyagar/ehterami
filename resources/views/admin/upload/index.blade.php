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
                <form id="upload" class="form-horizontal" action="{{ route('upload-image') }}" enctype="multipart/form-data" method="post">
                    @csrf()
                    <div class="form-group"><label class="col-lg-2 control-label">ایمیل</label>
                        <div class="col-lg-10">
                            <input type="file" id="images" name="images[]" multiple class="form-control"> 
                        </div>
                    </div>
                    <div class="progress">
                        <div id="progress-bar" style="width: 0%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" role="progressbar" class="progress-bar progress-bar-success">
                            <span id="">0%</span>
                        </div>
                    </div>
                    @if(count($errors))
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li style="color:red">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

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

@section('custom-scripts')
<script>
    $('#submit').click(function(e){
        
        e.preventDefault();
        
        let form = document.getElementById('upload');
    

        let progressBar = $('#progress-bar');

        let progressPercentage = $('#progress-bar span');
        
        $('#progress-bar span').html('0 %');
        
        progressBar.css('width' , '0');

        let formData = new FormData(form);
    
        sendAjaxRequest(progressBar,progressPercentage,formData);

    });
    

    function sendAjaxRequest(progressBar,progressPercentage,formData)
    {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '{{route("upload-image")}}',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
            },
            error: function(data) {
                let errors = data.responseJSON;
                console.log(errors.errors.images);
            },
            xhr: function () {
                var xhr = $.ajaxSettings.xhr();

                xhr.upload.addEventListener('progress' , function(e){
                    progressBar.css('width' , Math.floor(e.loaded / e.total * 100) + '%');
                    progressPercentage.html(Math.floor(e.loaded / e.total * 100) + ' %')
                });
            
                return xhr;
            },
            
        });
    }

    

    // function bytesToSize(bytes) {
    //     let sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        
    //     if (bytes == 0) return '0 Byte';
        
    //     let i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
        
    //     return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    // };

</script>
@endsection