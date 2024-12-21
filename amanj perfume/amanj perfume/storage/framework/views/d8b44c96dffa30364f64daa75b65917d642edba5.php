<?php $__env->startSection('content'); ?>

<h2><?php echo e($details['title']); ?></h2>
<p><?php echo e($details['body']); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Desktop/desk/project-toplearn/resources/views/emails/send-otp.blade.php ENDPATH**/ ?>