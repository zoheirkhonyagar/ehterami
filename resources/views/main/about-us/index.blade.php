@extends('main.master.index')

@section('content')

    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">درباره ما</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="{{ route('main-index') }}">خانه</a></li>
                <li class="active">درباره ما</li>
            </ul>
        </div>
    </section>

    <!-- Experience since 1999-->
    <section class="section section-md bg-white">
        <div class="shell">
            <div class="range range-70 range-sm-center range-lg-justify">
                <div class="cell-sm-10 cell-md-6 cell-lg-5">
                    <h4>تاریخچه شرکت</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                </div>
                <div class="cell-sm-10 cell-md-6">
                    <div class="row grid-2">
                        <div class="col-xs-12">
                            <img src="images/about-1-273x214.jpg" alt="" width="273" height="214">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Management-->
    <section class="section parallax-container bg-gray-dark">
        <div class="material-parallax"><img src="images/parallax-4.jpg" alt=""></div>
        <div class="parallax-content">
            <div class="section-md">
                <div class="shell">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h4>مدیران ارشد</h4>
                    </div>
                    <div class="range range-30">
                        <div class="cell-sm-6 cell-md-4">
                            <!-- Card creative-->
                            <article class="card-creative">
                                <div class="card-creative__header"><img src="images/team-1-115x119.jpg" alt="" width="115" height="119">
                                </div>
                                <div class="card-creative__main" data-fixed-height="">
                                    <p class="card-creative__title">جان اسنو</p>
                                    <p class="card-creative__subtitle">بنیان گذار</p>
                                    <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                </div>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-4">
                            <!-- Card creative-->
                            <article class="card-creative">
                                <div class="card-creative__header"><img src="images/team-2-115x119.jpg" alt="" width="115" height="119">
                                </div>
                                <div class="card-creative__main" data-fixed-height="">
                                    <p class="card-creative__title">سامی بیگی</p>
                                    <p class="card-creative__subtitle">مدیر کسب و کار</p>
                                    <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                </div>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-4">
                            <!-- Card creative-->
                            <article class="card-creative">
                                <div class="card-creative__header"><img src="images/team-3-115x119.jpg" alt="" width="115" height="119">
                                </div>
                                <div class="card-creative__main" data-fixed-height="">
                                    <p class="card-creative__title">پیتر پارکر</p>
                                    <p class="card-creative__subtitle">مدیر پروژه</p>
                                    <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Responsibility & Eco Standards-->
    <section class="section section-sm bg-white">
        <div class="shell">
            <div class="range range-50 range-sm-center range-md-left range-lg-justify">
                <div class="cell-sm-10 cell-md-6">
                    <h4>اهداف ما</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی</p>
                    <div class="group-3-columns" data-lightgallery="group">
                        <div class="column-item">
                            <a class="thumb-elegant" href="images/image-1-1200x800_original.jpg" data-lightgallery="group-item"><img src="images/image-1-166x139.jpg" alt="" width="166" height="139">
                                <div class="thumb-elegant__overlay"></div>
                            </a>
                        </div>
                        <div class="column-item">
                            <a class="thumb-elegant" href="images/image-2-1200x800_original.jpg" data-lightgallery="group-item"><img src="images/image-2-166x139.jpg" alt="" width="166" height="139">
                                <div class="thumb-elegant__overlay"></div>
                            </a>
                        </div>
                        <div class="column-item">
                            <a class="thumb-elegant" href="images/image-3-1200x800_original.jpg" data-lightgallery="group-item"><img src="images/image-3-166x139.jpg" alt="" width="166" height="139">
                                <div class="thumb-elegant__overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-10 cell-md-6 cell-lg-5">
                    <h4>گواهینامه های ما</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها</p>
                    <div class="group-3-columns" style="max-width: 430px;" data-lightgallery="group">
                        <div class="column-item">
                            <a class="thumb-light" href="images/certificate-1-847x1200.jpg" data-lightgallery="group-item"><img src="images/certificate-1-120x171.jpg" alt="" width="120" height="171">
                                <div class="thumb-light__overlay"></div>
                            </a>
                        </div>
                        <div class="column-item">
                            <a class="thumb-light" href="images/certificate-1-847x1200.jpg" data-lightgallery="group-item"><img src="images/certificate-1-120x171.jpg" alt="" width="120" height="171">
                                <div class="thumb-light__overlay"></div>
                            </a>
                        </div>
                        <div class="column-item">
                            <a class="thumb-light" href="images/certificate-1-847x1200.jpg" data-lightgallery="group-item"><img src="images/certificate-1-120x171.jpg" alt="" width="120" height="171">
                                <div class="thumb-light__overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection