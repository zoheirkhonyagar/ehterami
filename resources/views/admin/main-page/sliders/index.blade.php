@extends('admin.master.index')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                فهرست اسلاید ها</h5>
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
                            <th>اولویت</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{ $slider->name }}</td>
                                <td>{{ $slider->priority }}</td>
                                <td class="text-navy">
                                    <form action="{{ route('slider.destroy' , [ 'id' => $slider->id ]) }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <a class="btn btn-info btn-xs"  href="{{ route( 'slider.edit' , [ 'id' => $slider->id ] ) }}">ویرایش</a>
                                    <button type="submit" class="btn btn-danger btn-xs">حذف</button>
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