<?php $__env->startSection('head-tag'); ?>
<title><?php echo e($product->name); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<!-- start cart -->
<section class="mb-4">
    <section class="container-xxl" >
        <section class="row">
            <section class="col">
                <!-- start vontent header -->
                <section class="content-header">
                    <section class="d-flex justify-content-between align-items-center">
                        <h2 class="content-header-title">
                            <span><?php echo e($product->name); ?></span>
                        </h2>
                        <section class="content-header-link">
                            <!--<a href="#">مشاهده همه</a>-->
                        </section>
                    </section>
                </section>

                <section class="row mt-4">
                    <!-- start image gallery -->
                    <section class="col-md-4">
                        <section class="content-wrapper bg-white p-3 rounded-2 mb-4">
                            <section class="product-gallery">
                                <?php
                                    $imageGalley = $product->images()->get();
                                    $images = collect();
                                    $images->push($product->image);
                                    foreach ($imageGalley as $image) {
                                        $images->push($image->image);
                                    }

                                ?>
                                <section class="product-gallery-selected-image mb-3">
                                    <img src="<?php echo e(asset($images->first()['indexArray']['medium'])); ?>" alt="">
                                </section>
                                <section class="product-gallery-thumbs">
                                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <img class="product-gallery-thumb" src="<?php echo e(asset($image['indexArray']['medium'])); ?>" alt="<?php echo e(asset($image['indexArray']['medium']) . '-' . ($key + 1)); ?>" data-input="<?php echo e(asset($image['indexArray']['medium'])); ?>">

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </section>
                            </section>
                        </section>
                    </section>
                    <!-- end image gallery -->

                    <!-- start product info -->
                    <section class="col-md-5">

                        <section class="content-wrapper bg-white p-3 rounded-2 mb-4">

                            <!-- start vontent header -->
                            <section class="content-header mb-3">
                                <section class="d-flex justify-content-between align-items-center">
                                    <h2 class="content-header-title content-header-title-small">
                                        <?php echo e($product->name); ?>

                                    </h2>
                                    <section class="content-header-link">
                                        <!--<a href="#">مشاهده همه</a>-->
                                    </section>
                                </section>
                            </section>
                            <section class="product-info">
                                <form id="add_to_cart" action="<?php echo e(route('customer.sales-process.add-to-cart', $product)); ?>" method="post" class="product-info">
                                    <?php echo csrf_field(); ?>

                                <?php
                                $colors = $product->colors()->get();
                                  ?>

                                  <?php if($colors->count() != 0): ?>
                                <p><span>رنگ انتخاب شده : <span id="selected_color_name"> <?php echo e($colors->first()->color_name); ?></span></span></p>
                                <p>
                                    <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <label for="<?php echo e('color_' . $color->id); ?>" style="background-color: <?php echo e($color->color ?? '#ffffff'); ?>;" class="product-info-colors me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo e($color->color_name); ?>"></label>

                                    <input class="d-none" type="radio" name="color" id="<?php echo e('color_' . $color->id); ?>" value="<?php echo e($color->id); ?>" data-color-name="<?php echo e($color->color_name); ?>" data-color-price=<?php echo e($color->price_increase); ?> <?php if($key == 0): ?> checked <?php endif; ?>>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </p>
                                <?php endif; ?>

                                <?php
                                $guarantees = $product->guarantees()->get();
                                  ?>
                                  <?php if($guarantees->count() != 0): ?>

                                <p><i class="fa fa-shield-alt cart-product-selected-warranty me-1"></i>
                                گارانتی :
                                <select name="guarantee" id="guarantee" class="p-1">
                                    <?php $__currentLoopData = $guarantees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $guarantee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($guarantee->id); ?>" data-guarantee-price=<?php echo e($guarantee->price_increase); ?>  <?php if($key == 0): ?> selected <?php endif; ?>><?php echo e($guarantee->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                                </p>

                                <?php endif; ?>



                                <p>
                                    <?php if($product->marketable_number > 0): ?>
                                    <i class="fa fa-store-alt cart-product-selected-store me-1"></i> <span>کالا موجود در انبار</span>
                                    <?php else: ?>
                                    <i class="fa fa-store-alt cart-product-selected-store me-1"></i> <span>کالا ناموجود</span>
                                    <?php endif; ?>
                                </p>
                                <p>

                                    <?php if(auth()->guard()->guest()): ?>
                                    <section class="product-add-to-favorite position-relative" style="top: 0">
                                        <button type="button" class="btn btn-light btn-sm text-decoration-none" data-url="<?php echo e(route('customer.market.add-to-favorite', $product)); ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="اضافه از علاقه مندی">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </section>
                                        <?php endif; ?>
                                        <?php if(auth()->guard()->check()): ?>
                                            <?php if($product->user->contains(auth()->user()->id)): ?>
                                            <section class="product-add-to-favorite position-relative" style="top: 0">
                                                <button type="button" class="btn btn-light btn-sm text-decoration-none" data-url="<?php echo e(route('customer.market.add-to-favorite', $product)); ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="حذف از علاقه مندی">
                                                    <i class="fa fa-heart text-danger"></i>
                                                </button>
                                            </section>
                                            <?php else: ?>
                                            <section class="product-add-to-favorite position-relative" style="top: 0">
                                                <button type="button" class="btn btn-light btn-sm text-decoration-none" data-url="<?php echo e(route('customer.market.add-to-favorite', $product)); ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="اضافه به علاقه مندی">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </section>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                </p>
                                <section>
                                    <section class="cart-product-number d-inline-block ">
                                        <button class="cart-number cart-number-down" type="button">-</button>
                                        <input type="number" id="number" name="number" min="1" max="5" step="1" value="1" readonly="readonly">
                                        <button class="cart-number cart-number-up" type="button">+</button>
                                    </section>
                                </section>
                                <p class="mb-3 mt-5">
                                    <i class="fa fa-info-circle me-1"></i>کاربر گرامی  خرید شما هنوز نهایی نشده است. برای ثبت سفارش و تکمیل خرید باید ابتدا آدرس خود را انتخاب کنید و سپس نحوه ارسال را انتخاب کنید. نحوه ارسال انتخابی شما محاسبه و به این مبلغ اضافه شده خواهد شد. و در نهایت پرداخت این سفارش صورت میگیرد. پس از ثبت سفارش کالا بر اساس نحوه ارسال که شما انتخاب کرده اید کالا برای شما در مدت زمان مذکور ارسال می گردد.
                                </p>
                            </section>
                        </section>

                    </section>
                    <!-- end product info -->

                    <section class="col-md-3">
                        <section class="content-wrapper bg-white p-3 rounded-2 cart-total-price">
                            <section class="d-flex justify-content-between align-items-center">
                                <p class="text-muted">قیمت کالا</p>
                                <p class="text-muted"><span id="product_price" data-product-original-price=<?php echo e($product->price); ?>><?php echo e(priceFormat($product->price)); ?></span> <span class="small">تومان</span></p>
                            </section>


                            <?php

                            $amazingSale = $product->activeAmazingSales();

                            ?>
                            <?php if(!empty($amazingSale)): ?>
                            <section class="d-flex justify-content-between align-items-center">
                                <p class="text-muted">تخفیف کالا</p>
                                <p class="text-danger fw-bolder" id="product-discount-price" data-product-discount-price="<?php echo e(($product->price * ($amazingSale->percentage / 100) )); ?>"><?php echo e(priceFormat($product->price * ($amazingSale->percentage / 100) )); ?> <span class="small">تومان</span></p>
                            </section>
                            <?php endif; ?>

                            <section class="border-bottom mb-3"></section>

                            <section class="d-flex justify-content-end align-items-center">
                                <p class="fw-bolder"><span  id="final-price"></span> <span class="small">تومان</span></p>
                            </section>

                            <section class="">
                                <?php if($product->marketable_number > 0): ?>
                                <button id="next-level" class="btn btn-danger d-block w-100" onclick="document.getElementById('add_to_cart').submit();">افزودن به سبد خرید</button>
                                <?php else: ?>
                                <button id="next-level" class="btn btn-secondary disabled d-block">محصول نا موجود میباشد</button>
                                <?php endif; ?>
                            </section>
                        </form>

                        </section>
                    </section>
                </section>
            </section>
        </section>

    </section>
</section>
<!-- end cart -->



<!-- start product lazy load -->
<section class="mb-4">
    <section class="container-xxl" >
        <section class="row">
            <section class="col">
                <section class="content-wrapper bg-white p-3 rounded-2">
                    <!-- start vontent header -->
                    <section class="content-header">
                        <section class="d-flex justify-content-between align-items-center">
                            <h2 class="content-header-title">
                                <span>کالاهای مرتبط</span>
                            </h2>
                            <section class="content-header-link">
                                <!--<a href="#">مشاهده همه</a>-->
                            </section>
                        </section>
                    </section>
                    <!-- start vontent header -->
                    <section class="lazyload-wrapper" >
                        <section class="lazyload light-owl-nav owl-carousel owl-theme">

                            <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <?php if(auth()->guard()->guest()): ?>
                                        <section class="product-add-to-favorite">
                                            <button class="btn btn-light btn-sm text-decoration-none" data-url="<?php echo e(route('customer.market.add-to-favorite', $relatedProduct)); ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="اضافه از علاقه مندی">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </section>
                                        <?php endif; ?>
                                        <?php if(auth()->guard()->check()): ?>
                                            <?php if($relatedProduct->user->contains(auth()->user()->id)): ?>
                                            <section class="product-add-to-favorite">
                                                <button class="btn btn-light btn-sm text-decoration-none" data-url="<?php echo e(route('customer.market.add-to-favorite', $relatedProduct)); ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="حذف از علاقه مندی">
                                                    <i class="fa fa-heart text-danger"></i>
                                                </button>
                                            </section>
                                            <?php else: ?>
                                            <section class="product-add-to-favorite">
                                                <button class="btn btn-light btn-sm text-decoration-none" data-url="<?php echo e(route('customer.market.add-to-favorite', $relatedProduct)); ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="اضافه به علاقه مندی">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </section>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                           <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="<?php echo e(asset($relatedProduct->image['indexArray']['medium'])); ?>" alt="">
                                            </section>
                                            <section class="product-name"><h3><?php echo e($relatedProduct->name); ?></h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price"><?php echo e(priceFormat($relatedProduct->price)); ?> تومان</section>
                                            </section>
                                            <section class="product-colors">
                                                <?php $__currentLoopData = $relatedProduct->colors()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <section class="product-colors-item" style="background-color: <?php echo e($color->color); ?>;"></section>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<!-- end product lazy load -->

