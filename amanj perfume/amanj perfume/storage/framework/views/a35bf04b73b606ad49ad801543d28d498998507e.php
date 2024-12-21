<aside id="sidebar" class="sidebar">
    <section class="sidebar-container">
        <section class="sidebar-wrapper">

            <a href="<?php echo e(route('admin.home')); ?>" class="sidebar-link">
                <i class="fas fa-home"></i>
                <span>خانه</span>
            </a>

            <section class="sidebar-part-title">بخش فروش</section>

            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-chart-bar icon"></i>
                    <span>ویترین</span>
                    <i class="fas fa-angle-left angle"></i>
                </section>
                <section class="sidebar-dropdown">
                    <a href="<?php echo e(route('admin.market.category.index')); ?>">دسته بندی</a>
                    <a href="<?php echo e(route('admin.market.property.index')); ?>">فرم کالا</a>
                    <a href="<?php echo e(route('admin.market.brand.index')); ?>">برندها</a>
                    <a href="<?php echo e(route('admin.market.product.index')); ?>">کالاها</a>
                    <a href="<?php echo e(route('admin.market.store.index')); ?>">انبار</a>
                    <a href="<?php echo e(route('admin.market.comment.index')); ?>">نظرات</a>
                </section>
            </section>

            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-chart-bar icon"></i>
                    <span>سفارشات</span>
                    <i class="fas fa-angle-left angle"></i>
                </section>
                <section class="sidebar-dropdown">
                    <a href="<?php echo e(route('admin.market.order.newOrders')); ?>"> جدید</a>
                    <a href="<?php echo e(route('admin.market.order.sending')); ?>">در حال ارسال</a>
                    <a href="<?php echo e(route('admin.market.order.unpaid')); ?>">پرداخت نشده</a>
                    <a href="<?php echo e(route('admin.market.order.canceled')); ?>">باطل شده</a>
                    <a href="<?php echo e(route('admin.market.order.returned')); ?>">مرجوعی</a>
                    <a href="<?php echo e(route('admin.market.order.all')); ?>">تمام سفارشات</a>
                </section>
            </section>

            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-chart-bar icon"></i>
                    <span>پرداخت ها</span>
                    <i class="fas fa-angle-left angle"></i>
                </section>
                <section class="sidebar-dropdown">
                    <a href="<?php echo e(route('admin.market.payment.index')); ?>">تمام پرداخت ها</a>
                    <a href="<?php echo e(route('admin.market.payment.online')); ?>">پرداخت های آنلاین</a>
                    <a href="<?php echo e(route('admin.market.payment.offline')); ?>">پرداخت های آفلاین</a>
                    <a href="<?php echo e(route('admin.market.payment.cash')); ?>">پرداخت در محل</a>
                </section>
            </section>

            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-chart-bar icon"></i>
                    <span>تخفیف ها</span>
                    <i class="fas fa-angle-left angle"></i>
                </section>
                <section class="sidebar-dropdown">
                    <a href="<?php echo e(route('admin.market.discount.copan')); ?>">کپن تخفیف</a>
                    <a href="<?php echo e(route('admin.market.discount.commonDiscount')); ?>">تخفیف عمومی</a>
                    <a href="<?php echo e(route('admin.market.discount.amazingSale')); ?>">فروش شگفت انگیز</a>
                </section>
            </section>

            <a href="<?php echo e(route('admin.market.delivery.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>روش های ارسال</span>
            </a>



            <section class="sidebar-part-title">بخش محتوی</section>
            <a href="<?php echo e(route('admin.content.category.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>دسته بندی</span>
            </a>
            <a href="<?php echo e(route('admin.content.post.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>پست ها</span>
            </a>
            <a href="<?php echo e(route('admin.content.comment.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>نظرات</span>
            </a>
            <a href="<?php echo e(route('admin.content.menu.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>منو</span>
            </a>
            <a href="<?php echo e(route('admin.content.faq.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>سوالات متداول</span>
            </a>
            <a href="<?php echo e(route('admin.content.page.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>پیج ساز</span>
            </a>



            <section class="sidebar-part-title">بخش کاربران</section>
            <a href="<?php echo e(route('admin.user.admin-user.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>کاربران ادمین</span>
            </a>
            <a href="<?php echo e(route('admin.user.customer.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>مشتریان</span>
            </a>
            <a href="<?php echo e(route('admin.user.role.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>سطوح دسترسی</span>
            </a>



            <section class="sidebar-part-title">تیکت ها</section>
            <a href="<?php echo e(route('admin.ticket.category.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span> دسته بندی تیکت ها </span>
            </a>
              <a href="<?php echo e(route('admin.ticket.priority.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span> اولویت تیکت ها </span>
            </a>
              <a href="<?php echo e(route('admin.ticket.admin.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span> ادمین تیکت ها </span>
            </a>
            <a href="<?php echo e(route('admin.ticket.newTickets')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>تیکت های جدید</span>
            </a>
            <a href="<?php echo e(route('admin.ticket.openTickets')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>تیکت های باز</span>
            </a>
            <a href="<?php echo e(route('admin.ticket.closeTickets')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>تیکت های بسته</span>
            </a>

            <a href="<?php echo e(route('admin.ticket.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>همه ی تیکت ها</span>
            </a>



            <section class="sidebar-part-title">اطلاع رسانی</section>
            <a href="<?php echo e(route('admin.notify.email.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>اعلامیه ایمیلی</span>
            </a>
            <a href="<?php echo e(route('admin.notify.sms.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>اعلامیه پیامکی</span>
            </a>



            <section class="sidebar-part-title">تنظیمات</section>
            <a href="<?php echo e(route('admin.setting.index')); ?>" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>تنظیمات</span>
            </a>

        </section>
    </section>
</aside>
<?php /**PATH /Users/apple/Desktop/desk/project۰org/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>