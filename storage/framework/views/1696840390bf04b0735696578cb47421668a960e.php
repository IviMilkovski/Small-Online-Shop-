    <?php $__env->startSection('title'); ?> Order <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Order your clothes <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, buy, get, order <?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Order now</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-start">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Count</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i = 0; $i < count($products); $i++): ?>
                    <tr>
                        <th scope="row"><?php echo e($i + 1); ?></th>
                        <td><?php echo e($products[$i]->name); ?></td>
                        <td id="price-<?php echo e($i + 1); ?>">
                            <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($price->product_id == $products[$i]->id): ?>
                                    <?php echo e($price->price); ?>

                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td><?php echo e($products[$i]->getOriginal('pivot_count')); ?></td>
                        <td id="<?php echo e($i + 1); ?>-row-total">
                            <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($price->product_id == $products[$i]->id): ?>
                                    <?php echo e($price->price * $products[$i]->getOriginal('pivot_count')); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                <?php endfor; ?>
                <tr>
                    <td></td>
                    <th>Sum total:</th>
                    <td></td>
                    <td></td>
                    <td>
                        <?php echo e($sum); ?>

                    </td>
                </tr>
                </tbody>
            </table>

        </div>
        <div class="col-12 mt-5">
            <form action="<?php echo e(route('order_post')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group mt-3">
                    <label for="street">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Enter country name">
                </div>
                <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger">
                    <?php echo e($message); ?>

                </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="form-group mt-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" placeholder="Enter city">
                </div>
                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group mt-3">
                    <label for="postal_code">Postal code</label>
                    <input type="number" min="0" name="postal_code" class="form-control" placeholder="Enter postal code">
                </div>
                <?php $__errorArgs = ['postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group mt-3">
                    <label for="phone_number">Phone number</label>
                    <input type="number" min="0" name="phone_number" class="form-control" placeholder="Enter phone number">
                </div>
                <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <button type="submit" class="btn btn-primary mt-5">Submit</button>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/pages/main/order.blade.php ENDPATH**/ ?>