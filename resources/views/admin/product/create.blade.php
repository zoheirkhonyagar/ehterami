@extends('admin.master.index')
@section('content')

<div class="row">

    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><small style="font-size:14px;">افزودن محصول</small></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <form method="POST" action="{{ route('product.store') }}" role="form">
                            @csrf()
                            <div class="form-group">
                                <label>عنوان</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>قیمت هر متر ( تومان )</label>
                                <input type="text" name="price" value="{{ old('price') }}" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"><strong>افزودن</strong></button>
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

