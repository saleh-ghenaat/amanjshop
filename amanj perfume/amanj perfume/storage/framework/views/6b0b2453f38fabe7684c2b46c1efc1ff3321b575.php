<?php $__env->startSection('content'); ?>


<section class="vh-100 d-flex justify-content-center align-items-center pb-5">
    <form action="<?php echo e(route('auth.customer.login-register')); ?>" method="post">
        <?php echo csrf_field(); ?>
    <section class="login-wrapper mb-5">
        <section class="login-logo">
            <img src="<?php echo e(asset('customer-assets/images/logo/4.png')); ?>" alt="">
        </section>
        <section class="login-title">ورود / ثبت نام</section>
        <section class="login-info">شماره موبایل یا پست الکترونیک خود را وارد کنید</section>
        <section class="login-input-text">
            <input type="text" name="id" value="<?php echo e(old('id')); ?>">
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
        </section>
        <section class="login-btn d-grid g-2"><button class="btn btn-danger">ورود به آمازون</button></section>
        <section class="login-terms-and-conditions"><a href="#">شرایط و قوانین</a> را خوانده ام و پذیرفته ام</section>
    </section>
    </form>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master-simple', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Desktop/desk/project۰org/resources/views/customer/auth/login-register.blade.php ENDPATH**/ ?>