@extends('customer.layouts.master-one-col')


@section('content')



<!-- start main slider -->

<div class="main-slider py-20">
    <div class="container-fluid">
        <div class="slider shadow-box">
            <div class="swiper" id="homeSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <img src="/customer-assets/img/slide-3.gif" loading="lazy" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="/customer-assets/img/slide-4.gif" loading="lazy" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="/customer-assets/img/slide-5.gif" loading="lazy" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next d-lg-flex d-none"></div>
                <div class="swiper-button-prev d-lg-flex d-none"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

<!-- end main slider -->

<!--start slider brand-->

<div class="slider-brand d-lg-block d-none">
    <div class="container-fluid">
        <div class="row g-2 justify-content-center align-items-center">
            <div class="col-md-2 col-6">
                <div class="box">
                    <a href="">
                        <img src="/customer-assets/img/brand1-1.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="box">
                    <a href="">
                        <img src="/customer-assets/img/brand1-2.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="box">
                    <a href="">
                        <img src="/customer-assets/img/brand1-3.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="box">
                    <a href="">
                        <img src="/customer-assets/img/brand1-4.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="box">
                    <a href="">
                        <img src="/customer-assets/img/brand1-6.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="box">
                    <a href="">
                        <img src="/customer-assets/img/brand1-5.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end slider brand-->

<!-- start feature -->

<div class="feature py-20">
    <div class="container-fluid">
        <div class="row justify-content-center g-2 row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5">

            <div class="col">
                <div class="feature-item">
                    <div class="feature-item-icon">
                        <img src="/customer-assets/img/history.png" alt="">
                    </div>
                    <div class="feature-item-desc">
                        <h5>ضمانت بازگشت وجه</h5>
                        <p class="text-muted mb-0 mt-1">در صورت عدم رضایت
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="feature-item">
                    <div class="feature-item-icon">
                        <img src="/customer-assets/img/credit-card.png" alt="">
                    </div>
                    <div class="feature-item-desc">
                        <h5>تضمین قیمت
                        </h5>
                        <p class="text-muted mb-0 mt-1">کمترین قیمت بازار
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="feature-item">
                    <div class="feature-item-icon">
                        <img src="/customer-assets/img/fast.png" alt="">
                    </div>
                    <div class="feature-item-desc">
                        <h5>ارسال سریع
                        </h5>
                        <p class="text-muted mb-0 mt-1">امن و مطمئن
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="feature-item">
                    <div class="feature-item-icon">
                        <img src="/customer-assets/img/headphone.png" alt="">
                    </div>
                    <div class="feature-item-desc">
                        <h5>پشتیبانی عالی
                        </h5>
                        <p class="text-muted mb-0 mt-1">24 ساعته شبانه روز
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="feature-item">
                    <div class="feature-item-icon">
                        <img src="/customer-assets/img/badge.png" alt="">
                    </div>
                    <div class="feature-item-desc">
                        <h5>اصالت کالا
                        </h5>
                        <p class="text-muted mb-0 mt-1">
                            تضمین اصالت کالا
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<!--end feature shop-->

<!--  start site category -->

<div class="site-category py-20">
    <div class="container-fluid">
        <div class="section-title">
            <h3 class="title-font text-center"><span class="main-color-one-color">دسته بندی</span> محصولات</h3>
            <img src="/customer-assets/img/line.png" height="50" alt="">
        </div>

        <div class="site-categories">
            <div class="row g-4 justify-content-center">

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-1.png" alt="">
                            </div>
                            <h6 class="text-center">هدفون</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-2.png" alt="">
                            </div>
                            <h6 class="text-center">فلش مموری</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-3.png" alt="">
                            </div>
                            <h6 class="text-center">مودم روتر</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-4.png" alt="">
                            </div>
                            <h6 class="text-center">دسته بازی</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-5.png" alt="">
                            </div>
                            <h6 class="text-center">وب کم</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-6.png" alt="">
                            </div>
                            <h6 class="text-center">ماوس</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-7.png" alt="">
                            </div>
                            <h6 class="text-center">انواع رم</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-8.png" alt="">
                            </div>
                            <h6 class="text-center">صفحه کلید</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-11.png" alt="">
                            </div>
                            <h6 class="text-center">انواع Cpu</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-9.png" alt="">
                            </div>
                            <h6 class="text-center">انواع کابل</h6>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="site-category-items p-3 shadow-box rounded-3">
                        <a href="">
                            <div class="site-category-items-icon">
                                <img src="/customer-assets/img/cat-10.png" alt="">
                            </div>
                            <h6 class="text-center">انواع کامپیوتر</h6>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!--  end site category -->

