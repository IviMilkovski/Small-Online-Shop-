<?php $__env->startSection('title'); ?> Cart <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> See your cart and edit it or proceed to order <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, buy, get, cart <?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-12">
            <h1 class="text-center">Cart</h1>
        </div>
        <div class="col-12">
            <?php if(isset($products) && count($products) > 0): ?>
            <table class="table">
                <thead>
                    <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Count</th>
                <th scope="col">Total</th>
                <th scope="col">Remove</th>
                </thead>
                <tbody>
                <?php for($i = 0; $i < count($products); $i++): ?>
                    <tr id="table-row-<?php echo e($products[$i]->id); ?>">
                        <td><?php echo e($products[$i]->name); ?></td>
                        <td id="price-<?php echo e($i + 1); ?>">
                        <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($price->product_id == $products[$i]->id): ?>
                            <?php echo e($price->price); ?>

                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        <td>
                            <input type="number"
                                   class="item-count"
                                   data-row-id="<?php echo e($i + 1); ?>"
                                   data-product-id="<?php echo e($products[$i]->id); ?>"
                                   name=""
                                   value="<?php echo e($products[$i]->getOriginal('pivot_count')); ?>"
                                   min="1"
                                   max="20">
                        </td>


                            <td id="<?php echo e($i + 1); ?>-row-total">
                                <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($price->product_id == $products[$i]->id): ?>
                                <?php echo e($price->price * $products[$i]->getOriginal('pivot_count')); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>

                        <td><button type="button" id="delbtn-<?php echo e($products[$i]->id); ?>" class="btn btn-danger del-row-btn">X</button></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
                <div id="cart-button" class="col-1">
                    <a href="<?php echo e(route('order_get')); ?>" class="btn btn-success">Submit</a>
                </div>
            <?php else: ?>
                <p class="text-center">Your cart is empty</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/cart.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/pages/main/cart.blade.php ENDPATH**/ ?>