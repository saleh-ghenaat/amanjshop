<header class="header">
    <div class="container-fluid">
        <div class="row gy-3 align-items-center">
            <div class="col-xl-3 col-6">
                <div class="header-logo">
                    <div class="image">
                        <a href="index.html">
                            <img src="customer-assets/img/logo.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="description d-md-block d-none">
                        <h6 class="font-20 title-font">فروشگاه آنلاین شاهان</h6>
                        <p class="mb-0 mt-1 text-muted">فروشگاهی برای همه سلیقه ها</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 d-xl-block d-none">
                <div class="header-form">
                    <form action="{{route('customer.search')}}">
                        <input type="search" class="form-control input-search" placeholder="جستجوی محصول">
                        <button type="submit" class="btn input-btn-search"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-6">
                <div class="header-btn">
                    <div class="header-cart d-lg-block d-none">
                        <a data-bs-toggle="offcanvas" href="#offcanvasCart" role="button" aria-controls="offcanvasCart"
                           class="btn main-color-one-bg">
                            <i class="bi bi-basket-fill"></i>
                            <span>سبد خرید</span>
                            <span id="cartCounter" class="cart-counter">0</span>
                        </a>
                    </div>
                    @auth
                        <button class="btn btn-link text-decoration-none text-dark dropdown-toggle profile-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </button>
                        <section class="dropdown-menu dropdown-menu-end custom-drop-down" aria-labelledby="dropdownMenuButton1">
                            <section><a class="dropdown-item" href="{{ route('customer.profile.profile') }}"><i class="fa fa-user-circle"></i>پروفایل کاربری</a></section>
                            <section><a class="dropdown-item" href="{{route('customer.profile.orders')}}"><i class="fa fa-newspaper"></i>سفارشات</a></section>
                            <section><a class="dropdown-item" href="{{route('customer.profile.my-favorites')}}"><i class="fa fa-heart"></i>لیست علاقه مندی</a></section>
                            <section>
                                <hr class="dropdown-divider">
                            </section>
                            <section><a class="dropdown-item" href="{{ route('auth.customer.logout') }}"><i class="fa fa-sign-out-alt"></i>خروج</a>
                            </section>

                        </section>
                        @endauth
                    @guest
                    <div class="header-btn-login d-lg-block d-none">
                        <a href="{{ route('auth.customer.login-register-form') }}" class="btn"><i class="bi bi-person-fill"></i> ورود / ثبت نام</a>
                    </div>
                    @endguest
                    <div class="header-btn-login-responsive d-lg-none d-block">
                        <a href="" class="btn"><i class="bi bi-person-fill fs-2"></i></a>
                    </div>
                    <div class="header-btn-favorite">
                        <a href="{{route('customer.profile.my-favorites')}}" class="btn"><i class="bi bi-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-2 d-xl-none d-block">
                <div class="responsive-menu d-xl-none d-block">
                    <button class="btn border-0 p-0 btn-responsive-menu" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#responsiveMenu" aria-controls="responsive menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                             class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="responsiveMenu"
                         aria-labelledby="responsive menu">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">فروشگاه شاهان</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <a href="" class="text-center d-block mb-3">
                                <img src="customer-assets/img/logo.png" alt="" class="img-fluid" width="200">
                            </a>
                            <ul class="rm-item-menu navbar-nav">
                                <li class="nav-item bg-ul-f7"><a href="index.html" class="nav-link">صفحه
                                    اصلی</a>
                                </li>
                                <li class="nav-item bg-ul-f7">
                                    <a href="" class="nav-link">گوشی موبایل</a>
                                    <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                    <ul class="navbar-nav h-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">برند</a>
                                            <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                            <ul class="navbar-nav h-0 bg-ul-f7">
                                                <li class="nav-item"><a href="" class="nav-link">سامسونگ</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">هوآوی</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">شیائومی</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">الجی</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">سونی</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">بر اساس رده بندی</a>
                                            <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                            <ul class="navbar-nav h-0 bg-ul-f7">
                                                <li class="nav-item"><a href="" class="nav-link">لمسی</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">دکمه ای</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">نظامی</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item bg-ul-f7">
                                    <a href="" class="nav-link">تبلت</a>
                                    <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                    <ul class="navbar-nav h-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">کشور</a>
                                            <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                            <ul class="navbar-nav h-0 bg-ul-f7">
                                                <li class="nav-item"><a href="" class="nav-link">ژاپن</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">کره جنوبی</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">آمریکایی</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">بر اساس رده بندی</a>
                                            <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                            <ul class="navbar-nav h-0 bg-ul-f7">
                                                <li class="nav-item"><a href="" class="nav-link">لمسی</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">دانش آموزی</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">مخصوص بازی</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item bg-ul-f7">
                                    <a href="" class="nav-link">لپتاپ</a>
                                    <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                    <ul class="navbar-nav h-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">برند</a>
                                            <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                            <ul class="navbar-nav h-0 bg-ul-f7">
                                                <li class="nav-item"><a href="" class="nav-link">ایسر</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">مایکروسافت</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">ایسوس</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">اپل</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">سونی</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">بر اساس قیمت</a>
                                            <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                            <ul class="navbar-nav h-0 bg-ul-f7">
                                                <li class="nav-item"><a href="" class="nav-link">ارزان</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">اقتصادی</a>
                                                </li>
                                                <li class="nav-item"><a href="" class="nav-link">گران</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item bg-ul-f7">
                                    <a href="" class="nav-link">صفحات</a>
                                    <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                    <ul class="navbar-nav h-0">
                                        <li><a href="index.html">صفحه اصلی</a></li>
                                        <li class="nav-item"><a class="nav-link" href="product.html">صفحه
                                            محصول</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="category.html">صفحه دسته
                                            بندی</a></li>
                                        <li class="nav-item"><a class="nav-link" href="cart.html">صفحه سبد
                                            خرید</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="search.html">صفحه
                                            جستجو</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="category-product-row.html">دسته
                                            بندی محصولات خطی</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">صفحه 404</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="login.html">صفحه ورود</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="register.html">صفحه ثبت
                                            نام</a></li>
                                        <li class="nav-item"><a class="nav-link" href="forget.html">صفحه فراموشی
                                            رمز
                                            عبور</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog.html">صفحه وبلاگ</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="blog-detail.html">صفحه
                                            جزییات
                                            وبلاگ</a></li>
                                        <li class="nav-item"><a class="nav-link" href="compare.html">صفحه مقایسه
                                            محصول</a></li>
                                        <li class="nav-item"><a class="nav-link" href="checkout.html">پرداخت
                                            مرحله
                                            ای</a></li>
                                        <li class="nav-item"><a class="nav-link" href="payment-ok.html">پرداخت
                                            موفق</a></li>
                                        <li class="nav-item"><a class="nav-link" href="payment-nok.html">پرداخت
                                            ناموفق</a></li>
                                        <li class="nav-item"><a class="nav-link" href="product-not-found.html">محصول
                                            ناموجود</a></li>
                                        <li class="nav-item"><a class="nav-link" href="empty-cart.html">سبد خرید
                                            خالی</a></li>
                                        <li class="nav-item"><a class="nav-link" href="dashboard.html"> داشبورد
                                            کاربری</a></li>
                                        <li class="nav-item"><a class="nav-link" href="order.html">سفارشات</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="favorite.html">محصولات
                                            مورد
                                            علاقه</a></li>
                                        <li class="nav-item"><a class="nav-link" href="notification.html">اطلاعیه</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="comments.html">نظرات</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="address-create.html">آدرس ها</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="last-seen.html">آخرین
                                            بازدید
                                            ها</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-11 col-10 d-xl-none d-block">
                <div class="d-flex">
                    <div class="header-form w-100">
                        <form action="">
                            <input type="search" class="form-control input-search" placeholder="جستجوی محصول">
                            <button type="submit" class="btn input-btn-search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                    <div class="text-end ms-lg-4 ms-2">
                        <a data-bs-toggle="offcanvas" href="#offcanvasCart" role="button" aria-controls="offcanvasCart"
                           class="btn border-0 main-color-green"><i class="bi bi-basket text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- start mega menu -->

<div class="mega-menu-parent position-sticky top-0 d-xl-block d-none">
    <div class="container-fluid">
        <div class="header-top-menu">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="header-top-menu-right">
                        <div class="top-menu-menu">
                            <ul class="navbar-nav align-items-center">
                                <li class="position-relative m-0"></li>
                                <li class="nav-item main-menu-head"><a href=""
                                                                       class="nav-link header-top-menu-link-a  nav-active fw-bold"><i
                                        class="bi bi-list"></i>
                                    مگا تب منو
                                </a>
                                    <ul class="main-menu mega-container">
                                        <li class="main-menu-sub-active-li"><a href=""><i
                                                class="bi bi-phone"></i>
                                            موبایل</a>
                                            <ul class="main-menu-sub back-menu"
                                                style=" background: #fff url('assets/img/509-5092096_offering-high-quality-mobile-repair-service-main-image_prev_ui.png') no-repeat;">
                                                <li><a class="title my-flex-baseline" href="">برند های مختلف
                                                    گوشی</a>
                                                </li>
                                                <li><a href="">گوشی اپل</a></li>
                                                <li><a href="">گوشی سامسونگ</a></li>
                                                <li><a href="">گوشی شیائومی</a></li>
                                                <li><a href="">گوشی بلک بری</a></li>
                                                <li><a href="">گوشی ایرانی</a></li>
                                                <li><a class="title my-flex-baseline" href="">گوشی بر اساس
                                                    قیمت</a></li>
                                                <li><a href="">گوشی تا 2 میلیون</a></li>
                                                <li><a href="">گوشی تا 5 میلیون</a></li>
                                                <li><a href="">گوشی تا 10 میلیون</a></li>
                                                <li><a href="">گوشی تا 12 میلیون</a></li>
                                                <li><a href="">گوشی تا 15 میلیون</a></li>
                                                <li><a class="title my-flex-baseline" href="">گوشی براساس حافظه
                                                    داخلی</a></li>
                                                <li><a href="">گوشی تا 16 گیگابایت</a></li>
                                                <li><a href="">گوشی تا 32 گیگابایت</a></li>
                                                <li><a href="">گوشی تا 64 گیگابایت</a></li>
                                                <li><a href="">گوشی تا 128 گیگابایت</a></li>
                                                <li><a href="">گوشی تا 256 گیگابایت</a></li>
                                                <li><a href="">گوشی تا 512 گیگابایت</a></li>
                                                <li><a href="">گوشی تا 1 ترابایت</a></li>
                                                <li><a class="title my-flex-baseline" href="">گوشی براساس
                                                    کاربری</a>
                                                </li>
                                                <li><a href="">گوشی اقتصادی</a></li>
                                                <li><a href="">گوشی دانش آموزی</a></li>
                                                <li><a href="">گوشی لاکچری</a></li>
                                                <li><a href="">گوشی پرچمدار</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=""><i class="bi bi-tablet"></i> تبلت</a>
                                            <ul class="main-menu-sub back-menu"
                                                style=" background: #fff url('assets/img/tablet-menu.png') no-repeat;">
                                                <li><a class="title my-flex-baseline" href="">برند های مختلف
                                                    تبلت</a>
                                                </li>
                                                <li><a href="">تبلت اپل</a></li>
                                                <li><a href="">تبلت سامسونگ</a></li>
                                                <li><a href="">تبلت شیائومی</a></li>
                                                <li><a href="">تبلت بلک بری</a></li>
                                                <li><a href="">تبلت ایرانی</a></li>
                                                <li><a class="title my-flex-baseline" href="">تبلت بر اساس
                                                    قیمت</a></li>
                                                <li><a href="">تبلت تا 2 میلیون</a></li>
                                                <li><a href="">تبلت تا 5 میلیون</a></li>
                                                <li><a href="">تبلت تا 10 میلیون</a></li>
                                                <li><a href="">تبلت تا 12 میلیون</a></li>
                                                <li><a href="">تبلت تا 15 میلیون</a></li>
                                                <li><a class="title my-flex-baseline" href="">تبلت براساس حافظه
                                                    داخلی</a></li>
                                                <li><a href="">تبلت تا 16 گیگابایت</a></li>
                                                <li><a href="">تبلت تا 32 گیگابایت</a></li>
                                                <li><a href="">تبلت تا 64 گیگابایت</a></li>
                                                <li><a href="">تبلت تا 128 گیگابایت</a></li>
                                                <li><a href="">تبلت تا 256 گیگابایت</a></li>
                                                <li><a href="">تبلت تا 512 گیگابایت</a></li>
                                                <li><a href="">تبلت تا 1 ترابایت</a></li>
                                                <li><a class="title my-flex-baseline" href="">تبلت براساس
                                                    کاربری</a>
                                                </li>
                                                <li><a href="">گتبلتوشی اقتصادی</a></li>
                                                <li><a href="">تبلت دانش آموزی</a></li>
                                                <li><a href="">تبلت لاکچری</a></li>
                                                <li><a href="">تبلت پرچمدار</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=""><i class="bi bi-shield"></i>آنتی ویروس</a>
                                            <ul class="main-menu-sub back-menu"
                                                style=" background: #fff url('assets/img/EAV.png') no-repeat;">
                                                <li><a class="title my-flex-baseline" href="">براساس برند</a>
                                                </li>
                                                <li><a href="">نود 32</a></li>
                                                <li><a href="">کسپر اسکای</a></li>
                                                <li><a href="">360 سکوریتی</a></li>
                                                <li><a href="">بیت دیفیندر</a></li>
                                                <li><a href="">ایمن</a></li>
                                                <li><a class="title my-flex-baseline" href="">براساس ویندوز</a>
                                                </li>
                                                <li><a href="">ویندوز 7</a></li>
                                                <li><a href="">ویندوز 8</a></li>
                                                <li><a href="">ویندوز 8.1</a></li>
                                                <li><a href="">ویندوز 10</a></li>
                                                <li><a href="">ویندوز 11</a></li>
                                                <li><a class="title my-flex-baseline" href="">براساس برند</a>
                                                </li>
                                                <li><a href="">نود 32</a></li>
                                                <li><a href="">کسپر اسکای</a></li>
                                                <li><a href="">360 سکوریتی</a></li>
                                                <li><a href="">بیت دیفیندر</a></li>
                                                <li><a href="">ایمن</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=""><i class="bi bi-laptop"></i>لبتاپ</a>
                                            <ul class="main-menu-sub back-menu"
                                                style=" background: #fff url('assets/img/labtop.png') no-repeat;">
                                                <li><a class="title my-flex-baseline" href="">برند های مختلف
                                                    لبتاپ</a>
                                                </li>
                                                <li><a href="">لبتاپ اپل</a></li>
                                                <li><a href="">لبتاپ سامسونگ</a></li>
                                                <li><a href="">لبتاپ شیائومی</a></li>
                                                <li><a href="">لبتاپ بلک بری</a></li>
                                                <li><a href="">لبتاپ ایرانی</a></li>
                                                <li><a class="title my-flex-baseline" href="">لبتاپ بر اساس
                                                    قیمت</a>
                                                </li>
                                                <li><a href="">لبتاپ تا 2 میلیون</a></li>
                                                <li><a href="">لبتاپ تا 5 میلیون</a></li>
                                                <li><a href="">لبتاپ تا 10 میلیون</a></li>
                                                <li><a href="">لبتاپ تا 12 میلیون</a></li>
                                                <li><a href="">لبتاپ تا 15 میلیون</a></li>
                                                <li><a class="title my-flex-baseline" href="">لبتاپ براساس حافظه
                                                    داخلی</a></li>
                                                <li><a href="">لبتاپ تا 16 گیگابایت</a></li>
                                                <li><a href="">لبتاپ تا 32 گیگابایت</a></li>
                                                <li><a href="">لبتاپ تا 64 گیگابایت</a></li>
                                                <li><a href="">لبتاپ تا 128 گیگابایت</a></li>
                                                <li><a href="">لبتاپ تا 256 گیگابایت</a></li>
                                                <li><a href="">لبتاپ تا 512 گیگابایت</a></li>
                                                <li><a href="">لبتاپ تا 1 ترابایت</a></li>
                                                <li><a class="title my-flex-baseline" href="">لبتاپ براساس
                                                    کاربری</a>
                                                </li>
                                                <li><a href="">لبتاپ اقتصادی</a></li>
                                                <li><a href="">لبتاپ دانش آموزی</a></li>
                                                <li><a href="">لبتاپ لاکچری</a></li>
                                                <li><a href="">لبتاپ پرچمدار</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=""><i class="bi bi-tag"></i>پر فروش ترین ها</a>
                                            <ul class="main-menu-sub back-menu"
                                                style=" background: #fff url('assets/img/top-sales.jpeg') no-repeat;">
                                                <li><a class="title my-flex-baseline" href="">زیر منو شماره
                                                    1 </a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a class="title my-flex-baseline" href="">زیر منو شماره
                                                    1 </a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a class="title my-flex-baseline" href="">زیر منو شماره
                                                    1 </a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a class="title my-flex-baseline" href="">زیر منو شماره
                                                    1 </a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                                <li><a href="">زیر منو شماره 1</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="{{route('customer.home')}}" class="nav-link header-top-menu-link-a  ">صفحه اصلی
                                    <i class="bi bi-house"></i></a>

                                </li>

                                <li class="nav-item"><a href="{{route('customer.about')}}" class="nav-link  header-top-menu-link-a ">درباره ما<i class="bi bi-menu-app"></i></a>

                                </li>
                                <li class="nav-item"><a href="{{route('customer.contact')}}" class="nav-link header-top-menu-link-a  ">
                                    ارتباط با ما <i class="bi bi-telephone"></i></a></li>
                                <li class="nav-item"><a href="{{route('customer.faq')}}" class="nav-link header-top-menu-link-a  ">سوالات متداول<i class="bi bi-question"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="header-top-menu-left">
                        <div class="row align-items-center">
                            <div class="col-6 d-lg-none d-xl-block d-block">
                                <div class="header-top-menu-link">
                                    <a href="header-top-menu-link-email" class="">admin@admin.com <i
                                            class="bi bi-envelope-check-fill"></i></a>
                                    <a href="header-top-menu-link-tel" class="">02112345678<i
                                            class="bi bi-telephone-inbound-fill"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="header-top-menu-socail">
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-youtube"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                    <a href=""><i class="bi bi-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end mega menu -->