<!-- start offer -->

<div class="offers py-20">
    <div class="container-fluid">

        <div class="slider-title mb-3">
            <div class="row">
                <div class="col-sm-8">
                    <div class="slider-title-desc">
                        <div class="slider-title-icon">
                            <div class="slider-title-icon-parent">
                                <div>
                                    <span><i class="bi bi-caret-right-fill"></i></span>
                                    <h6>تخفیفات</h6>
                                </div>
                            </div>
                        </div>
                        <div class="slider-title-title">
                            <h2 class="h1">محصولات <span class="main-color-one-color title-font">پیشنهادی امروز</span></h2>
                            <p class="mb-0 mt-2 h5 text-muted">جدیدترین محصولات تخفیف خورده را اینجا میتوانید اینجا
                                ببینید</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="slider-title-link">
                        <a href="" class="main-color-one-color font-16"> مشاهده همه <i class="bi bi-caret-left-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 align-items-end">
            <div class="col-lg-3">
                <div class="sugget-moment shadow-box rounded-4">
                    <div class="swiper" id="suggetMoment">
                        <div class="swiper-wrapper position-relative">
                            <div class="swiper-slide">
                                <div class="product-box ">
                                    <a href="">
                                        <div class="product-box-sugget">
                                            <h6>پیشنهاد لحظه ای</h6>
                                        </div>
                                        <div class="product-box-image">
                                            <img src="/customer-assets/img/product/wach1.jpg" width="30" alt="">
                                        </div>
                                        <div class="product-box-title">
                                            <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح
                                                بند سلیکونی
                                            </h5>
                                        </div>
                                        <div class="product-box-price">
                                            <div class="product-box-price-discount">
                                                <span class="d-block badge main-color-one-bg text-white font-14 rounded-pill">25%</span>
                                                <del>2,500,000</del>
                                            </div>
                                            <div class="product-box-price-price">
                                                <h5 class="title-font main-color-green-color h2 mb-0">799,000</h5>
                                                <p class="mb-0 text-muted">تومان</p>
                                            </div>
                                        </div>
                                        <div class="product-box-hover">
                                            <nav class="navbar navbar-expand justify-content-center">
                                                <ul class="navbar-nav align-items-center">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-item product-box-hover-item me-3">مشاهده
                                                            محصول</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-item product-box-hover-item product-box-hover-item-btn me-1"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="افزودن به سبد خرید"><i
                                                                class="bi bi-basket"></i></a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-item product-box-hover-item product-box-hover-item-btn"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="افزودن به علاقه ها"><i
                                                                class="bi bi-heart"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-box">
                                    <a href="">
                                        <div class="product-box-sugget">
                                            <h6>پیشنهاد لحظه ای</h6>
                                        </div>
                                        <div class="product-box-image">
                                            <img src="/customer-assets/img/product/wach2.jpg" alt="">
                                        </div>
                                        <div class="product-box-title">
                                            <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح
                                                بند سلیکونی
                                            </h5>
                                        </div>
                                        <div class="product-box-price">
                                            <div class="product-box-price-discount">
                                                <span class="d-block badge main-color-one-bg text-white font-14 rounded-pill">25%</span>
                                                <del>2,500,000</del>
                                            </div>
                                            <div class="product-box-price-price">
                                                <h5 class="title-font main-color-green-color h2 mb-0">799,000</h5>
                                                <p class="mb-0 text-muted">تومان</p>
                                            </div>
                                        </div>
                                        <div class="product-box-hover">
                                            <nav class="navbar navbar-expand justify-content-center">
                                                <ul class="navbar-nav align-items-center">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-item product-box-hover-item me-3">مشاهده
                                                            محصول</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-item product-box-hover-item product-box-hover-item-btn me-1"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="افزودن به سبد خرید"><i
                                                                class="bi bi-basket"></i></a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-item product-box-hover-item product-box-hover-item-btn"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="افزودن به علاقه ها"><i
                                                                class="bi bi-heart"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-box">
                                    <a href="">
                                        <div class="product-box-sugget">
                                            <h6>پیشنهاد لحظه ای</h6>
                                        </div>
                                        <div class="product-box-image">
                                            <img src="/customer-assets/img/product/wach3.jpg" alt="">
                                        </div>
                                        <div class="product-box-title">
                                            <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح
                                                بند سلیکونی
                                            </h5>
                                        </div>
                                        <div class="product-box-price">
                                            <div class="product-box-price-discount">
                                                <span class="d-block badge main-color-one-bg text-white font-14 rounded-pill">25%</span>
                                                <del>2,500,000</del>
                                            </div>
                                            <div class="product-box-price-price">
                                                <h5 class="title-font main-color-green-color h2 mb-0">799,000</h5>
                                                <p class="mb-0 text-muted">تومان</p>
                                            </div>
                                        </div>
                                        <div class="product-box-hover">
                                            <nav class="navbar navbar-expand justify-content-center">
                                                <ul class="navbar-nav align-items-center">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-item product-box-hover-item me-3">مشاهده
                                                            محصول</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-item product-box-hover-item product-box-hover-item-btn me-1"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="افزودن به سبد خرید"><i
                                                                class="bi bi-basket"></i></a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-item product-box-hover-item product-box-hover-item-btn"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="افزودن به علاقه ها"><i
                                                                class="bi bi-heart"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-progress-bar">
                            <span class="slide_progress-bar"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-0">
                <div class="offer slider-parent">
                    <div class="row">
                        <div class="col-lg-8">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper"
                                id="offerItem">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="offer-item">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="offer-discount">
                                                        <span>٪48 تخفیف</span>
                                                    </div>
                                                    <div class="offer-img">
                                                        <img src="/customer-assets/img/product/television3.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="offer-content">
                                                        <div class="offer-title d-md-inline-block d-none">
                                                            <h4>پیشنهاد <span class="title-font"> شگفت انگیز</span></h4>
                                                        </div>
                                                        <div class="offer-desc">
                                                            <h4>
                                                                ساعت هوشمند هوآوی مدل GT2 Pro 46mm بند سیلیکونی
                                                            </h4>
                                                            <div class="offer-desc-price">
                                                                <span class="old">2,000,000 تومان</span>
                                                                <span class="new">1,300,000 تومان</span>
                                                            </div>
                                                        </div>
                                                        <div class='countdown' data-date="2028-01-01" data-time="18:30">
                                                        </div>

                                                        <div class="offer-btn">
                                                            <a href="product.html"><i class="bi bi-basket me-1"></i>
                                                                بریم واسه
                                                                خرید!</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="offer-item">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="offer-discount">
                                                        <span>٪13 تخفیف</span>
                                                    </div>
                                                    <div class="offer-img">
                                                        <img src="/customer-assets/img/product/wach3.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="offer-content">
                                                        <div class="offer-title d-md-inline-block d-none">
                                                            <h4>پیشنهاد <span class="title-font"> شگفت انگیز</span></h4>
                                                        </div>
                                                        <div class="offer-desc">
                                                            <h4>
                                                                ساعت هوشمند هوآوی مدل GT2 Pro 46mm بند سیلیکونی
                                                            </h4>
                                                            <div class="offer-desc-price">
                                                                <span class="old">2,000,000 تومان</span>
                                                                <span class="new">1,300,000 تومان</span>
                                                            </div>
                                                        </div>
                                                        <div class='countdown' data-date="2028-01-01" data-time="18:30">
                                                        </div>

                                                        <div class="offer-btn">
                                                            <a href="product.html"><i class="bi bi-basket me-1"></i>
                                                                بریم واسه
                                                                خرید!</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="offer-item">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="offer-discount">
                                                        <span>٪8 تخفیف</span>
                                                    </div>
                                                    <div class="offer-img">
                                                        <img src="/customer-assets/img/product/product-image5.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="offer-content">
                                                        <div class="offer-title d-md-inline-block d-none">
                                                            <h4>پیشنهاد <span class="title-font"> شگفت انگیز</span></h4>
                                                        </div>
                                                        <div class="offer-desc">
                                                            <h4>
                                                                ساعت هوشمند هوآوی مدل GT2 Pro 46mm بند سیلیکونی
                                                            </h4>
                                                            <div class="offer-desc-price">
                                                                <span class="old">2,000,000 تومان</span>
                                                                <span class="new">1,300,000 تومان</span>
                                                            </div>
                                                        </div>
                                                        <div class='countdown' data-date="2028-01-01" data-time="18:30">
                                                        </div>

                                                        <div class="offer-btn">
                                                            <a href="product.html"><i class="bi bi-basket me-1"></i>
                                                                بریم واسه
                                                                خرید!</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="offer-item">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="offer-discount">
                                                        <span>٪32 تخفیف</span>
                                                    </div>
                                                    <div class="offer-img">
                                                        <img src="/customer-assets/img/product/laptop1.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="offer-content">
                                                        <div class="offer-title d-md-inline-block d-none">
                                                            <h4>پیشنهاد <span class="title-font"> شگفت انگیز</span></h4>
                                                        </div>
                                                        <div class="offer-desc">
                                                            <h4>
                                                                ساعت هوشمند هوآوی مدل GT2 Pro 46mm بند سیلیکونی
                                                            </h4>
                                                            <div class="offer-desc-price">
                                                                <span class="old">2,000,000 تومان</span>
                                                                <span class="new">1,300,000 تومان</span>
                                                            </div>
                                                        </div>
                                                        <div class='countdown' data-date="2028-01-01" data-time="18:30">
                                                        </div>

                                                        <div class="offer-btn">
                                                            <a href="product.html"><i class="bi bi-basket me-1"></i>
                                                                بریم واسه
                                                                خرید!</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="offer-item">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="offer-discount">
                                                        <span>٪50 تخفیف</span>
                                                    </div>
                                                    <div class="offer-img">
                                                        <img src="/customer-assets/img/product/laptop4.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="offer-content">
                                                        <div class="offer-title d-md-inline-block d-none">
                                                            <h4>پیشنهاد <span class="title-font"> شگفت انگیز</span></h4>
                                                        </div>
                                                        <div class="offer-desc">
                                                            <h4>
                                                                ساعت هوشمند هوآوی مدل GT2 Pro 46mm بند سیلیکونی
                                                            </h4>
                                                            <div class="offer-desc-price">
                                                                <span class="old">2,000,000 تومان</span>
                                                                <span class="new">1,300,000 تومان</span>
                                                            </div>
                                                        </div>
                                                        <div class='countdown' data-date="2028-01-01" data-time="18:30">
                                                        </div>

                                                        <div class="offer-btn">
                                                            <a href="product.html"><i class="bi bi-basket me-1"></i>
                                                                بریم واسه
                                                                خرید!</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="offer-item">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="offer-discount">
                                                        <span>٪48 تخفیف</span>
                                                    </div>
                                                    <div class="offer-img">
                                                        <img src="/customer-assets/img/product/television2.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="offer-content">
                                                        <div class="offer-title d-md-inline-block d-none">
                                                            <h4>پیشنهاد <span class="title-font"> شگفت انگیز</span></h4>
                                                        </div>
                                                        <div class="offer-desc">
                                                            <h4>
                                                                ساعت هوشمند هوآوی مدل GT2 Pro 46mm بند سیلیکونی
                                                            </h4>
                                                            <div class="offer-desc-price">
                                                                <span class="old">2,000,000 تومان</span>
                                                                <span class="new">1,300,000 تومان</span>
                                                            </div>
                                                        </div>
                                                        <div class='countdown' data-date="2028-01-01" data-time="18:30">
                                                        </div>
                                                        <div class="offer-btn">
                                                            <a href="product.html"><i class="bi bi-basket me-1"></i>
                                                                بریم واسه
                                                                خرید!</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination d-lg-none d-block"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-lg-block d-none">
                            <div class="offer-item-link">
                                <div thumbsSlider="" class="swiper" id="offerItemLink">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="offer-item-link-item shadow-sm">
                                                <h6>
                                                    ساعت هوشمند هوآوی مدل GT2 Pro 46mm بند سیلیکونی
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="offer-item-link-item shadow-sm">
                                                <h6>گوشی موبایل شیائومی مدل Redmi 12C دو سیم کارت ظرفیت 128 گیگابایت و
                                                    رم 6 گیگابایت - گلوبال</h6>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="offer-item-link-item shadow-sm">
                                                <h6>گوشی موبایل شیائومی مدل Redmi Note 12 4G دو سیم کارت ظرفیت 256
                                                    گیگابایت و رم 8 گیگابایت - گلوبال</h6>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="offer-item-link-item shadow-sm">
                                                <h6>گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 64 گیگابایت و
                                                    رم 4 گیگابایت - ویتنام</h6>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="offer-item-link-item shadow-sm">
                                                <h6>گوشی موبایل سامسونگ مدل Galaxy A14 دو سیم کارت ظرفیت 128 گیگابایت و
                                                    رم 4 گیگابایت - ویتنام</h6>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="offer-item-link-item shadow-sm">
                                                <h6>ساعت هوشمند هوآوی مدل GT2 Pro 46mm بند سیلیکونی</h6>
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

