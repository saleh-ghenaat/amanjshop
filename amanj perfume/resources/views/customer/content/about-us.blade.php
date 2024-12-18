@extends('customer.layouts.master-one-col')


@section('content')




<!-- start content -->

<!-- start breadcroumb -->

<div class="bread-crumb py-4">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="my-lg-0 my-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('customer.home')}}" class="font-14 text-muted-two">خانه</a></li>

                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page"> درباره ما
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- end breadcroumb -->


<div class="content">
    <div class="container-fluid">
        <div class="row gy-3 align-items-center">
            <div class="col-lg-6">
                <div class="about-us-title">
                    <h2 class="title-font"><span class="main-color-one-color">فروشگاه</span> آنلاین </h2>
                    <h3 class="fw-normal">شاهان کالا</h3>
                </div>
                <p class="text-muted text-justify font-16">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/about.png" alt="">
            </div>
        </div>
    </div>
</div>


<div class="about-us py-20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-us-image">
                    <img src="assets/img/about-us.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-desc">
                    <div class="about-us-title">
                        <div class="row gy-3">
                            <div class="col-lg-4">
                                <h6 class="main-color-one-color">فروشگاه</h6>
                                <h4 class="title-font mt-3">شاهان کالا</h4>
                            </div>
                            <div class="col-lg-8">
                                <div class="about-us-social">
                                    <nav class="navbar navbar-expand justify-content-lg-end justify-content-start">
                                        <ul class="navbar-nav">
                                            <li class="nav-item"><a href="" class="nav-link text-muted-two"><i class="bi bi-instagram"></i></a></li>
                                            <li class="nav-item"><a href="" class="nav-link text-muted-two"><i class="bi bi-twitter"></i></a></li>
                                            <li class="nav-item"><a href="" class="nav-link text-muted-two"><i class="bi bi-linkedin"></i></a></li>
                                            <li class="nav-item"><a href="" class="nav-link text-muted-two"><i class="bi bi-telegram"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-us-text">
                        <p class="text-muted text-justify mb-0 mt-3">
                            با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی و کارگاهی را دارا می باشد و با گردهم آوردن متخصصان این عرصه بالغ بر ده سال است که برند را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است. همچنین برای ارائه هرچه تمام تر فعالیت خود از سال فروشگاه اینترنتی ابزار را راه اندازی نموده است. به مدیریت محمدرضا شروع به فعالیت کرده و همچنان با سرعت هرچه تمام تر در حال به روز رسانی فعالیت های خود و ارائه انواع خدمات به مشتریان گرامی در سراسر ایران به صورت حضوری و آنلاین می باشد را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است. همچنین برای ارائه هرچه تمام تر فعالیت خود از سال فروشگاه اینترنتی ابزار را راه اندازی نموده است. ابزار محسن به مدیریت محمدرضا شروع به فعالیت کرده و همچنان با سرعت هرچه تمام تر در حال به روز رسانی فعالیت های خود و ارائه انواع خدمات به مشتریان گرامی در سراسر ایران به صورت حضوری و آنلاین می باشد

                        </p>
                    </div>
                    <div class="about-us-link mt-4 d-flex align-items-center">
                        <span class="time-work"><i class="bi bi-clock"></i> ساعت کاری 9 الی 19</span>
                        <a href="" class="btn main-color-one-bg">بیشتر <i class="bi bi-caret-left-fill ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end content -->

<div class="mobile-footer d-lg-none d-flex">
    <div class="parent">
        <div class="item" onclick="topFunction()">
            <i class="bi bi-chevron-up font-20"></i>
        </div>
        <div class="item">
            <a href="index.html">
                <i class="bi bi-house font-20"></i>
            </a>
        </div>
        <div class="item item-float">
            <a href="#offcanvasCart" data-bs-toggle="offcanvas" href="#offcanvasCart" role="button"
               aria-controls="offcanvasCart">
                <i class="bi bi-bag font-20"></i>
            </a>
        </div>
        <div class="item ">
            <a href="index.html">
                <i class="bi bi-archive"></i>
            </a>
        </div>
        <div class="item">
            <a href="index.html">
                <i class="bi bi-person"></i>
            </a>
        </div>
    </div>
</div>


<!-- end mobile menu -->

<!--start cart canvas-->

@include('customer.layouts.cart-canvas')

<!--end cart canvas-->

<div class="float-btn">
    <div class="container-fluid">
        <!-- contact us floating -->
        <div id="btncollapzion" class=" btn_collapzion"></div>
        <div class="" id="contactOverlay"></div>
        <!-- end contact us floating -->
    </div>
</div>

@endsection
