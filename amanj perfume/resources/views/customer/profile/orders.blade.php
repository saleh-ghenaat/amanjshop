@extends('customer.layouts.master-one-col')

@section('head-tag')
<title>لیست علاقه مندی های شما</title>
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

                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page">  سفارش های من
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
                        <div class="panel-latest-order">

                            <div class="slider-title">
                                <div class="slider-title-desc">
                                    <div class="slider-title-title pb-4">
                                        <h2 class="h1"><span class="title-font main-color-one-color">آخرین</span> سفارشات</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive shadow-box roundedTable p-0">
                                <table class="table  main-table rounded-0">
                                    <thead class="text-center">
                                    <tr>
                                        <th class="title-font">#</th>
                                        <th class="title-font">شماره سفارش</th>
                                        <th class="title-font">تاریخ ثبت سفارش</th>
                                        <th class="title-font">مبلغ پرداختی</th>
                                        <th class="title-font">وضعیت سفارش</th>
                                        <th class="title-font">جزییات</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <tr>
                                        <td class="font-14">1</td>
                                        <td class="font-14">2354632</td>
                                        <td class="font-14">سه شنبه 13 دی 1401</td>
                                        <td class="font-14">580,000 تومان</td>
                                        <td class="font-14"><a href="" class="title-font">سفارش مرجوع شده</a></td>
                                        <td class="font-14">
                                            <a href="" class="btn border-0 main-color-one-bg waves-effect waves-light"><i class="bi bi-chevron-left"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-14">2</td>
                                        <td class="font-14">2354632</td>
                                        <td class="font-14">سه شنبه 13 دی 1401</td>
                                        <td class="font-14">580,000 تومان</td>
                                        <td class="font-14"><a href="" class="title-font">سفارش لغو شده</a></td>
                                        <td class="font-14">
                                            <a href="" class="btn border-0 main-color-one-bg waves-effect waves-light"><i class="bi bi-chevron-left"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-14">1</td>
                                        <td class="font-14">2354632</td>
                                        <td class="font-14">سه شنبه 13 دی 1401</td>
                                        <td class="font-14">580,000 تومان</td>
                                        <td class="font-14"><a href="" class="title-font">سفارش تحویل داده شده</a></td>
                                        <td class="font-14">
                                            <a href="" class="btn border-0 main-color-one-bg waves-effect waves-light"><i class="bi bi-chevron-left"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-14">2</td>
                                        <td class="font-14">2354632</td>
                                        <td class="font-14">سه شنبه 13 دی 1401</td>
                                        <td class="font-14">580,000 تومان</td>
                                        <td class="font-14"><a href="" class="title-font">سفارش در انتظار پرداخت</a></td>
                                        <td class="font-14">
                                            <a href="" class="btn border-0 main-color-one-bg waves-effect waves-light"><i class="bi bi-chevron-left"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="my-paginate mt-5">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link rounded-3" href="#"><i class="bi bi-chevron-right"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link rounded-3" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link rounded-3" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link rounded-3" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link rounded-3" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link rounded-3" href="#">14</a></li>
                                        <li class="page-item"><a class="page-link rounded-3" href="#">15</a></li>
                                        <li class="page-item"><a class="page-link rounded-3" href="#">16</a></li>
                                        <li class="page-item">
                                            <a class="page-link rounded-3" href="#"><i class="bi bi-chevron-left"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
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

@include('customer.layouts.cartbar')

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