<!-- end offer -->

<!-- start advert banner -->

<div class="advert-banner">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">

            <div class="col-lg-6">
                <div class="advert-banner-item img-tilt" data-tilt>
                    <a href="">
                        <img src="/customer-assets/img/advert-1.webp" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="advert-banner-item img-tilt" data-tilt>
                    <a href="">
                        <img src="/customer-assets/img/advert-2.webp" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- end advert banner -->

<!-- start product boxs -->

<div class="product-boxs site-slider py-20">
    <div class="container-fluid">

        <div class="slider-title">
            <div class="row">
                <div class="col-sm-8">
                    <div class="slider-title-desc">
                        <div class="slider-title-icon">
                            <div class="slider-title-icon-parent">
                                <div>
                                    <span><i class="bi bi-caret-right-fill"></i></span>
                                    <h6>تخفیفات</h6>
                                </div>
                            </div>
                        </div>
                        <div class="slider-title-title">
                            <h2 class="h1">محصولات <span class="main-color-one-color title-font">تخفیف خورده</span></h2>
                            <p class="mb-0 mt-2 h5 text-muted">جدیدترین محصولات تخفیف خورده ما را اینجا میتوانید ببینید
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="slider-title-link">
                        <a href="" class="main-color-one-color font-16"> مشاهده همه <i
                                class="bi bi-caret-left-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-parent">
            <div class="swiper" id="product-slider">

                <div class="swiper-wrapper ">
                    @foreach($amazingProducts as $product)
                    @php
                                    $amazingSales = $product->activeAmazingSales();


                    @endphp
                    <div class="swiper-slide">
                        <div class="product-box">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="{{ asset($product->image['indexArray']['medium']) }}" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">{{$product->name}}</h5>
                                </div>
                                <div class="product-box-price">

                                    <div class="product-box-price-discount">

                                        <span class="d-block badge main-color-one-bg text-white font-14 rounded-pill">{{$amazingSales->percentage.'%'}}</span>
                                        <del>{{priceFormat($product->price)}}</del>

                                    </div>

                                    <div class="product-box-price-price">
                                        <h5 class="title-font main-color-green-color h2 mb-0">{{ priceFormat($product->price - $product->price * ($amazingSales->percentage / 100)) }}</h5>
                                        <p class="mb-0 text-muted">ریال</p>
                                    </div>
                                </div>
                                <div class="product-box-hover">
                                    <nav class="navbar navbar-expand justify-content-center">
                                        <ul class="navbar-nav align-items-center">
                                            <li class="nav-item"><a href=""
                                                    class="nav-item product-box-hover-item me-3">مشاهده
                                                    محصول</a></li>
                                            <li class="nav-item">
                                                <form action="{{route('customer.sales-process.add-to-cart' , $product)}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <button type="submit" style="border: none;" class="nav-item product-box-hover-item product-box-hover-item-btn me-1"><i class="bi bi-basket"></i></button>
                                                    </form>
                                                    </li>
                                            <li class="nav-item"><a href=""
                                                    class="nav-item product-box-hover-item product-box-hover-item-btn"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="افزودن به علاقه ها"><i
                                                        class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>
        </div>

        <div class="text-center">
            <button class="amazing-offer-btn" data-scroll-to="#banners"></button>
        </div>

    </div>
