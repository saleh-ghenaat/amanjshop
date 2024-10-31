@extends('customer.layouts.master-one-col')

@section('content')



<body style="background: url('assets/img/bg-auth.jpg');background-repeat: no-repeat;background-size: cover">


<!-- start content -->

<div class="content vh-100">
    <div class="container-fluid h-100">
        <div class="auth h-100 d-flex align-items-center">
            <div class="container-fluid">
                <div class="auth-items">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">

                            <div class="auth-logo text-center">
                                <a href="">
                                    <img src="assets/img/logo.png" width="200" alt="">
                                </a>
                            </div>
                            <div class="auth-form shadow-xl rounded-3  mt-5 bg-white">
                                <div class="auth-form-title mb-4 slider-title-desc-center">
                                    <h2 class="text-center h4 text-muted title-font">ورود / ثبت نام</h2>
                                </div>
                                <form action="">

                                    <div class="comment-item mb-3">
                                        <input type="email" class="form-control" id="floatingInputEmail">
                                        <label for="floatingInputEmail" class="form-label label-float">ایمیل خود را وارد
                                            کنید</label>
                                    </div>

                                    <div class="comment-item mt-4 position-relative">
                                        <input type="password" class="form-control" id="floatingInputPasswd">
                                        <label for="floatingInputPasswd" class="form-label label-float">رمز عبور خود را
                                            وارد
                                            کنید</label>
                                    </div>

                                    <div class="comment-item mt-4 position-relative">
                                        <input type="password" class="form-control" id="floatingInputPasswd2">
                                        <label for="floatingInputPasswd2" class="form-label label-float">رمز عبور خود را دوباره
                                            وارد
                                            کنید</label>
                                    </div>


                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-success w-100 mt-4 btn-login">
                                            ثبت نام در سایت
                                        </button>
                                    </div>

                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn main-color-two-bg btn-login w-100" style="border-color: transparent">
                                            وورد با گوگل
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <p class="loginTermsDesc">با ورود و یا ثبت نام در شاهان شما <a class="underlined main-color-one-color fw-bold"
                                                                                              href="/rules/">شرایط و
                                قوانین</a> استفاده از سرویس‌های سایت شاهان و <a class="underlined main-color-one-color fw-bold"
                                                                                   href="/privacy-polices/">قوانین حریم
                                خصوصی</a> آن را می‌پذیرید.</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- end content -->



<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle-5.3.2.min.js"></script>
<script src="assets/js/plugin/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/plugin/countdown/countdown.js"></script>
<script src="assets/js/plugin/vanilla-tilt/vanilla-tilt.min.js"></script>
<script src="assets/js/plugin/rasta-contact/script.js"></script>
<script src="assets/js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

</body>

@endsection
