@extends('admin.master.index')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                    <h5>لیست نقل قول ها</h5>
                    <a class="btn btn-primary btn-xs" style="margin: 0px 20px 0px 0;font-size: 20px;line-height: 34px;" href="{{ route('quote.create') }}">ایجاد نقل قول</a>
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
                            <th>نام کامل</th>
                            <th>نام شرکت</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quotes as $quote)
                            <tr>
                                <td>{{ $quote->fullname }}</td>
                                <td>{{ $quote->company_name }}</td>
                                <td class="text-navy">
                                    <form action="{{ route('quote.destroy' , [ 'id' => $quote->id ]) }}" method="post">
                                        {{ method_field('delete') }}
                                        {{ csrf_field() }}
                                        <a class="btn btn-info btn-xs"  href="{{ route( 'quote.edit' , [ 'id' => $quote->id ] ) }}">ویرایش</a>
                                        <button type="submit" class="btn btn-danger btn-xs">حذف</button>
                                    </form>
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