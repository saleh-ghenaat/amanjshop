@extends('customer.layouts.master-one-col')

@section('head-tag')
<title>قالب شاهان</title>
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">

@endsection


@section('content')

<!-- start breadcroumb -->

<div class="bread-crumb py-4">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="my-lg-0 my-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#" class="font-14 text-muted-two">خانه</a></li>
                <li class="breadcrumb-item"><a href="#" class="font-14 text-muted-two">فروشگاه</a></li>
                <li class="breadcrumb-item"><a href="#" class="font-14 text-muted-two">گوشی هوشمند</a></li>
                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page">گوشی شیائومی
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- end breadcroumb -->

<!-- start content -->

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
                                    <li class="nav-item active"><a href="{{ route('customer.profile.profile') }}" class="nav-link">
                                            <i class="bi bi-house-door"></i>پروفایل</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('customer.profile.orders') }}" class="nav-link">
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
                                    <li class="nav-item"><a href="{{ route('customer.profile.my-favorites') }}" class="nav-link">
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
                    <div class="penel-nav">
                        <div class="panel-nav-nav">
                            <nav class="navbar profile-box-nav">
                                <ul class="navbar-nav flex-column">
                                    <li class="nav-item active"><a href="{{ route('customer.profile.profile') }}" class="nav-link">
                                            <i class="bi bi-house-door"></i>پروفایل</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('customer.profile.orders') }}" class="nav-link">
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
                                    <li class="nav-item"><a href="{{ route('customer.profile.my-favorites') }}" class="nav-link">
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
                                                        <a href="{{ route('customer.profile.edit-profile') }}" class="ms-2"><i class="bi bi-pencil-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel-latest-order">

                            <div class="slider-title mt-4">
                                <div class="slider-title-desc">
                                    <div class="slider-title-title pb-4">
                                        <h2 class="h1"><span class="title-font main-color-one-color">جزییات</span> سفارش </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="shoping-proccess slider-parent">
                                <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                                    <div class="step completed">
                                        <div class="step-icon-wrap">
                                            <div class="step-icon"><i class="bi bi-cart-check fs-2"></i></div>
                                        </div>
                                        <h4 class="step-title">سفارش تایید شده</h4>
                                    </div>
                                    <div class="step completed">
                                        <div class="step-icon-wrap">
                                            <div class="step-icon"><i class="bi bi-gear fs-2"></i></div>
                                        </div>
                                        <h4 class="step-title">پردازش سفارش</h4>
                                    </div>
                                    <div class="step">
                                        <div class="step-icon-wrap">
                                            <div class="step-icon"><i class="bi bi-bus-front fs-2"></i></div>
                                        </div>
                                        <h4 class="step-title">تحویل به پست</h4>
                                    </div>
                                    <div class="step">
                                        <div class="step-icon-wrap">
                                            <div class="step-icon"><i class="fs-2 bi bi-house-check"></i></div>
                                        </div>
                                        <h4 class="step-title">تحویل داده شده</h4>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="orders-item">
                            <div class="ui-boxs">
                                <div class="ui-box">
                                    <div class="ui-box-item slider-parent ui-box-white">

                                        <div class="ui-box-item-desc p-0">
                                            <div class="orders">
                                                <div class="order-item">
                                                    <div class="order-item-detail">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <span class="text-mute">کد پیگیری سفارش</span>
                                                                <strong>17745651</strong>
                                                            </li>
                                                            <li class="nav-item">
                                                                <span class="text-mute">تاریخ ثبت سفارش</span>
                                                                <strong>13 آبان 1401</strong>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="order-item-detail" style="padding-top: 20px;">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <span class="text-mute">تحویل گیرنده</span>
                                                                <strong>علی علوی</strong>
                                                            </li>
                                                            <li class="nav-item">
                                                                <span class="text-mute">شماره موبایل </span>
                                                                <strong>09165555555</strong>
                                                            </li>
                                                            <li class="nav-item w-100">
                                                            </li>
                                                            <li class="nav-item">
                                                                <span class="text-mute">آدرس</span>
                                                                <strong>تهران پاسداران انتهای خیابان پلاک
                                                                    0</strong>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="order-item-detail" style="padding-top: 20px;">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <span class="text-mute">مبلغ</span>
                                                                <strong>25,000,000 تومان</strong>
                                                            </li>
                                                            <li class="nav-item">
                                                                <strong>پرداخت اینترنتی</strong>
                                                            </li>
                                                            <li class="nav-item w-100">
                                                            </li>
                                                            <li class="nav-item">
                                                                <span class="text-mute">کد تخفیف</span>
                                                                <strong>2,000,000 تومان</strong>
                                                            </li>
                                                            <li class="nav-item">
                                                                <span class="text-mute">
                                                                    هزینه ارسال براساس وزن و حجم
                                                                </span>
                                                                <strong>200,000 تومان</strong>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="order-item-detail" style="padding-top: 20px;">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <strong>مرسوله 1 از 1</strong>
                                                            </li>
                                                            <li class="nav-item">
                                                                <strong class="text-danger">ارسال عادی</strong>
                                                            </li>
                                                            <li class="nav-item w-100">
                                                            </li>
                                                            <li class="nav-item">
                                                                <span class="text-mute">زمان تحویل</span>
                                                                <strong>سه‌شنبه ۳ تیر بازه ۹ - ۲۲
                                                                </strong>
                                                            </li>
                                                            <li class="nav-item">
                                                                <span class="text-mute">هزینه ارسال</span>
                                                                <strong>200,000 تومان</strong>
                                                            </li>
                                                            <li class="nav-item">
                                                                <span class="text-mute">مبلغ مرسوله </span>
                                                                <strong>200,000 تومان</strong>
                                                            </li>
                                                        </ul>
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

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
    <div class="offcanvas-header shadow-md">
        <h5 class="offcanvas-title title-font" id="offcanvasCartLabel">سبد خرید <small class="text-muted font-14 ms-1">(1
                مورد)</small></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav cart-canvas-parent">
            <li class="nav-item">
                <div class="cart-canvas">
                    <div class="row align-items-center">
                        <div class="col-4 ps-0">
                            <img src="assets/img/product/wach1.jpg" alt="">
                        </div>
                        <div class="col-8">
                            <a href="">
                                <h3 class="text-overflow-1 title-font font-14">ساعت مچی عقربه‌ای مردانه اینویکتا مدل
                                    Automatico Ghost Reserve
                                </h3>
                                <div class="cart-canvas-price my-3 d-flex align-items-center">
                                    <p class="mb-0 text-muted me-2 font-16 text-decoration-line-through">5,400,000</p>
                                    <h6 class="title-font main-color-one-color">3,200,000 تومان</h6>
                                </div>
                            </a>
                            <div class="cart-canvas-foot d-flex align-items-center justify-content-between">
                                <div class="cart-canvas-count">
                                    <span>تعداد:</span>
                                    <span class="fw-bold main-color-one-color">3</span>
                                </div>
                                <div class="cart-canvas-delete">
                                    <a href="" class="btn"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="cart-canvas">
                    <div class="row align-items-center">
                        <div class="col-4 ps-0">
                            <img src="assets/img/product/wach3.jpg" alt="">
                        </div>
                        <div class="col-8">
                            <a href="">
                                <h3 class="text-overflow-1 title-font font-14">ساعت مچی عقربه‌ای مردانه اینویکتا مدل
                                    Automatico Ghost Reserve
                                </h3>
                                <div class="cart-canvas-price my-3 d-flex align-items-center">
                                    <p class="mb-0 text-muted me-2 font-16 text-decoration-line-through">5,400,000</p>
                                    <h6 class="title-font main-color-one-color">3,200,000 تومان</h6>
                                </div>
                            </a>
                            <div class="cart-canvas-foot d-flex align-items-center justify-content-between">
                                <div class="cart-canvas-count">
                                    <span>تعداد:</span>
                                    <span class="fw-bold main-color-one-color">3</span>
                                </div>
                                <div class="cart-canvas-delete">
                                    <a href="" class="btn"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="cart-canvas-foots bg-white shadow-md">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="cart-canvas-foot-sum">
                        <p class="text-muted mb-2">جمع کل</p>
                        <h5 class="title-font">11,000,000 تومان</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="cart-canvas-foot-link text-end">
                        <a href="" class="btn border-0 main-color-green text-white"><i
                                class="bi bi-arrow-left me-1"></i> تکمیل خرید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

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