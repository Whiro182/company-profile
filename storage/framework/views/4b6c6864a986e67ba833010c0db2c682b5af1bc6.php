<?php $__env->startSection('content'); ?>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>

    </div>

    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-four__img">
                                <img src="<?php echo e(asset('/assets/photos/service.png')); ?>" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Repair & Installation</p>
                                <div class="section-title-shape-1">
                                    <img src="<?php echo e(asset('/assets/images/shapes/section-title-shape-1.png')); ?>" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="<?php echo e(asset('/assets/images/shapes/section-title-shape-2.png')); ?>" alt="">
                                </div>
                            </div>

                        </div>
                        <p class="about-four__text-1">
                            PRO 1 Global Home Center also provides customized installation & repair services. Installation services included the installation of ceilings, roofing, Parquet flooring, and installation of home appliances. We provide Repairing services which are purchase
                            from us. Repair services included repairing power tools, Aircon, TV, and other home appliances as a One-Stop Service with the professional staff of PRO 1 Global Home Center. In addition, we are discussing in detail what
                            you want to do. And we take special care not to waste materials during the servicing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="brand-one__title">
                        <h2>Take a look at the Super Services of PRO 1 Global Home Center</h2>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="brand-one__main-content">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a  href="<?php echo e(route('product_information')); ?>"><img src="<?php echo e(asset('/assets/photos/Service Photo/Product Information.png')); ?>" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="<?php echo e(route('delivery_service')); ?>"> <img src="<?php echo e(asset('/assets/photos/Service Photo/Delivery Service.jpg')); ?>" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="<?php echo e(route('special_order')); ?>"><img src="<?php echo e(asset('/assets/photos/Service Photo/Special Order.jpg')); ?>" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="<?php echo e(route('product_return')); ?>"><img src="<?php echo e(asset('/assets/photos/Service Photo/Product Return.jpg')); ?>" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="<?php echo e(route('consulting_service')); ?>"><img src="<?php echo e(asset('/assets/photos/Service Photo/Consulting Service.jpg')); ?>" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="<?php echo e(route('contractor_information')); ?>"><img src="<?php echo e(asset('/assets/photos/Service Photo/Contractor Information.jpg')); ?>" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a  href="<?php echo e(route('member_service')); ?>"><img src="<?php echo e(asset('/assets/photos/Service Photo/Member Service.jpg')); ?>" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="repair_service"><img src="<?php echo e(asset('/assets/photos/Service Photo/Power Tools Repair Service.jpg')); ?>" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\company-profile\resources\views/repair_service.blade.php ENDPATH**/ ?>