</div>

<!-- end product boxs -->

<!-- start advert banner -->

<div class="advert-banner d-sm-block d-none">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <div class="col-12">
                <div class="advert-banner-item img-tilt" data-tilt>
                    <a href="">
                        <img src="/customer-assets/img/advert-5.webp" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end advert banner -->

<!-- start product slider -->

<div class="product-slider free-swiper-two free-sw no-bg site-slider py-40">
    <div class="container-fluid position-relative">

        <div class="slider-title">
            <div class="row">
                <div class="col-sm-8">
                    <div class="slider-title-desc">
                        <div class="slider-title-icon">
                            <div class="slider-title-icon-parent">
                                <div>
                                    <span><i class="bi bi-caret-right-fill"></i></span>
                                    <h6>تخفیفات</h6>
                                </div>
                            </div>
                        </div>
                        <div class="slider-title-title">
                            <h2 class="h1">محصولات <span class="main-color-one-color title-font">پرفروش سایت</span></h2>
                            <p class="mb-0 mt-2 h5 text-muted">پرتقاضا ترین محصولات ما را اینجا می توانید ببینید
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="slider-title-link">
                        <a href="" class="main-color-one-color font-16"> مشاهده همه <i class="bi bi-caret-left-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper mt-4 product-slider-swiper">

            <div class="swiper-wrapper ">
                @foreach($mostSoldProducts as $product)
                @php
                $amazingSales = $product->activeAmazingSales();


                @endphp
                <div class="swiper-slide">
                    <div class="product-box">
                        <a href="">
                            <div class="product-box-image">
                                <img src="{{ asset($product->image['indexArray']['medium']) }}" alt="">
                            </div>
                            <div class="product-box-title">
                                <h5 class="text-overflow-2">{{$product->name}}
                                </h5>
                            </div>
                            <div class="product-box-price">
                                <div class="product-box-price-discount">
                                    <span class="d-block badge main-color-one-bg text-white font-14 rounded-pill">{{$amazingSales->percentage.'%'}}</span>
                                    <del>{{priceFormat($product->price)}}</del>
                                </div>
                                <div class="product-box-price-price">
                                    <h5 class="title-font main-color-green-color h2 mb-0">{{ priceFormat($product->price - $product->price * ($amazingSales->percentage / 100)) }}</h5>
                                    <p class="mb-0 text-muted">ریال</p>
                                </div>
                            </div>
                            <div class="product-box-hover">
                                <nav class="navbar navbar-expand justify-content-center">
                                    <ul class="navbar-nav align-items-center">
                                        <li class="nav-item"><a href=""
                                                class="nav-item product-box-hover-item me-3">مشاهده
                                                محصول</a></li>
                                        <li class="nav-item">
                                            <form action="{{route('customer.sales-process.add-to-cart' , $product)}}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                            <button type="submit" style="border: none;" class="nav-item product-box-hover-item product-box-hover-item-btn me-1"><i class="bi bi-basket"></i></button>

                                                </form>
                                                </li>
                                        <li class="nav-item"><a href=""
                                                class="nav-item product-box-hover-item product-box-hover-item-btn"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="افزودن به علاقه ها"><i
                                                    class="bi bi-heart"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </a>
                    </div>
                </div>

                @endforeach

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </div>
</div>

