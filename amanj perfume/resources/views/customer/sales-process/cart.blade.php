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

                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page"> سبد خرید
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- end breadcroumb -->
@if($cartItems->isNotEmpty())
<div class="content">
    <div class="container-fluid">

        <div class="payment_navigtions">
            <div class="checkout-headers cart">
                <ul>
                    <li class="nav active">
                        <a href="">
                            <i class="bi bi-cart"></i>
                            <p>سبد خرید</p>
                        </a>
                    </li>
                    <li class="nav">
                        <a href="">
                            <i class="bi bi-truck"></i>
                            <p>صورتحساب</p>
                        </a>
                    </li>
                    <li class="nav">
                        <i class="bi bi-card-list"></i>
                        <p>فاکتور</p>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    @php
    $totalProductPrice = 0;
    $totalDiscountPrice = 0;
@endphp
    <div class="container-fluid">
        <div class="cart-product">
            <div class="row gy-4">
                <div class="col-lg-9">
                    @foreach($cartItems as $cartItem)
                    @php

                    $totalProductPrice += $cartItem->cartItemProductPrice() * $cartItem->number;
                    $totalDiscountPrice += $cartItem->cartItemProductDiscount() * $cartItem->number;
                    $amazingSales = $cartItem->product->activeAmazingSales();

                @endphp

                    <div class="cart-product-item">
                        <div class="content-box">
                            <div class="container-fluid">
                                <div class="cart-items">
                                    <div class="item">
                                        <div class="row gy-2">
                                            <div class="col-md-2 w-100-in-400">
                                                <div class="image">
                                                    <img src="{{ asset($cartItem->product->image['indexArray']['medium']) }}" alt="{{$cartItem->product->name}}"
                                                         class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-10 w-100-in-400">
                                                <div class="d-flex justify-content-between align-items-md-start align-items-end flex-wrap">
                                                    <div class="d-flex align-items-start flex-column me-2">
                                                        <div class="title d-flex align-items-center flex-wrap">
                                                            <h6 class="font-16"> {{ $cartItem->product->name }}
                                                                @if($amazingSales)
                                                                <span class="badge ms-2 danger-label rounded-pill">{{$amazingSales->percentage}}%</span>
                                                                @endif
                                                            </h6>
                                                        </div>
                                                        <div class="cart-item-feature d-flex flex-column align-items-start flex-wrap mt-3">
                                                            <div class="item d-flex align-items-center">
                                                                <div class="icon"><i class="bi bi-shop"></i></div>
                                                                <div class="saller-name mx-2">فروشنده:</div>
                                                                <div class="saller-name text-muted">ایران موبایل</div>
                                                            </div>
                                                            <div class="item d-flex align-items-center mt-2">
                                                                <div class="icon"><i class="bi bi-shield-check"></i>
                                                                </div>
                                                                <div class="saller-name mx-2">گارانتی:</div>
                                                                <div class="saller-name text-muted">ایران موبایل</div>
                                                            </div>
                                                            <div class="item d-flex align-items-center mt-3">
                                                                <div class="counter">
                                                                    <input type="text" name="count" class="counter"
                                                                           value="1">
                                                                </div>
                                                                <div class="remove danger-label ms-3">
                                                                    <a href="" class="">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action d-flex flex-wrap flex-column justify-content-sm-end justify-content-center align-items-center">
                                                        <div class="product-box-price flex-column justify-content-end align-items-end">
                                                            <div class="product-box-price-discount mb-3">
                                                                @if($cartItem->cartItemProductDiscount())
                                                                <del>{{ priceFormat($cartItem->cartItemProductPrice()) }}</del>
                                                                @endif
                                                            </div>
                                                            <div class="product-box-price-price d-flex">
                                                                <h5 class="title-font main-color-green-color h2 mb-2">
                                                                    {{ priceFormat($cartItem->cartItemProductPrice() - $cartItem->cartItemProductDiscount()) }}</h5>
                                                                <p class="mb-0 text-muted-two ms-1 ">ریال</p>
                                                            </div>
                                                        </div>

                                                        <div class="mt-2">
                                                            <a href=""
                                                               class="btn btn-sm main-color-one-outline  rounded-pill"><i
                                                                    class="bi bi-plus-circle me-1"></i> ذخیره در لیست
                                                                خرید بعدی</a>
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

                    @endforeach

                </div>
                <div class="col-lg-3">
                    <div class="cart-canvases position-sticky top-0">
                        <div class="item">
                            <div class="factor">
                                <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                    <h5 class="title-font mb-0 h6">قیمت کالا ها</h5>
                                    <p class="mb-0 font-17">{{priceFormat($totalProductPrice)}} ریال</p>
                                </div>

                                <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                    <h5 class="title-font mb-0 h6">تخفیف کالا ها</h5>
                                    <p class="mb-0 font-18">{{priceFormat($totalDiscountPrice)}} ریال</p>
                                </div>

                                <div class="d-flex factor-item flex-column mb-3 align-items-start justify-content-between">
                                    <h5 class="title-font mb-0 h6">حمل و نقل</h5>
                                    <form action="">
                                        <div class="form-check mt-3">
                                            <input type="radio" checked class="form-check-input" name="post"
                                                   id="post-1">
                                            <label for="post-1" class="form-check-label">
                                                پیک موتوری اختصاصی (کمتر از 5 ساعت): 80,000 تومان
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input type="radio" class="form-check-input" name="post" id="post-2">
                                            <label for="post-2" class="form-check-label">
                                                پیک عمومی شاهان (2 تا 3 روز کاری): 50,000 تومان

                                            </label>
                                        </div>
                                    </form>
                                </div>

                                <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                    <h5 class="title-font mb-0 h6">مجموع</h5>
                                    <p class="mb-0 font-18">{{ priceFormat($totalProductPrice - $totalDiscountPrice) }} ریال</p>
                                </div>

                                <div class="action mt-3 d-flex align-items-center justify-content-center">
                                    <a href="{{route('customer.sales-process.payment')}}"
                                       class="btn main-color-one-outline py-2 rounded-pill rounded-3 d-block w-100">تسویه
                                        حساب</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="show-discount-modal pointer py-3 mb-3" data-bs-toggle="modal" data-bs-target="#discountModal">
            <i class="bi bi-patch-exclamation main-color-one-color me-2" style="font-size: 40px;"></i>
            کوپن تخفیف دارید برای نوشتن کد اینجا کلیک
            کنید
        </div>
    </div>

</div>

@else


<div class="content">
    <div class="container-fluid">
        <div class="cart-empty">
            <div class="content-box">
                <div class="container-fluid">
                    <div class="cart-empty-image text-center">
                        <img src="assets/img/mini_cart-empty.png" width="300" alt="">
                    </div>
                    <div class="cart-empty-title">
                        <h2 class="text-center title-font">
                            سبد خرید شما خالی میباشد
                        </h2>
                        <div class="text-center mt-3">
                            <a href="" class="btn main-color-one-outline rounded-pill px-4">رفتن به فروشگاه</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


@endIf
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
