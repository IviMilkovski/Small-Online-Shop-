<?php $__env->startSection('title'); ?> Cart <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> See your cart and edit it or proceed to order <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, buy, get, cart <?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Order made!</h1>
    <h2>Thank you for ordering from us.</h2>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/pages/main/order-success.blade.php ENDPATH**/ ?>