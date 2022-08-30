<?php $__env->startSection('title'); ?> Shop <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Shop and find the perfect clothes for you. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, buy, get, clothes <?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo e(asset('assets/img/'. $product->image)); ?>" alt="<?php echo e($product->name); ?>" id="product-detail">
                    </div>
                    <div class="row">
                    </div>
                </div>
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo e($product->name); ?></h1>
                            <?php $__currentLoopData = $product->price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="h3 py-2">$<?php echo e($p->price); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <h6>Description:</h6>
                            <p><?php echo e($product->description); ?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Color :</h6>
                                </li>
                                <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(in_array($color->id, $product->colors()->pluck('color_id')->toArray())): ?>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo e($color->name); ?></strong></p>
                                </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>


                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(in_array($size->id, $product->sizes()->pluck('size_id')->toArray())): ?>
                                                <li class="list-inline-item"><span class="btn btn-success btn-size"><?php echo e($size->name); ?></span></li>
                                                <?php else: ?>
                                                    <li><?php echo e($size->name); ?> Not Availlable</li>
                                            <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>

                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="button" id="add-cart-btn" class="btn btn-success btn-lg" name="submit" data-product-id="<?php echo e($product->id); ?>"

                                                value="addtocard">Add To Cart</button>
                                        <br>
                                        <div class="container"><h4 class="successcart"></h4></div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/product.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/pages/products/show.blade.php ENDPATH**/ ?>