<!-- start description, features and comments -->
<section class="mb-4">
    <section class="container-xxl" >
        <section class="row">
            <section class="col">
                <section class="content-wrapper bg-white p-3 rounded-2">
                    <!-- start content header -->
                    <section id="introduction-features-comments" class="introduction-features-comments">
                        <section class="content-header">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title">
                                    <span class="me-2"><a class="text-decoration-none text-dark" href="#introduction">معرفی</a></span>
                                    <span class="me-2"><a class="text-decoration-none text-dark" href="#features">ویژگی ها</a></span>
                                    <span class="me-2"><a class="text-decoration-none text-dark" href="#comments">دیدگاه ها</a></span>
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                    </section>
                    <!-- start content header -->

                    <section class="py-4">

                        <!-- start vontent header -->
                        <section id="introduction" class="content-header mt-2 mb-4">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title content-header-title-small">
                                    معرفی
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                        <section class="product-introduction mb-4">
                            <?php echo $product->introduction; ?>

                        </section>

                        <!-- start vontent header -->
                        <section id="features" class="content-header mt-2 mb-4">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title content-header-title-small">
                                    ویژگی ها
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                        <section class="product-features mb-4 table-responsive">
                            <table class="table table-bordered border-white">
                                <?php $__currentLoopData = $product->values()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($value->attribute()->first()->name); ?></td>
                                    <td><?php echo e(json_decode($value->value)->value); ?> <?php echo e($value->attribute()->first()->unit); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $product->metas()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($meta->meta_key); ?></td>
                                    <td><?php echo e($meta->meta_value); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </table>
                        </section>

                        <!-- start vontent header -->
                        <section id="comments" class="content-header mt-2 mb-4">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title content-header-title-small">
                                    دیدگاه ها
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                        <section class="product-comments mb-4">

                            <section class="comment-add-wrapper">
                                <button class="comment-add-button" type="button" data-bs-toggle="modal" data-bs-target="#add-comment" ><i class="fa fa-plus"></i> افزودن دیدگاه</button>
                                <!-- start add comment Modal -->
                                <section class="modal fade" id="add-comment" tabindex="-1" aria-labelledby="add-comment-label" aria-hidden="true">
                                    <section class="modal-dialog">
                                        <section class="modal-content">
                                            <section class="modal-header">
                                                <h5 class="modal-title" id="add-comment-label"><i class="fa fa-plus"></i> افزودن دیدگاه</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </section>
                                            <?php if(auth()->guard()->guest()): ?>
                                                <section class="modal-body">
                                                    <p>کاربر گرامی لطفا برای ثبت نظر ابتدا وارد حساب کاربری خود شوید </p>
                                                    <p>لینک ثبت نام و یا ورود
                                                        <a href="<?php echo e(route('auth.customer.login-register-form')); ?>">کلیک کنید</a>
                                                    </p>
                                                </section>
                                            <?php endif; ?>
                                            <?php if(auth()->guard()->check()): ?>

                                            <section class="modal-body">
                                                <form class="row" action="<?php echo e(route('customer.market.add-comment', $product)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    

                                                    <section class="col-12 mb-2">
                                                        <label for="comment" class="form-label mb-1">دیدگاه شما</label>
                                                        <textarea class="form-control form-control-sm" id="comment" placeholder="دیدگاه شما ..." rows="4" name="body"></textarea>
                                                    </section>

                                            </section>
                                            <section class="modal-footer py-1">
                                                <button type="submit" class="btn btn-sm btn-primary">ثبت دیدگاه</button>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">بستن</button>
                                            </section>
                                        </form>
                                            <?php endif; ?>
                                        </section>
                                    </section>
                                </section>
                            </section>

                            <?php $__currentLoopData = $product->activeComments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activeComment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <section class="product-comment">
                                <section class="product-comment-header d-flex justify-content-start">
                                    <section class="product-comment-date"><?php echo e(jalaliDate($activeComment->created_at)); ?></section>
                                    <?php
                                        $author = $activeComment->user()->first();
                                    ?>
                                    <section class="product-comment-title">
                                        <?php if(empty($author->first_name) && empty($author->last_name)): ?>
                                            ناشناس
                                            <?php else: ?>
                                            <?php echo e($author->first_name . ' ' . $author->last_name); ?>

                                        <?php endif; ?>
                                    </section>
                                </section>
                                <section class="product-comment-body <?php if($activeComment->answers()->count() > 0): ?> border-bottom  <?php endif; ?>">
                                 <?php echo $activeComment->body; ?>

                                </section>


                                <?php $__currentLoopData = $activeComment->answers()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commentAnswer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <section class="product-comment">
                                    <section class="product-comment-header d-flex justify-content-start">
                                        <section class="product-comment-date"><?php echo e(jalaliDate($commentAnswer->created_at)); ?></section>
                                        <?php
                                            $author = $commentAnswer->user()->first();
                                        ?>
                                        <section class="product-comment-title">
                                            <?php if(empty($author->first_name) && empty($author->last_name)): ?>
                                                ناشناس
                                                <?php else: ?>
                                                <?php echo e($author->first_name . ' ' . $author->last_name); ?>

                                            <?php endif; ?>
                                        </section>
                                    </section>
                                    <section class="product-comment-body <?php if($commentAnswer->answers()->count() > 0): ?> border-bottom <?php endif; ?>">
                                     <?php echo $commentAnswer->body; ?>

                                    </section>
                                </section>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </section>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                        </section>
                    </section>

                </section>
            </section>
        </section>
    </section>
