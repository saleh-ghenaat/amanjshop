@extends('customer.layouts.master-one-col')

@section('content')

<!-- start breadcroumb -->

<div class="bread-crumb py-4">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="my-lg-0 my-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('customer.home')}}" class="font-14 text-muted-two">خانه</a></li>

                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page"> پروفایل
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
                   @include('customer.layouts.sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="position-sticky top-0">
                        <div class="panel-header">
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
                        <div class="panel-meta my-5">
                            <div class="row g-3">
                                <div class="col-md-3 col-sm-6">
                                    <a href="">
                                        <div class="panel-meta-item d-flex align-items-center">
                                            <div class="panel-meta-item-icon">
                                                <i class="bi bi bi-bag-check"></i>
                                            </div>
                                            <div class="panel-meta-title d-flex flex-column">
                                                <h6 class="h6">سفارشات تکمیل شده</h6>
                                                <h5 class="title-font h3">5</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="">
                                        <div class="panel-meta-item d-flex align-items-center">
                                            <div class="panel-meta-item-icon bg-danger">
                                                <i class="bi bi bi-heart-fill"></i>
                                            </div>
                                            <div class="panel-meta-title d-flex flex-column">
                                                <h6 class="h6">محصولات مورد علاقه</h6>
                                                <h5 class="title-font h3">25</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="">
                                        <div class="panel-meta-item d-flex align-items-center">
                                            <div class="panel-meta-item-icon bg-primary">
                                                <i class="bi bi bi-send"></i>
                                            </div>
                                            <div class="panel-meta-title d-flex flex-column">
                                                <h6 class="h6">نظرات</h6>
                                                <h5 class="title-font h3">13</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <a href="">
                                        <div class="panel-meta-item d-flex align-items-center">
                                            <div class="panel-meta-item-icon bg-secondary">
                                                <i class="bi bi-repeat"></i>
                                            </div>
                                            <div class="panel-meta-title d-flex flex-column">
                                                <h6 class="h6">سفارشات مرجوعی</h6>
                                                <h5 class="title-font h3">3</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-latest-order">
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
                                        @foreach($orders as $oerder)
                                        <tr>
                                            <td class="font-14">1</td>
                                            <td class="font-14">2354632</td>
                                            <td class="font-14">سه شنبه 13 دی 1401</td>
                                            <td class="font-14">580,000 تومان</td>
                                            <td class="font-14"><a href="" class="title-font">سفارش مرجوع شده</a></td>
                                            <td class="font-14">
                                                <a href="{{ route('customer.profile.order-item , $order->id') }}" class="btn border-0 main-color-one-bg waves-effect waves-light"><i class="bi bi-chevron-left"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                                <div class="my-paginate mt-5">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            {{-- لینک صفحه قبلی --}}
                                            <li class="page-item {{ $orders->onFirstPage() ? 'disabled' : '' }}">
                                                <a class="page-link rounded-3" href="{{ $orders->previousPageUrl() }}" aria-label="Previous">
                                                    <i class="bi bi-chevron-right"></i>
                                                </a>
                                            </li>

                                            {{-- لینک‌های صفحه --}}
                                            @foreach ($orders->getUrlRange(max(1, $orders->currentPage() - 2), min($orders->lastPage(), $orders->currentPage() + 2)) as $page => $url)
                                            <li class="page-item {{ $page == $orders->currentPage() ? 'active' : '' }}">
                                                <a class="page-link rounded-3" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                            @endforeach

                                            {{-- لینک صفحه بعدی --}}
                                            <li class="page-item {{ $orders->hasMorePages() ? '' : 'disabled' }}">
                                                <a class="page-link rounded-3" href="{{ $orders->nextPageUrl() }}" aria-label="Next">
                                                    <i class="bi bi-chevron-left"></i>
                                                </a>
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

</div>
<!--start cart canvas-->

@include('customer.layouts.cartbar')

<!--end cart canvas-->


@endsection