<!-- end product slider -->


<!-- product row -->

<div class="product-row">
    <div class="container-fluid position-relative">
        <div class="slider-title">
            <div class="row">
                <div class="col-sm-8">
                    <div class="slider-title-desc">
                        <div class="slider-title-icon">
                            <div class="slider-title-icon-parent bg-white">
                                <div>
                                    <span><i class="bi bi-caret-right-fill"></i></span>
                                    <h6>محصولات جدید</h6>
                                </div>
                            </div>
                        </div>
                        <div class="slider-title-title">
                            <h2 class="h1 text-white">محصولات <span class="title-font text-light">تازه وارد</span></h2>
                            <p class="mb-0 mt-2 h5 text-white">جدیدترین محصولات فروشگاه را اینجا میتوانید
                                ببینید</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="slider-title-link">
                        <a href="" class="text-white font-16"> مشاهده همه <i
                                class="bi bi-caret-left-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-row-parent">
            <div class="row g-4">
                @foreach($new_products as $product)
                @php
            $amazingSales = $product->activeAmazingSales();


            @endphp
                <div class="col-lg-3 col-sm-6">
                    <div class="product-row-item">
                        <a href="">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img src="{{ asset($product->image['indexArray']['medium']) }}" alt="">
                                </div>
                                <div class="col-8">
                                    <h3 class="text-overflow-1 title-font font-14">{{$product->name}}

                                    </h3>
                                    <div class="cart-canvas-price my-3 d-flex align-items-center">
                                        <p class="mb-0 text-muted me-2 font-16 text-decoration-line-through">{{priceFormat($product->price)}}</p>
                                        <h6 class="title-font main-color-one-color">{{ priceFormat($product->price - $product->price * ($amazingSales->percentage / 100)) }} ریال</h6>
                                    </div>
                                    <div class="cart-canvas-foot d-flex align-items-center justify-content-end">
                                        <div class="cart-canvas-add">
                                            <form action="{{route('customer.sales-process.add-to-cart' , $product)}}" method="post" enctype="multipart/form-data">
                                                @csrf

                                            <button class="btn text-white"><i class="bi bi-basket"></i></button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="Dottedsquare"></div>
    </div>
