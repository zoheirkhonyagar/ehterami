@extends('admin.master.index')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                    <h5>پیام های ارسالی کاربران</h5>
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
                            <th>نام و نام خانوادگی</th>
                            <th>شماره تماس</th>
                            <th>ایمیل</th>
                            <th>تاریخ ارسال</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $contact->fullname }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ jdate($contact->created_at)->format('%d %B %Y') }}</td>
                            </tr>
                    </tbody>
                </table>
                <div class="box">
                    <h3>متن پیام : </h3>
                    <div>
                        {{ $contact->body }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection