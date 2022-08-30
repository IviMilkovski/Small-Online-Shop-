<?php $__env->startSection('title'); ?> Home <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> A little self made shop for your closet essentials. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, buy, home, clothes <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php $__currentLoopData = $sliderImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $simg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item <?php if($loop->index == 0): ?> active <?php endif; ?>">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo e(asset('./assets/img/'.$simg->image)); ?>" alt="<?php echo e($simg->alt); ?>">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-info"><?php echo e($simg->header); ?></h1>
                                <h3 class="h2"><?php echo e($simg->subheader); ?></h3>
                                <p>
                                    <?php echo e($simg->text); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Featured Clothes</h1>
                <p>
                    Search for all types of clothes that you need.
                </p>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($p->featured == 1): ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="<?php echo e(asset('./assets/img/'.$p->image)); ?>" alt="<?php echo e($p->name); ?>" class="rounded-circle img-fluid border">

                <p class="text-center"><a href="<?php echo e(route('products.index')); ?>" class="btn btn-success">Go Shop</a></p>
            </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <!-- End Categories of The Month -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/pages/main/home.blade.php ENDPATH**/ ?>