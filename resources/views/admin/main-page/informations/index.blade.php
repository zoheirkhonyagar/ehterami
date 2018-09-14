@extends('admin.master.index')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                    <h5><small style="font-size:14px;">اطلاعات کلی</small></h5>
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
                            <th>نام</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($informations as $information)
                            <tr>
                                <td>اطلاعات کلی وبسایت</td>
                                <td class="text-navy">
                                    <a class="btn btn-info btn-xs"  href="{{ route( 'information.edit' , [ 'id' => $information->id ] ) }}">ویرایش</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection