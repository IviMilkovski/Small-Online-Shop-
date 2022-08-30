<div class="col-md-4">
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="<?php echo e(asset('assets/img/'. $product->image)); ?>" alt="<?php echo e($product->name); ?>">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                    <li><a class="btn btn-info text-white mt-2" href="<?php echo e(route('product', ["product" => $product->id])); ?>"><i class="far fa-eye"></i></a></li>
                    <li><a class="btn btn-info text-white mt-2" href="#"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <a href="" class="h3 text-decoration-none"><?php echo e($product->name); ?></a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                <li class="pt-2">
                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
            </ul>
            <?php $__currentLoopData = $product->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="text-center mb-0">$<?php echo e($price->price); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/partials/product.blade.php ENDPATH**/ ?>