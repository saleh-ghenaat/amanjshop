@extends('customer.layouts.master-one-col')

@section('head-tag')
<title>ویرایش اطلاعات کاربری </title>
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
                <li class="breadcrumb-item"><a href="{{route('customer.home')}}" class="font-14 text-muted-two">خانه</a></li>
                <li class="breadcrumb-item"><a href="{{route('customer.profile.profile')}}" class="font-14 text-muted-two">پروفایل</a></li>

                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page">ویرایش پروفایل
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
                                                        <a href="{{ route('customer.profile.edit-profile') }}" class="ms-2"><i class="bi bi-pencil-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="penel-form">
                            <div class="content-box">
                                <div class="container-fluid">
                                    <form class="row" method="post"
                                        action="{{ route('customer.profile.profile.update') }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="comment-item mb-3">
                                                    <input type="text" name="first_name" class="form-control" id="floatingInputName" placeholder="نام خود را وارد کنید...">
                                                    <label for="first_name" class="form-label label-float fw-bold font-16">نام <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="comment-item mb-3">
                                                    <input type="text" name="last_name" class="form-control" id="floatingInputLName" placeholder="نام خانوادگی خود را وارد کنید ...">
                                                    <label for="last_name" class="form-label label-float fw-bold">نام خانوادگی <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="comment-item mb-3">
                                                    <input type="text" name="national_code" class="form-control" id="floatingInputLName" placeholder="کد ملی  خود را وارد کنید ...">
                                                    <label for="national_code" class="form-label label-float fw-bold">کد ملی <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="comment-item mb-3">
                                                    <input type="text" class="form-control" id="floatingInputStreet" placeholder="آدرس  خود را وارد کنید ...">
                                                    <label for="floatingInputStreet" class="form-label label-float fw-bold">آدرس خیابان</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="comment-item" for="floatingInputOstan">
                                                    <label class="label-float fw-bold">استان <span class="text-danger">*</span></label>
                                                    <select name="province" id="province" class="form-select">
                                                        <option selected>انتخاب استان</option>
                                                        @foreach ($provinces as $province)
                                                        <option value="{{ $province->id }}" data-url="{{ route('customer.sales-process.get-cities', $province->id) }}">
                                                            {{ $province->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="comment-item">
                                                    <label class="label-float fw-bold" for="floatingInputCity">شهر <span class="text-danger">*</span></label>
                                                    <form action="">
                                                        <select name="city" id="city" class="form-select">
                                                            <option selected>شهر را انتخاب کنید</option>
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
                                                <div class="form-group">
                                                    <button type="submit" class="btn product-meta-add-to-cart-btn main-color-one-bg rounded-pill">
                                                         ثبت ویرایش
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
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
@section('script')
<script>
    $(document).ready(function() {
        $('#province').change(function() {
            var element = $('#province option:selected');
            var url = element.attr('data-url');

            $.ajax({
                url: url,
                type: "GET",
                success: function(response) {
                    if (response.status) {
                        let cities = response.cities;
                        $('#city').empty();
                        cities.forEach((city) => {
                            $('#city').append($('<option/>').val(city.id).text(city.name));
                        });
                    } else {
                        errorToast('خطا پیش آمده است');
                    }
                },
                error: function() {
                    errorToast('خطا پیش آمده است');
                }
            });
        });

        // edit
        var addresses = {!! auth()->user()->addresses !!};
        addresses.forEach(function(address) {
            var id = address.id;
            var target = `#province-${id}`;
            var selected = `${target} option:selected`;

            $(target).change(function() {
                var element = $(selected);
                var url = element.attr('data-url');

                $.ajax({
                    url: url,
                    type: "GET",
                    success: function(response) {
                        if (response.status) {
                            let cities = response.cities;
                            $(`#city-${id}`).empty();
                            cities.forEach((city) => {
                                $(`#city-${id}`).append($('<option/>').val(city.id).text(city.name));
                            });
                        } else {
                            errorToast('خطا پیش آمده است');
                        }
                    },
                    error: function() {
                        errorToast('خطا پیش آمده است');
                    }
                });
            });
        });
    });
</script>


@endsection
