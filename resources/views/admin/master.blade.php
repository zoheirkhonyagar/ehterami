<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>عنوان پروژه</title>
        <link rel="stylesheet" href="{{ mix('/css/admin.css') }}">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <span>
                                    <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear">
                                        <span class="block m-t-xs">
                                            <strong class="font-bold">
                                            ایمان عباسی</strong>
                                        </span>
                                        <span class="text-muted text-xs block">
                                            مدیر هنری <b class="caret">
                                            </b>
                                        </span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu animated fadeInLeft m-t-xs">
                                    <li>
                                        <a href="profile.html">
                                        پروفایل</a>
                                    </li>
                                    <li>
                                        <a href="contacts.html">
                                        مخاطبین</a>
                                    </li>
                                    <li>
                                        <a href="mailbox.html">
                                        ایمیل</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="login.html">
                                        خروج</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                لوگو
                            </div>
                        </li>
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-th-large"></i>
                                <span class="nav-label">داشبورد ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bar-chart-o">
                                </i>
                                <span class="nav-label">
                                گراف ها</span>
                                <span class="fa arrow">
                                </span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="graph_flot.html">
                                    نمودار های فلوت</a>
                                </li>
                                <li>
                                    <a href="graph_morris.html">
                                    نمودار های موریس</a>
                                </li>
                                <li>
                                    <a href="graph_rickshaw.html">
                                    نمودار های ریکشا</a>
                                </li>
                                <li>
                                    <a href="graph_chartjs.html">
                                    نمودار های جی کوئری چارت</a>
                                </li>
                                <li>
                                    <a href="graph_chartist.html">
                                    نمودار های چارتیست</a>
                                </li>
                                <li>
                                    <a href="graph_peity.html">
                                    نمودار های پیتی</a>
                                </li>
                                <li>
                                    <a href="graph_sparkline.html">
                                    نمودار های اسپارک لاین</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                                <i class="fa fa-bars"></i>
                            </a>
                            <!-- <form role="search" class="navbar-form-custom" action="search_results.html">
                                <div class="form-group">
                                    <input type="text" placeholder="جستجو" class="form-control" name="top-search" id="top-search">
                                </div>
                            </form> -->
                        </div>
                        <ul class="nav navbar-top-links navbar-left">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">به بخش مدیریت خوش آمدید</span>
                            </li>
                            <li>
                                <span class="m-r-sm text-muted welcome-message">آی پی شما : <strong class="ip">192.168.0.0</strong></span>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-sign-out"></i>
                                    خروج
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <span class="label label-success pull-left">
                                    ماهانه</span>
                                    <h5>
                                    درامد</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">
                                    40 886,200</h1>
                                    <div class="stat-percent font-bold text-success">
                                        98% <i class="fa fa-bolt">
                                        </i>
                                    </div>
                                    <small>
                                    درامد کل</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <span class="label label-info pull-left">
                                    سالیانه</span>
                                    <h5>
                                    سفارشات</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">
                                    275,800</h1>
                                    <div class="stat-percent font-bold text-info">
                                        20% <i class="fa fa-level-up">
                                        </i>
                                    </div>
                                    <small>
                                    سفارش جدید</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <span class="label label-primary pull-left">
                                    امروز</span>
                                    <h5>
                                    بازدیدکننده</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">
                                    106,120</h1>
                                    <div class="stat-percent font-bold text-navy">
                                        44% <i class="fa fa-level-up">
                                        </i>
                                    </div>
                                    <small>
                                    بازدیدکننده جدید</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <span class="label label-danger pull-left">
                                    مقدار کم</span>
                                    <h5>
                                    فعالیت کاربر</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">
                                    80,600</h1>
                                    <div class="stat-percent font-bold text-danger">
                                        38% <i class="fa fa-level-down">
                                        </i>
                                    </div>
                                    <small>
                                    در ماه اول</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>
                                    پیام ها</h5>
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
                                <div class="ibox-content ibox-heading">
                                    <h3>
                                    <i class="fa fa-envelope-o">
                                    </i>
                                    پیام جدید</h3>
                                    <small>
                                    <i class="fa fa-tim">
                                    </i>
                                    شما 22 پیام جدید دارید.</small>
                                </div>
                                <div class="ibox-content">
                                    <div class="feed-activity-list">
                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-left text-navy">
                                                1 ماه قبل</small>
                                                <strong>
                                                مریم</strong>
                                                <div>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                                <small class="text-muted">
                                                امروز 5:60 ب.ظ - 12.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-left">
                                                2 ماه قبل</small>
                                                <strong>
                                                علی</strong>
                                                <div>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                                <small class="text-muted">
                                                امروز 2:23 ق.ظ - 11.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-left">
                                                2 ماه قبل</small>
                                                <strong>
                                                ایمان</strong>
                                                <div>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                                <small class="text-muted">
                                                امروز 2:23 ق.ظ - 11.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-left">
                                                2 ماه قبل</small>
                                                <strong>
                                                ایمان</strong>
                                                <div>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                                <small class="text-muted">
                                                امروز 2:23 ق.ظ - 11.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-left">
                                                2 ماه قبل</small>
                                                <strong>
                                                عباسی</strong>
                                                <div>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                                <small class="text-muted">
                                                امروز 2:23 ق.ظ - 11.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-left">
                                                2 ماه قبل</small>
                                                <strong>
                                                علی</strong>
                                                <div>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                                <small class="text-muted">
                                                امروز 2:23 ق.ظ - 11.06.2014</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <h5>
                                            فهرست پروژه های کاربران</h5>
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
                                                        <th>
                                                        وضعیت</th>
                                                        <th>
                                                        تاریخ</th>
                                                        <th>
                                                        کاربر</th>
                                                        <th>
                                                        مقدار</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <small>
                                                            در حال بررسی...</small>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                        11:20 ب.ظ</td>
                                                        <td>
                                                        علی</td>
                                                        <td class="text-navy">
                                                            <i class="fa fa-level-up">
                                                            </i>
                                                        24% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-warning">
                                                            لغو شده</span>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                        10:40 ق.ظ</td>
                                                        <td>
                                                        مریم</td>
                                                        <td class="text-navy">
                                                            <i class="fa fa-level-up">
                                                            </i>
                                                        66% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <small>
                                                            در حال بررسی...</small>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                        11:20 ب.ظ</td>
                                                        <td>
                                                        علی</td>
                                                        <td class="text-navy">
                                                            <i class="fa fa-level-up">
                                                            </i>
                                                        24% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <small>
                                                            در حال بررسی...</small>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                        11:20 ب.ظ</td>
                                                        <td>
                                                        سارا</td>
                                                        <td class="text-navy">
                                                            <i class="fa fa-level-up">
                                                            </i>
                                                        22% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <small>
                                                            در حال بررسی...</small>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                        11:20 ب.ظ</td>
                                                        <td>
                                                        علی</td>
                                                        <td class="text-navy">
                                                            <i class="fa fa-level-up">
                                                            </i>
                                                        50% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary">
                                                            کامل شده</span>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                        04:10 ق.ظ</td>
                                                        <td>
                                                        مریم</td>
                                                        <td class="text-navy">
                                                            <i class="fa fa-level-up">
                                                            </i>
                                                        66% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <small>
                                                            در حال بررسی...</small>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                        11:20 ب.ظ</td>
                                                        <td>
                                                        علی</td>
                                                        <td class="text-navy">
                                                            <i class="fa fa-level-up">
                                                            </i>
                                                        23% </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <h5>
                                            معاملات در سراسر جهان</h5>
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
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <table class="table table-hover margin bottom">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 1%" class="text-center">
                                                                شماره </th>
                                                                <th>
                                                                معامله</th>
                                                                <th class="text-center">
                                                                تاریخ</th>
                                                                <th class="text-center">
                                                                میزان</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">
                                                                1</td>
                                                                <td>
                                                                    درب امنیتی
                                                                </td>
                                                                <td class="text-center small">
                                                                16 آبان 1393</td>
                                                                <td class="text-center">
                                                                    <span class="label label-primary">
                                                                    483.00 تومان</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                2</td>
                                                                <td>
                                                                    لورم ایپسوم
                                                                </td>
                                                                <td class="text-center small">
                                                                16 آبان 1393</td>
                                                                <td class="text-center">
                                                                    <span class="label label-primary">
                                                                    327.00 تومان</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                3</td>
                                                                <td>
                                                                    لورم ایپسوم
                                                                </td>
                                                                <td class="text-center small">
                                                                16 آبان 1393</td>
                                                                <td class="text-center">
                                                                    <span class="label label-warning">
                                                                    125.00 تومان</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <strong>کلیه حقوق محفوظ است</strong>
                        </div>
                        <div class="col-xs-12 developer-desc">
                            پیاده سازی با <i class="fa fa-heart" aria-hidden="true"></i> توسط :
                            <a href="https://github.com/zoheirkhonyagar" target="_blank">زهیر خنیاگر</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <script type="text/javascript" src="{{ mix('/js/admin.js') }}"></script>
        <script>

        </script>
    </body>
</html>