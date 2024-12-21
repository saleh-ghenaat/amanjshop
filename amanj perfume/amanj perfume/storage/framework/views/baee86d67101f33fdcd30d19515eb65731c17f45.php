<?php if(session('toast-success')): ?>

    <section class="toast" data-delay="5000">

        <section class="toast-body py-3 d-flex bg-success text-white">
            <strong class="ml-auto"><?php echo e(session('toast-success')); ?></strong>
            <button type="button" class="mr-2 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </section>
    </section>

    <script>
        $(document).ready(function () {
            $('.toast').toast('show');
        })
    </script>


<?php endif; ?>
<?php /**PATH /Users/apple/Desktop/desk/project۰org/resources/views/admin/alerts/toast/success.blade.php ENDPATH**/ ?>