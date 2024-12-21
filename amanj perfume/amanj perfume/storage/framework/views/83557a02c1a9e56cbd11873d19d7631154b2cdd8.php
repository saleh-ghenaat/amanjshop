<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('customer.layouts.head-tag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head-tag'); ?>
</head>
<body>


    <main id="main-body-one-col" class="main-body">

    <?php echo $__env->yieldContent('content'); ?>

    </main>





    <?php echo $__env->make('customer.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /Users/apple/Desktop/desk/project۰org/resources/views/customer/layouts/master-simple.blade.php ENDPATH**/ ?>