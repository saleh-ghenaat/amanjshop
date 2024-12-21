<?php $__env->startSection('head-tag'); ?>
<title>تیکت</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#"> خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#"> بخش تیکت ها</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> تیکت</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 تیکت
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="#" class="btn btn-info btn-sm disabled">ایجاد تیکت </a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نویسنده تیکت</th>
                            <th>عنوان تیکت</th>
                            <th>دسته تیکت</th>
                            <th>اولویت تیکت</th>
                            <th>ارجاع شده از</th>
                            <th>تیکت مرجع</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <th><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($ticket->user->first_name . ' ' . $ticket->user->last_name); ?></td>
                            <td><?php echo e($ticket->subject); ?></td>
                            <td><?php echo e($ticket->category->name); ?></td>
                            <td><?php echo e($ticket->priority->name); ?></td>
                            <td><?php echo e($ticket->admin->user->first_name . ' ' . $ticket->admin->user->last_name); ?></td>
                            <td><?php echo e($ticket->parent->subject ?? '-'); ?></td>
                            <td class="width-16-rem text-left">
                                <a href="<?php echo e(route('admin.ticket.show', $ticket->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> مشاهده</a>
                                <a href="<?php echo e(route('admin.ticket.change', $ticket->id)); ?>" class="btn btn-warning btn-sm"><i class="fa fa-check"></i> <?php echo e($ticket->status == 1 ? 'باز کردن' : 'بستن'); ?></a>
                            </td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saleh\Desktop\laravel-project\resources\views/admin/ticket/index.blade.php ENDPATH**/ ?>