</div>

<!-- end product row -->

<!-- start about us -->

<div class="about-us py-20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-us-image">
                    <img src="/customer-assets/img/about-us.png" alt="">
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

<!-- end about us  -->

<!-- blog -->

<div class="blog-slider py-20">
    <div class="container-fluid">
        <div class="slider-title">
            <div class="row">
                <div class="col-sm-8">
                    <div class="slider-title-desc">
                        <div class="slider-title-icon">
                            <div class="slider-title-icon-parent bg-white">
                                <div>
                                    <span><i class="bi bi-caret-right-fill"></i></span>
                                    <h6>مطالب وبلاگ</h6>
                                </div>
                            </div>
                        </div>
                        <div class="slider-title-title">
                            <h2 class="h1"><span class="title-font main-color-one-color">مقالات</span> وبلاگ</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="slider-title-link">
                        <a href="" class="main-color-one-color font-16"> مشاهده همه <i
                                class="bi bi-caret-left-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-slider-items mt-3">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row gy-5">
                        <div class="col-md-6">
                            <div class="blog-slider-item-stand">
                                <a href="">
                                    <span class="blog-slider-overlay"></span>
                                    <div class="blog-slider-item-stand-image">
                                        <img src="/customer-assets/img/blog-1.jpg" alt="">
                                    </div>
                                    <div class="blog-slider-item-stand-text">
                                        <div class="blog-slider-item-stand-title">
                                            <span class="badge badge-pill main-color-two-bg mb-2">جدید ترین ها</span>
                                            <h6 class="font-16 title-font text-overflow-1 text-white">راهنمای خرید موبایل آبان 1402</h6>
                                            <p class="text-overflow-2 text-white mb-0 mt-2">رید گوشی موبایل مانند هر وسیله دیگری، نیازمند تحقیق و کسب اطلاعات کافی است. ما در این راهنمای خرید سعی می‌کنیم تا بهترین محصولات بازار را معرفی کنیم و حتی به صورت اختصاصی</p>
                                            <div class="blog-slider-item-info d-flex align-items-center justify-content-between">
                                                <div class="blog-slider-item-info-item me-2 text-white">
                                                    <i class="bi bi-clock me-1"></i>
                                                    <span class="text-white">2 روز پیش نوشته شده</span>
                                                </div>
                                                <div class="blog-slider-item-info-item text-white">
                                                    <i class="bi bi-eye me-1"></i>
                                                    <span class="text-white">17 بازدید</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-slider-item-stand">
                                <a href="">
                                    <span class="blog-slider-overlay"></span>
                                    <div class="blog-slider-item-stand-image">
                                        <img src="/customer-assets/img/blog-3.jpg" alt="">
                                    </div>
                                    <div class="blog-slider-item-stand-text">
                                        <div class="blog-slider-item-stand-title">
                                            <span class="badge badge-pill main-color-two-bg mb-2">جدید ترین ها</span>
                                            <h6 class="font-16 title-font text-overflow-1 text-white">راهنمای خرید موبایل آبان 1402</h6>
                                            <p class="text-overflow-2 text-white mb-0 mt-2">رید گوشی موبایل مانند هر وسیله دیگری، نیازمند تحقیق و کسب اطلاعات کافی است. ما در این راهنمای خرید سعی می‌کنیم تا بهترین محصولات بازار را معرفی کنیم و حتی به صورت اختصاصی</p>
                                            <div class="blog-slider-item-info d-flex align-items-center justify-content-between">
                                                <div class="blog-slider-item-info-item me-2 text-white">
                                                    <i class="bi bi-clock me-1"></i>
                                                    <span class="text-white">2 روز پیش نوشته شده</span>
                                                </div>
                                                <div class="blog-slider-item-info-item text-white">
                                                    <i class="bi bi-eye me-1"></i>
                                                    <span class="text-white">17 بازدید</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-slider-item-row">
                        <a href="">
                            <div class="row gy-3 align-items-center">
                                <div class="col-sm-4">
                                    <div class="blog-slider-item-row-image">
                                        <img src="/customer-assets/img/blog-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="blog-slider-item-stand-text">
                                        <div class="blog-slider-item-stand-title">
                                            <h6 class="font-16 title-font text-overflow-1 main-color-one-color">راهنمای خرید موبایل آبان 1402</h6>
                                            <p class="text-overflow-2 my-2">رید گوشی موبایل مانند هر وسیله دیگری، نیازمند تحقیق و کسب اطلاعات کافی است. ما در این راهنمای خرید سعی می‌کنیم تا بهترین محصولات بازار را معرفی کنیم و حتی به صورت اختصاصی</p>
                                            <div class="blog-slider-item-info d-flex align-items-center">
                                                <div class="blog-slider-item-info-item me-3">
                                                    <i class="bi bi-clock me-1"></i>
                                                    <span>2 روز پیش نوشته شده</span>
                                                </div>
                                                <div class="blog-slider-item-info-item">
                                                    <i class="bi bi-eye me-1"></i>
                                                    <span>17 بازدید</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="blog-slider-item-row">
                        <a href="">
                            <div class="row gy-3 align-items-center">
                                <div class="col-sm-4">
                                    <div class="blog-slider-item-row-image">
                                        <img src="/customer-assets/img/blog-5.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="blog-slider-item-stand-text">
                                        <div class="blog-slider-item-stand-title">
                                            <h6 class="font-16 title-font text-overflow-1 main-color-one-color">راهنمای خرید موبایل آبان 1402</h6>
                                            <p class="text-overflow-2 my-2">رید گوشی موبایل مانند هر وسیله دیگری، نیازمند تحقیق و کسب اطلاعات کافی است. ما در این راهنمای خرید سعی می‌کنیم تا بهترین محصولات بازار را معرفی کنیم و حتی به صورت اختصاصی</p>
                                            <div class="blog-slider-item-info d-flex align-items-center">
                                                <div class="blog-slider-item-info-item me-3">
                                                    <i class="bi bi-clock me-1"></i>
                                                    <span>2 روز پیش نوشته شده</span>
                                                </div>
                                                <div class="blog-slider-item-info-item">
                                                    <i class="bi bi-eye me-1"></i>
                                                    <span>17 بازدید</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- end blog -->
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
