<!doctype html>
<html lang="fa" dir="rtl">
<head>

    <?php echo $__env->make('emails.layouts.head-tag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head-tag'); ?>

</head>
<body>

    <!-- start header -->
    <?php echo $__env->make('emails.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end header -->


    <!-- start main one col -->
    <main id="main-body-one-col" class="main-body">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- end main one col -->


    <!-- start footer -->
    <?php echo $__env->make('emails.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end footer -->

</body>
</html><?php /**PATH /Users/apple/Desktop/desk/project-toplearn/resources/views/emails/layouts/master.blade.php ENDPATH**/ ?>