<?php $__env->startSection('head-tag'); ?>
<title>سفارشات</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> سفارشات</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 سفارشات
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="" class="btn btn-info btn-sm disabled">ایجاد سفارش </a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover h-150px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>کد سفارش</th>
                            <th>مجموع مبلغ سفارش (بدون تخفیف)</th>
                            <th>مجموع تمامی مبلغ تخفیفات </th>
                            <th>مبلغ تخفیف همه محصولات</th>
                            <th>مبلغ نهایی</th>
                            <th>وضعیت پرداخت</th>
                            <th>شیوه پرداخت</th>
                            <th>بانک</th>
                            <th>وضعیت ارسال</th>
                            <th>شیوه ارسال</th>
                            <th>وضعیت سفارش</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <th><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($order->id); ?></td>
                            <td><?php echo e($order->order_final_amount); ?> تومان</td>
                            <td><?php echo e($order->order_discount_amount); ?> تومان</td>
                            <td><?php echo e($order->order_total_products_discount_amount); ?> تومان</td>
                            <td><?php echo e($order->order_final_amount -  $order->order_discount_amount); ?> تومان</td>
                            <td><?php if($order->payment_status == 0): ?> پرداخت نشده  <?php elseif($order->payment_status == 1): ?> پرداخت شده <?php elseif($order->payment_status == 2): ?> باطل شده <?php else: ?> برگشت داده شده <?php endif; ?></td>
                            <td><?php if($order->payment_type == 0): ?> آنلاین  <?php elseif($order->payment_type == 1): ?> آفلاین <?php else: ?> در محل <?php endif; ?> </td>
                            <td><?php echo e($order->payment->paymentable->gateway ?? '-'); ?></td>
                            <td><?php if($order->delivery_status == 0): ?> ارسال نشده  <?php elseif($order->delivery_status == 1): ?> درحال ارسال <?php elseif($order->delivery_status == 2): ?>  ارسال شده <?php else: ?> تحویل شده <?php endif; ?></td>
                            <td><?php echo e($order->delivery->name); ?></td>
                            <td><?php if($order->order_status == 1): ?> در انتظار تایید  <?php elseif($order->order_status == 2): ?>  تایید نشده <?php elseif($order->order_status == 3): ?> تایید شده <?php elseif($order->order_status == 4): ?> باطل شده <?php elseif($order->order_status == 5): ?> مرجوع شده <?php else: ?> بررسی نشده <?php endif; ?></td>
                            <td class="width-8-rem text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-success btn-sm btn-block dorpdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-tools"></i> عملیات
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="<?php echo e(route('admin.market.order.show', $order->id)); ?>" class="dropdown-item text-right"><i class="fa fa-images"></i> مشاهده فاکتور</a>
                                        <a href="<?php echo e(route('admin.market.order.changeSendStatus', $order->id)); ?>" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> تغییر وضعیت ارسال</a>
                                        <a href="<?php echo e(route('admin.market.order.changeOrderStatus', $order->id)); ?>" class="dropdown-item text-right"><i class="fa fa-edit"></i> تغییر وضعیت سفارش</a>
                                        <a href="<?php echo e(route('admin.market.order.cancelOrder', $order->id)); ?>" class="dropdown-item text-right"><i class="fa fa-window-close"></i> باطل کردن سفارش</a>
                                    </div>
                                </div>
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hassankhosrojerdi/Desktop/project/resources/views/admin/market/order/index.blade.php ENDPATH**/ ?>