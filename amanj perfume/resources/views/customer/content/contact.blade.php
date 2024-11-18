@extends('customer.layouts.master-one-col')


@section('content')




<!-- start content -->

<!-- start breadcroumb -->

<div class="bread-crumb py-4">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="my-lg-0 my-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('customer.home')}}" class="font-14 text-muted-two">خانه</a></li>
                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page"> ارتباط با ما
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- end breadcroumb -->




<div class="content">
    <div class="container-fluid">

        <div class="contact-img-title mb-3 shadow-box">
            <img src="assets/img/contact.png" alt="">
        </div>

        <div class="contact-us-title">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207344.50843900483!2d51.347655249999995!3d35.707573749999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e00491ff3dcd9%3A0xf0b3697c567024bc!2sTehran%2C%20Tehran%20Province!5e0!3m2!1sen!2s!4v1665401721614!5m2!1sen!2s" title="نقشه"></iframe>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row justify-content-center gy-3">
                        <div class="col-lg-6">
                            <div class="panel-meta-item d-flex align-items-center bg-transparent shadow-none">
                                <div class="panel-meta-item-icon bg-primary">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="panel-meta-title d-flex flex-column">

                                    <h5 class="title-font h3">تماس با ما</h5>
                                    <h4 style="direction: ltr" class=" h3">021 <span class="title-font me-2">12345678</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel-meta-item d-flex align-items-center bg-transparent shadow-none">
                                <div class="panel-meta-item-icon bg-danger">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="panel-meta-title d-flex flex-column">
                                    <h5 class="title-font h3 mb-2">ساعات کاری</h5>
                                    <p class="mb-0">شنبه تا چهارشنبه ۹ الی ۱۷ و پنجشنبه ها ۹ الی ۱۲
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning text-center">
                        لطفاً پیش از ارسال ایمیل یا تماس تلفنی، ابتدا پرسش‌های متداول را مشاهده کنید
                    </div>


                    <div class="contact-form">
                        <div class="content-box">
                            <div class="container-fluid">
                                <form action="">
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
                                                <textarea class="form-control py-3" id="floatingInputDesc" rows="5" placeholder="اگر نظر یا سوال خاصی دارید اینجا وارد کنید"></textarea>
                                                <label for="floatingInputDesc" class="form-label label-float fw-bold">نظر</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn product-meta-add-to-cart-btn main-color-one-bg rounded-pill">
                                                    ثبت سفارش
                                                </button>
                                            </div>
                                        </div>
                                    </div></form>
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
