@extends('customer.layouts.master-simple')

@section('head-tag')
<title>صورتحساب</title>
@endsection


@section('content')



<!-- start content -->

<!-- start breadcroumb -->

<div class="bread-crumb py-4">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="my-lg-0 my-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('customer.home')}}" class="font-14 text-muted-two">خانه</a></li>

                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page"> صورتحساب
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- end breadcroumb -->


<div class="content">
    <div class="container-fluid">

        <div class="payment_navigtions">
            <div class="checkout-headers cart">
                <ul>
                    <li class="nav">
                        <a href="">
                            <i class="bi bi-cart"></i>
                            <p>سبد خرید</p>
                        </a>
                    </li>
                    <li class="nav active">
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

    <div class="container-fluid">
        <div class="slider-title mb-4">
            <div class="slider-title-desc">
                <div class="slider-title-title">
                    <h2 class="h1"> جزئیات <span class="title-font main-color-one-color">صورت حساب</span></h2>
                </div>
            </div>
        </div>
        <div class="content-box checkouts-form">
            <div class="container-fluid">
                <div class="checkout-form">
                    <form action="{{route('customer.sales-process.factor')}}">

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="comment-item mb-3">
                                    <input type="text" class="form-control" id="floatingInputName" placeholder="نام خود را وارد کنید...">
                                    <label for="floatingInputName" class="form-label label-float fw-bold font-16">نام <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="comment-item mb-3">
                                    <input type="text" class="form-control" id="floatingInputLName" placeholder="نام خانوادگی خود را وارد کنید ...">
                                    <label for="floatingInputLName" class="form-label label-float fw-bold">نام خانوادگی <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="comment-item mb-3">
                                    <input type="text" class="form-control" id="floatingInputStreet" placeholder="نام خانوادگی خود را وارد کنید ...">
                                    <label for="floatingInputStreet" class="form-label label-float fw-bold">آدرس خیابان</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="comment-item" for="floatingInputOstan">
                                    <label class="label-float fw-bold">استان <span class="text-danger">*</span></label>
                                    <form action="">
                                        <select name="" id="floatingInputOstan" class="form-select">
                                            <option value="">تهران</option>
                                            <option value="">اصفهان</option>
                                            <option value="">مشهد</option>
                                            <option value="">شیراز</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="comment-item">
                                    <label class="label-float fw-bold" for="floatingInputCity">شهر <span class="text-danger">*</span></label>
                                    <form action="">
                                        <select name="" id="floatingInputCity" class="form-select">
                                            <option value="">کرج</option>
                                            <option value="">خرم آباد</option>
                                            <option value="">نور آباد</option>
                                            <option value="">الشتر</option>
                                        </select>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="comment-item mb-3">
                                    <input type="text" class="form-control" id="floatingInputTel" placeholder="شماره تلفن خود را وارد کنید ...">
                                    <label for="floatingInputTel" class="form-label label-float fw-bold">شماره تلفن</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="comment-item mb-3">
                                    <textarea class="form-control py-3" id="floatingInputDesc" rows="5" placeholder="اگر سفارش شما توضیح خاصی دارد اینجا وارد کنید"></textarea>
                                    <label for="floatingInputDesc" class="form-label label-float fw-bold">توضیحات سفارش</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="cart-canvases position-sticky top-0">

                                    <div class="item shadow-none">
                                        <div class="factor">

                                            <div class="factor-item pb-3">
                                                <h5 class="title-font mb-3 h6">زمان ارسال</h5>
                                                <div class="row gy-3">
                                                    <div class="col-sm-2">
                                                        <div class="send-item active">
                                                            <h6 class="font-14 text-center">یک شنبه</h6>
                                                            <p class="font-14 text-center mt-1 mb-0 text-muted">4 تیر ماه</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="send-item">
                                                            <h6 class="font-14 text-center">دو شنبه</h6>
                                                            <p class="font-14 text-center mt-1 mb-0 text-muted">6 تیر ماه</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="send-item">
                                                            <h6 class="font-14 text-center">سه شنبه</h6>
                                                            <p class="font-14 text-center mt-1 mb-0 text-muted">7 تیر ماه</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="send-item">
                                                            <h6 class="font-14 text-center">چهار شنبه</h6>
                                                            <p class="font-14 text-center mt-1 mb-0 text-muted">8 تیر ماه</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="send-item">
                                                            <h6 class="font-14 text-center">پنج شنبه</h6>
                                                            <p class="font-14 text-center mt-1 mb-0 text-muted">9 تیر ماه</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="send-item">
                                                            <h6 class="font-14 text-center">شنبه</h6>
                                                            <p class="font-14 text-center mt-1 mb-0 text-muted">15 تیر ماه</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="factor-item pb-3">
                                                <h5 class="title-font mb-3 h6">شیوه پرداخت</h5>
                                                <div class="row gy-3">
                                                    <div class="col-sm-6">
                                                        <div class="bank-item">
                                                            <i class="bi bi-credit-card-2-back main-color-one-color"></i>
                                                            <h6 class="font-14 mx-2">انتقال مستقیم بانکی</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="bank-item active">
                                                            <i class="bi bi-house-fill main-color-one-color"></i>
                                                            <h6 class="font-14 mx-2">پرداخت هنگام دریافت</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                                <h5 class="title-font mb-0 h6">قیمت کالا ها</h5>
                                                <p class="mb-0 font-17">{{priceFormat($order->order_total_products_amount)}} ریال</p>
                                            </div>

                                            <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                                <h5 class="title-font mb-0 h6">تخفیف کالا ها</h5>
                                                <p class="mb-0 font-18">{{priceFormat($order->order_discount_amount)}} ریال</p>
                                            </div>

                                            <div class="d-flex factor-item flex-column mb-3 align-items-start justify-content-between">
                                                <h5 class="title-font mb-0 h6">حمل و نقل</h5>
                                                <form action="">
                                                    <div class="form-check mt-3">
                                                        <input type="radio" checked="" class="form-check-input" name="post" id="post-1">
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
                                                <p class="mb-0 font-18">{{priceFormat($order->order_final_amount)}} ریال</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn product-meta-add-to-cart-btn main-color-one-bg rounded-pill">
                                        ثبت سفارش
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="Dottedsquare-checkout d-lg-flex d-none"></div>
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

<div class="float-btn">
    <div class="container-fluid">
        <!-- contact us floating -->
        <div id="btncollapzion" class=" btn_collapzion"></div>
        <div class="" id="contactOverlay"></div>
        <!-- end contact us floating -->
    </div>
</div>
@endsection