</section>
<!-- end description, features and comments -->


<section class="position-fixed p-4 flex-row-reverse" style="z-index: 909999999; left: 0; top: 3rem; width: 26rem; max-width: 80%;">
    <div class="toast"  data-delay="7000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">فروشگاه</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <strong class="ml-auto">
                برای افزودن کالا به لیست علاقه مندی ها باید ابتدا وارد حساب کاربری خود شوید
                <br>
                <a href="<?php echo e(route('auth.customer.login-register-form')); ?>" class="text-dark">
                    ثبت نام / ورود
                </a>
            </strong>
        </div>
      </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function(){
      bill();
      //input color
    $('input[name="color"]').change(function(){
        bill();
    })
    //guarantee
    $('select[name="guarantee"]').change(function(){
        bill();
    })
     //number
     $('.cart-number').click(function(){
        bill();
    })
    })

    function bill() {
        if($('input[name="color"]:checked').length != 0){
            var selected_color = $('input[name="color"]:checked');
           $("#selected_color_name").html(selected_color.attr('data-color-name'));
        }

        //price computing
        var selected_color_price = 0;
        var selected_guarantee_price = 0;
        var number = 1;
        var product_discount_price = 0;
        var product_original_price = parseFloat($('#product_price').attr('data-product-original-price'));

        if($('input[name="color"]:checked').length != 0)
        {
            selected_color_price = parseFloat(selected_color.attr('data-color-price'));
        }

        if($('#guarantee option:selected').length != 0)
        {
            selected_guarantee_price = parseFloat($('#guarantee option:selected').attr('data-guarantee-price'));
        }

        if($('#number').val() > 0)
        {
            number = parseFloat($('#number').val());
        }

        if($('#product-discount-price').length != 0)
        {
            product_discount_price = parseFloat($('#product-discount-price').attr('data-product-discount-price'));
        }

        //final price
        var product_price = product_original_price + selected_color_price + selected_guarantee_price;
        var final_price = number * (product_price - product_discount_price);
        $('#product-price').html(toFarsiNumber(product_price));
        $('#final-price').html(toFarsiNumber(final_price));
    }

    function toFarsiNumber(number)
    {
        const farsiDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        // add comma
        number = new Intl.NumberFormat().format(number);
        //convert to persian
        return number.toString().replace(/\d/g, x => farsiDigits[x]);
    }

</script>


<script>
    $('.product-add-to-favorite button').click(function() {
       var url = $(this).attr('data-url');
       var element = $(this);
       $.ajax({
           url : url,
           success : function(result){
            if(result.status == 1)
            {
                $(element).children().first().addClass('text-danger');
                $(element).attr('data-original-title', 'حذف از علاقه مندی ها');
                $(element).attr('data-bs-original-title', 'حذف از علاقه مندی ها');
            }
            else if(result.status == 2)
            {
                $(element).children().first().removeClass('text-danger')
                $(element).attr('data-original-title', 'افزودن از علاقه مندی ها');
                $(element).attr('data-bs-original-title', 'افزودن از علاقه مندی ها');
            }
            else if(result.status == 3)
            {
                $('.toast').toast('show');
            }
           }
       })
    })
</script>

<script>


//start product introduction, features and comment
$(document).ready(function() {
    var s = $("#introduction-features-comments");
    var pos = s.position();
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();

        if (windowpos >= pos.top) {
            s.addClass("stick");
        } else {
            s.removeClass("stick");
        }
    });
});
//end product introduction, features and comment


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master-two-col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saleh\Desktop\laravel-project\resources\views/customer/market/product/product.blade.php ENDPATH**/ ?>