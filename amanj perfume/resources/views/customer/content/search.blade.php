@extends('customer.layouts.master-one-col')


@section('content')




<!-- start content -->

<!-- start breadcroumb -->

<div class="bread-crumb py-4">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="my-lg-0 my-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('customer.home')}}" class="font-14 text-muted-two">خانه</a></li>

                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page"> فروشگاه
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- end breadcroumb -->

<!-- main content page -->
<div class="content">
    <div class="container-fluid">

        <!-- start filter in mobile -->
        <div class="custom-filter d-lg-none d-block">
            <button class="btn border-0 main-color-green shadow-box px-4 rounded-3 position-fixed btn-filter-float"
                    style="z-index: 999;bottom:80px;" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="bi bi-funnel font-20 fw-bold text-white"></i>
                <span class="d-block font-14 text-white">فیلتر</span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight"
                 aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel-2">فیلتر ها</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="item-boxs position-sticky top-0">
                        <div class="item-box shadow-box">
                            <div class="title">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="font-14">فیلتر های اعمال شده</h6>
                                    <a class="btn border-0" data-bs-toggle="collapse" href="#collapseItemBox1"
                                       role="button" aria-expanded="false">
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="desc collapse show" id="collapseItemBox1">
                                <a href=""
                                   class="btn btn-sm rounded-pill border-1 border-muted me-1 font-14 mb-2">
                                    <span>گوشی الجی</span>
                                    <span class="ms-3"><i class="bi bi-x text-danger"></i></span></a>
                                <a href=""
                                   class="btn btn-sm rounded-pill border-1 border-muted me-1 font-14 mb-2">
                                    <span>دوربین 108</span>
                                    <span class="ms-3"><i class="bi bi-x text-danger"></i></span></a>
                            </div>
                        </div>

                        <div class="item-box shadow-box">
                            <div class="title">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="font-14">محدوده قیمت</h6>
                                    <a class="btn border-0" data-bs-toggle="collapse" href="#collapsePrice1"
                                       role="button" aria-expanded="false">
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="desc collapse show" id="collapsePrice1">
                                <div class="filter-item-content">
                                    <form action="" method="get">
                                        <div class="form-group">
                                            <input type="range" class="catRange" name="range[]">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="number" name=""  min="1500000"
                                                       class="form-control input-range-filter"
                                                       placeholder="از 1500000">
                                            </div>
                                            <div class="col-6">
                                                <input type="number" name=""  min="1500000" max="3000000"
                                                       class="form-control input-range-filter"
                                                       placeholder="از 3000000">
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center my-3">
                                                    <input type="submit" class="btn main-color-green text-white rounded-pill px-5 py-2" value="اعمال فیلتر">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="item-box shadow-box">
                            <div class="title">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="font-14">فیلتر بر اساس رنگ</h6>
                                    <a class="btn border-0" data-bs-toggle="collapse" href="#collapseItemBoxExist1"
                                       role="button" aria-expanded="false">
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="desc collapse show" id="collapseItemBoxExist1">
                                <div class="filter-item-content">
                                    <form action="">
                                        <div class="product-meta-color-items">
                                            <input type="radio" class="btn-check" name="options" id="option11"
                                                   autocomplete="off" checked>
                                            <label class="btn btt-light" for="option11">
                                                <span style="background-color: #c00;"></span>
                                                قرمز
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option22"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option22">
                                                <span style="background-color: #111;"></span>
                                                مشکی
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option33"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option33">
                                                <span style="background-color: #00cc5f;"></span>
                                                سبز
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option44"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option44">
                                                <span style="background-color: #1b69f0;"></span>
                                                آبی
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option55"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option55">
                                                <span style="background-color: #891bf0;"></span>
                                                بنفش
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option66"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option66">
                                                <span style="background-color: #f0501b;"></span>
                                                نارنجی
                                            </label>
                                            <div class="text-center mb-3 mt-2">
                                                <input type="submit" class="btn main-color-green text-white rounded-pill px-5 py-2" value="اعمال فیلتر">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="item-box shadow-box">
                            <div class="title">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="font-14">فیلتر براساس دسته بندی</h6>
                                    <a class="btn border-0" data-bs-toggle="collapse" href="#collapseItemBoxColor1"
                                       role="button" aria-expanded="false">
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="desc collapse show" id="collapseItemBoxColor1">
                                <div class="filter-item-content">
                                    <form action="">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                            <div class="form-check">
                                                <label for="colorCheck111" class="form-check-label">موبایل <i class="bi bi-phone ms-1"></i></label>
                                                <input type="checkbox" name="" id="colorCheck111" class="form-check-input">
                                            </div>
                                            <div>
                                                <span class="fw-bold font-14">(27)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                            <div class="form-check">
                                                <label for="colorCheck555" class="form-check-label">ایرپاد <i class="bi bi-earbuds ms-1"></i></label>
                                                <input type="checkbox" name="" id="colorCheck555" class="form-check-input">
                                            </div>
                                            <div>
                                                <span class="fw-bold font-14">(32)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                            <div class="form-check">
                                                <label for="colorCheck444" class="form-check-label">تبلت <i class="bi bi-tablet ms-1"></i></label>
                                                <input type="checkbox" name="" id="colorCheck444" class="form-check-input">
                                            </div>
                                            <div>
                                                <span class="fw-bold font-14">(14)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                            <div class="form-check">
                                                <label for="colorCheck333" class="form-check-label">هدست <i class="bi bi-headset ms-1"></i></label>
                                                <input type="checkbox" name="" id="colorCheck333" class="form-check-input">
                                            </div>
                                            <div>
                                                <span class="fw-bold font-14">(8)</span>
                                            </div>
                                        </div>
                                        <div class="text-center mb-3 mt-2">
                                            <input type="submit" class="btn main-color-green text-white rounded-pill px-5 py-2" value="اعمال فیلتر">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- end filter mobile -->

        <div class="panel-header mb-5">
            <div class="content-box">
                <div class="container-fluid">
                    <div class="d-flex py-2 align-items-center flex-wrap justify-content-sm-between">
                        <h5>جستجو برای <span>"موبایل"</span></h5>
                        <h5 class="main-color-one-color">77 نتیجه پیدا شد</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 d-lg-block d-none">
                <div class="item-boxs position-sticky top-0">
                    <div class="item-box shadow-box">
                        <div class="title">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="font-14">فیلتر های اعمال شده</h6>
                                <a class="btn border-0" data-bs-toggle="collapse" href="#collapseItemBox"
                                   role="button" aria-expanded="false">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                        <div class="desc collapse show" id="collapseItemBox">
                            <a href=""
                               class="btn btn-sm rounded-pill border-1 border-muted me-1 font-14 mb-2">
                                <span>گوشی الجی</span>
                                <span class="ms-3"><i class="bi bi-x text-danger"></i></span></a>
                            <a href=""
                               class="btn btn-sm rounded-pill border-1 border-muted me-1 font-14 mb-2">
                                <span>دوربین 108</span>
                                <span class="ms-3"><i class="bi bi-x text-danger"></i></span></a>
                        </div>
                    </div>

                    <div class="item-box shadow-box">
                        <div class="title">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="font-14">محدوده قیمت</h6>
                                <a class="btn border-0" data-bs-toggle="collapse" href="#collapsePrice"
                                   role="button" aria-expanded="false">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                        <div class="desc collapse show" id="collapsePrice">
                            <div class="filter-item-content">
                                <form action="" method="get">
                                    <div class="form-group">
                                        <input type="range" class="catRange" name="range[]">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="number" name=""  min="1500000"
                                                   class="form-control input-range-filter"
                                                   placeholder="از 1500000">
                                        </div>
                                        <div class="col-6">
                                            <input type="number" name=""  min="1500000" max="3000000"
                                                   class="form-control input-range-filter"
                                                   placeholder="از 3000000">
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center my-3">
                                                <input type="submit" class="btn main-color-green text-white rounded-pill px-5 py-2" value="اعمال فیلتر">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="item-box shadow-box">
                        <div class="title">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="font-14">فیلتر بر اساس رنگ</h6>
                                <a class="btn border-0" data-bs-toggle="collapse" href="#collapseItemBoxExist"
                                   role="button" aria-expanded="false">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                        <div class="desc collapse show" id="collapseItemBoxExist">
                            <div class="filter-item-content">
                                <form action="">
                                    <div class="product-meta-color-items">
                                        <input type="radio" class="btn-check" name="options" id="option1"
                                               autocomplete="off" checked>
                                        <label class="btn btt-light" for="option1">
                                            <span style="background-color: #c00;"></span>
                                            قرمز
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option2"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option2">
                                            <span style="background-color: #111;"></span>
                                            مشکی
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option3"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option3">
                                            <span style="background-color: #00cc5f;"></span>
                                            سبز
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option4"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option4">
                                            <span style="background-color: #1b69f0;"></span>
                                            آبی
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option5"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option5">
                                            <span style="background-color: #891bf0;"></span>
                                            بنفش
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option6"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option6">
                                            <span style="background-color: #f0501b;"></span>
                                            نارنجی
                                        </label>
                                        <div class="text-center mb-3 mt-2">
                                            <input type="submit" class="btn main-color-green text-white rounded-pill px-5 py-2" value="اعمال فیلتر">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="item-box shadow-box">
                        <div class="title">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="font-14">فیلتر براساس رنگ</h6>
                                <a class="btn border-0" data-bs-toggle="collapse" href="#collapseItemBoxColor"
                                   role="button" aria-expanded="false">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                        <div class="desc collapse show" id="collapseItemBoxColor">
                            <div class="filter-item-content">
                                <form action="">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="form-check">
                                            <label for="colorCheck11" class="form-check-label">موبایل <i class="bi bi-phone ms-1"></i></label>
                                            <input type="checkbox" name="" id="colorCheck11" class="form-check-input">
                                        </div>
                                        <div>
                                            <span class="fw-bold font-14">(27)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="form-check">
                                            <label for="colorCheck55" class="form-check-label">ایرپاد <i class="bi bi-earbuds ms-1"></i></label>
                                            <input type="checkbox" name="" id="colorCheck55" class="form-check-input">
                                        </div>
                                        <div>
                                            <span class="fw-bold font-14">(32)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="form-check">
                                            <label for="colorCheck44" class="form-check-label">تبلت <i class="bi bi-tablet ms-1"></i></label>
                                            <input type="checkbox" name="" id="colorCheck44" class="form-check-input">
                                        </div>
                                        <div>
                                            <span class="fw-bold font-14">(14)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="form-check">
                                            <label for="colorCheck33" class="form-check-label">هدست <i class="bi bi-headset ms-1"></i></label>
                                            <input type="checkbox" name="" id="colorCheck33" class="form-check-input">
                                        </div>
                                        <div>
                                            <span class="fw-bold font-14">(8)</span>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3 mt-2">
                                        <input type="submit" class="btn main-color-green text-white rounded-pill px-5 py-2" value="اعمال فیلتر">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="filter-items shadow-box mb-4 bg-white p-4 rounded-4">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <div class="filter-item">
                                <div class="header-form">
                                    <form action="">
                                        <input type="search" class="form-control input-search" placeholder="جستجوی محصول">
                                        <button type="submit" class="btn input-btn-search"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="filter-item">
                                <div class="filter-item-select">
                                    <form action="">
                                        <div>
                                            <div class="row align-items-center">
                                                <div class="col-5">
                                                    <h6>نمایش بر اساس:</h6>
                                                </div>
                                                <div class="col-7">
                                                    <select name="" id="" class="form-select">
                                                        <option value="0" selected>جدیدترین</option>
                                                        <option value="1">بروزترین</option>
                                                        <option value="2">گران ترین</option>
                                                        <option value="3">داغ ترین</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="filter-label">
                                <p class="text-muted text-end mb-0"> نمایش 15 کالا از 65 کالای موجود</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-box pro-shadow">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="assets/img/product/television1.jpg" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                        سلیکونی
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
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="افزودن به سبد خرید"><i
                                                    class="bi bi-basket"></i></a></li>
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-box pro-shadow">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="assets/img/product/wach2.jpg" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                        سلیکونی
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
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="افزودن به سبد خرید"><i
                                                    class="bi bi-basket"></i></a></li>
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-box pro-shadow">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="assets/img/product/wach3.jpg" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                        سلیکونی
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
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="افزودن به سبد خرید"><i
                                                    class="bi bi-basket"></i></a></li>
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-box pro-shadow">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="assets/img/product/wach4.jpg" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                        سلیکونی
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
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="افزودن به سبد خرید"><i
                                                    class="bi bi-basket"></i></a></li>
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-box pro-shadow">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="assets/img/product/television4.jpg" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                        سلیکونی
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
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="افزودن به سبد خرید"><i
                                                    class="bi bi-basket"></i></a></li>
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-box pro-shadow">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="assets/img/product/television1.jpg" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                        سلیکونی
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
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="افزودن به سبد خرید"><i
                                                    class="bi bi-basket"></i></a></li>
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-box pro-shadow">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="assets/img/product/product-image1.jpg" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                        سلیکونی
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
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="افزودن به سبد خرید"><i
                                                    class="bi bi-basket"></i></a></li>
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-box pro-shadow">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="assets/img/product/product-image3.jpg" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                        سلیکونی
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
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="افزودن به سبد خرید"><i
                                                    class="bi bi-basket"></i></a></li>
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-box pro-shadow">
                            <a href="">
                                <div class="product-box-image">
                                    <img src="assets/img/product/product-image6.jpg" alt="">
                                </div>
                                <div class="product-box-title">
                                    <h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                        سلیکونی
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
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-title="افزودن به سبد خرید"><i
                                                    class="bi bi-basket"></i></a></li>
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
<!-- end main content page -->
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
