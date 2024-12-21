<?php $__env->startSection('head-tag'); ?>

<style>
    #resend-otp{
        font-size: 1rem;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<section class="vh-100 d-flex justify-content-center align-items-center pb-5">
    <form action="<?php echo e(route('auth.customer.login-confirm', $token)); ?>" method="post">
        <?php echo csrf_field(); ?>
    <section class="login-wrapper mb-5">
        <section class="login-logo">
            <img src="<?php echo e(asset('customer-assets/images/logo/4.png')); ?>" alt="">
        </section>
        <section class="login-title mb-2">
            <a href="<?php echo e(route('auth.customer.login-register-form')); ?>">
                <i class="fa fa-arrow-right"></i>
            </a>
        </section>
          <section class="login-title">
            کد تایید را وارد نمایید
        </section>

        <?php if($otp->type == 0): ?>
        <section class="login-info">
            کد تایید برای شماره موبایل <?php echo e($otp->login_id); ?> ارسال گردید
        </section>
        <?php else: ?>
        <section class="login-info">
            کد تایید برای ایمیل <?php echo e($otp->login_id); ?> ارسال گردید
        </section>
        <?php endif; ?>
        <section class="login-input-text">
            <input type="text" name="otp" value="<?php echo e(old('otp')); ?>">
            <?php $__errorArgs = ['otp'];
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
        <section class="login-btn d-grid g-2"><button class="btn btn-danger">تایید</button></section>

        <section id="resend-otp" class="d-none">
            <a href="#" class="text-decoration-none text-primary">دریافت مجدد کد تایید</a>
        </section>
        <section id="timer"></section>

    </section>
    </form>
</section>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<?php
    $timer = ((new \Carbon\Carbon($otp->created_at))->addMinutes(5)->timestamp - \Carbon\Carbon::now()->timestamp) * 1000;
?>

<script>

   var countDownDate = new Date().getTime() + <?php echo e($timer); ?>;
    var timer = $('#timer');
    var resendOtp = $('#resend-otp');

    var x = setInterval(function(){

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if(minutes == 0){
            timer.html('ارسال مجدد کد تایید تا ' + seconds + 'ثانیه دیگر')
        }
        else{
            timer.html('ارسال مجدد کد تایید تا ' + minutes + 'دقیقه و ' + seconds + 'ثانیه دیگر');
        }
        if(distance < 0)
        {
            clearInterval(x);
            timer.addClass('d-none');
            resendOtp.removeClass('d-none');
        }

    }, 1000)





</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master-simple', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Desktop/desk/project۰org/resources/views/customer/auth/login-confirm.blade.php ENDPATH**/ ?>