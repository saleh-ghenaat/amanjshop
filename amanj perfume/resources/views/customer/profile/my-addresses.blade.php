@extends('customer.layouts.master-one-col')

@section('head-tag')
    <title>لیست آدرس های شما</title>
@endsection


@section('content')


<!-- start content -->

<!-- start breadcroumb -->

<div class="bread-crumb py-4">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="my-lg-0 my-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('customer.home')}}" class="font-14 text-muted-two">خانه</a></li>
                <li class="breadcrumb-item"><a href="" class="font-14 text-muted-two">پروفایل</a></li>

                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page">  آدرس های من
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- end breadcroumb -->

<div class="content">
    <div class="container-fluid">

        <div class="custom-filter d-lg-none d-block">
            <button class="btn btn-filter-float border-0 main-color-two-bg shadow-box px-4 rounded-3 position-fixed" style="z-index: 999;bottom:80px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="bi bi-list font-20 fw-bold text-white"></i>
                <span class="d-block font-14 text-white">منو</span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">منو</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="panel-nav-logo">
                        <a href="" class="text-center d-block mb-3">
                            <img src="assets/img/logo.png" alt="" class="img-fluid" width="200">
                        </a>
                    </div>
                    <div class="penel-nav">
                        <div class="panel-nav-nav">
                            <nav class="navbar profile-box-nav">
                                <ul class="navbar-nav flex-column">
                                    <li class="nav-item active"><a href="" class="nav-link">
                                        <i class="bi bi-house-door"></i>پروفایل</a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link">
                                        <i class="bi bi-cart-check"></i>سفارش های من <span class="badge rounded-pill badge-spn">5</span></a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link">
                                        <i class="bi bi-pin-map"></i>آدرس های من</a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link">
                                        <i class="bi bi-bell"></i>پیام ها و اطلاعیه ها</a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link">
                                        <i class="bi bi-chat-dots"></i>نظرات من</a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link">
                                        <i class="bi bi-question-circle"></i>درخواست پشتیبانی</a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link">
                                        <i class="bi bi-heart"></i>محصولات مورد علاقه</a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link">
                                        <i class="bi bi-gift"></i>کد های تخفیف من</a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link">
                                        <i class="bi bi-arrow-right-square"></i>خروج از حساب کاربری</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel position-relative">
            <div class="row gy-4">
                <div class="col-lg-3 d-lg-block d-none">
                    <div class="panel-nav-logo">
                        <a href="" class="text-center d-block mb-3">
                            <img src="assets/img/logo.png" alt="" class="img-fluid" width="200">
                        </a>
                    </div>
                    @include('customer.layouts.sidebar')

                </div>
                <div class="col-lg-9">
                    <div class="position-sticky top-0">
                        <div class="panel-header mb-3">
                            <div class="content-box">
                                <div class="container-fluid">
                                    <div class="row gy-5 align-items-center">
                                        <div class="col-md-6 col-8">
                                            <div class="d-flex align-items-center">
                                                <h6> امیر عزیز به پنل کاربری خوش آمدید</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4">
                                            <div class="panel-alert d-flex justify-content-end">
                                                <i class="bi bi-bell pointer"></i>
                                                <span class="count-item rounded-circle">0</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="d-flex align-items-center panel-profile">
                                                <img src="assets/img/user.png" class="img-fluid img-profile-panel rounded-circle me-3 shadow-md" alt="">
                                                <div class="d-grid gap-2">
                                                    <h6 class="font-14 main-color-one-color">حساب کاربری من</h6>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="font-14">
                                                            امیر رضایی</h6>
                                                        <a href="" class="ms-2"><i class="bi bi-pencil-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-title mt-4">
                            <div class="slider-title-desc">
                                <div class="slider-title-title pb-4">
                                    <h2 class="h1 title-font">آدرس های ثبت شده</h2>
                                </div>
                            </div>
                        </div>

                        <div class="penel-form">
                            <div class="content-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="bg-white card addresses-item mb-4 shadow-sm">
                                                <div class="gold-members p-4">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">خانه</h6>
                                                            <p class="text-overflow-2 address-line">
                                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه
                                                                درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با
                                                                نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                                                                خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                                                                داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان
                                                                رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                                                                پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                                            </p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="me-3" data-bs-toggle="modal" data-bs-target="#addressModal" href="#"><i class="bi bi-pencil"></i> </a>
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="bi bi-trash"></i> </a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bg-white card addresses-item mb-4 shadow-sm">
                                                <div class="gold-members p-4">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">خانه</h6>
                                                            <p class="text-overflow-2 address-line">
                                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه
                                                                درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با
                                                                نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                                                                خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                                                                داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان
                                                                رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                                                                پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                                            </p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="me-3" data-bs-toggle="modal" data-bs-target="#addressModal" href="#"><i class="bi bi-pencil"></i> </a>
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="bi bi-trash"></i> </a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bg-white card addresses-item mb-4 shadow-sm">
                                                <div class="gold-members p-4">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">خانه</h6>
                                                            <p class="text-overflow-2 address-line">
                                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه
                                                                درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با
                                                                نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                                                                خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                                                                داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان
                                                                رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                                                                پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                                            </p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="me-3" data-bs-toggle="modal" data-bs-target="#addressModal" href="#"><i class="bi bi-pencil"></i> </a>
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="bi bi-trash"></i> </a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bg-white active card addresses-item mb-4 shadow-sm">
                                                <div class="gold-members p-4">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">خانه</h6>
                                                            <p class="text-overflow-2 address-line">
                                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه
                                                                درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با
                                                                نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                                                                خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                                                                داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان
                                                                رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                                                                پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                                            </p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="me-3" data-bs-toggle="modal" data-bs-target="#addressModal" href="#"><i class="bi bi-pencil"></i> </a>
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="bi bi-trash"></i> </a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bg-white card addresses-item mb-4 shadow-sm">
                                                <div class="gold-members p-4">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">خانه</h6>
                                                            <p class="text-overflow-2 address-line">
                                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه
                                                                درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با
                                                                نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                                                                خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                                                                داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان
                                                                رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                                                                پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                                            </p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="me-3" data-bs-toggle="modal" data-bs-target="#addressModal" href="#"><i class="bi bi-pencil"></i> </a>
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="bi bi-trash"></i> </a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bg-white active border-dark border-2 card addresses-item mb-4 shadow-sm">
                                                <div class="gold-members p-4">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">خانه</h6>
                                                            <p class="text-overflow-2 address-line">
                                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه
                                                                درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با
                                                                نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                                                                خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                                                                داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان
                                                                رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                                                                پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                                            </p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="me-3" data-bs-toggle="modal" data-bs-target="#addressModal" href="#"><i class="bi bi-pencil"></i> </a>
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="bi bi-trash"></i> </a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end content -->

<!--start cart canvas-->

@include('customer.layouts.cartbar')

<!--end cart canvas-->

@endsection

