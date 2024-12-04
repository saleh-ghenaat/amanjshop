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


<!-- start content -->

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
