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
                                <div class="auth-form shadow-xl rounded-3  mt-5 bg-white">
                                    <div class="auth-form-title mb-4 slider-title-desc-center">
                                        <h2 class="text-center h4 text-muted title-font">ورود / ثبت نام</h2>
                                    </div>
                                    <form action="<?php echo e(route('auth.customer.login-register')); ?>" method="post">
                                        <?php echo csrf_field(); ?>

                                        <section class="comment-item mb-3">
                                            <input type="text" class="form-control" name="id"  value="<?php echo e(old('id')); ?>">
                                            <label for="floatingInputEmail" class="form-label label-float">شماره موبایل خود را وارد
                                            کنید</label>
                                            <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                <strong>
                                                    <?php echo e($message); ?>

                                                </strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success w-100 mt-4 btn-login">وورد به
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

    <!-- end content -->





</body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.master-simple', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saleh\Desktop\amanj perfume\resources\views/customer/auth/login-register.blade.php ENDPATH**/ ?>