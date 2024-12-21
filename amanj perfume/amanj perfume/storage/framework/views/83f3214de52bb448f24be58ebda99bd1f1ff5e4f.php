<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('customer.layouts.head-tag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head-tag'); ?>
</head>
<body>

    <?php echo $__env->make('customer.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="container-xxl body-container">
        <?php echo $__env->yieldContent('customer.layouts.sidebar'); ?>
    </section>

    <?php echo $__env->make('admin.alerts.alert-section.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main id="main-body-one-col" class="main-body">

    <?php echo $__env->yieldContent('content'); ?>

    </main>


    <?php echo $__env->make('customer.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php echo $__env->make('customer.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH C:\Users\saleh\Desktop\amanj perfume\resources\views/customer/layouts/master-two-col.blade.php ENDPATH**/ ?>