<?php $__env->startSection('content'); ?>

<body style="background: url('/customer-assets/img/bg-auth.jpg');background-repeat: no-repeat;background-size: cover">


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
                                <div class="auth-form shadow-xl rounded-3 bg-white">
                                    <div class="auth-form-title mb-4 slider-title-desc-center">
                                        <h2 class="text-center h4 text-muted title-font">ورود / ثبت نام</h2>
                                    </div>
                                    <form action="<?php echo e(route('auth.customer.login-confirm', $token)); ?>" method="post">
                                        <?php echo csrf_field(); ?>

                                        <div class="alert text-center alert-success">
                                            یک کد برای شما پیامک شد لطفا آن را وارد کنید
                                        </div>

                                        <div id="otp-input">
                                            <input placeholder="_" type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*" />
                                            <input placeholder="_" type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*" />
                                            <input placeholder="_" type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*" />
                                            <input placeholder="_" type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*" />
                                            <input placeholder="_" type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*" />
                                            <input placeholder="_" type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*" />
                                            <input id="otp-value" placeholder="_" type="hidden" name="otp" />
                                        </div>


                                        <!-- Countdown timer html -->
                                        <div class="countDownContainer">
                                            <div class="countdown-bar" id="countdownB">
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>


                                        <div class="form-group mt-3">
                                            <button type="submit" id="submit" class="btn btn-success w-100 mt-4 btn-login">وورد به
                                                سایت
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
</body>
<!-- end content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<!-- Run Countdown Timer Script -->
<script type="text/javascript">
    $(document).ready(function() {

        countdown('countdownB', 0, 0, 0, 50);
    });
</script>
<!-- End script -->

<!-- otp input callback -->


<script>
    const continueButton = document.querySelector("#submit");
    continueButton.addEventListener("click", (e) => {
        updateValue(inputs);
    });
</script>

<!-- end otp input callback -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.master-simple', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saleh\Desktop\amanj perfume\resources\views/customer/auth/login-confirm.blade.php ENDPATH**/ ?>