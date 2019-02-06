@extends('admin.master.index')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                    <h5>کاربران</h5>
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
                            <th>نام مشتری</th>
                            <th>شماره تماس</th>
                            <th>ایمیل</th>
                            <th>نوع کاربر</th>
                            <th>تاریخ عضویت</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->fullname() }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ jdate($user->created_at)->format('%d %B %Y') }}</td>
                                <td class="text-navy">
                                    {{-- <form action="{{ route('payment.destroy' , [ 'id' => $user->id ]) }}" method="post"> --}}
                                        {{-- {{ method_field('delete') }} --}}
                                        {{-- {{ csrf_field() }} --}}
                                        <a class="btn btn-info btn-xs"  href="{{ route( 'user.edit' , [ 'id' => $user->id ] ) }}">ویرایش</a>
                                        {{-- <button type="submit" class="btn btn-danger btn-xs">حذف</button> --}}
                                    {{-- </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{ $users->links() }}

@endsection
