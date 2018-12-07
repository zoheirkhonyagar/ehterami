@extends('admin.master.index')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                    <h5>تاریخچه</h5>
                    <a class="btn btn-primary btn-xs" style="margin: 0px 20px 0px 0;font-size: 20px;line-height: 34px;" href="{{ route('about-us-history.create') }}">ایجاد تاریخچه</a>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up">
                        </i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times">
                        </i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-hover no-margins">
                    <thead>
                        <tr>
                            <th>متن تاریخچه</th>
                            <th>تصویر</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{!! $history->body !!}</td>
                                <td><img src="{{ asset('uploads') . '/' . $history->image }}" alt=""></td>
                                <td class="text-navy">
                                    <a class="btn btn-info btn-xs"  href="{{ route( 'about-us-history.edit' , [ 'id' => $history->id ] ) }}">ویرایش</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection