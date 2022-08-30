<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('main.fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<?php echo $__env->make('main.fixed.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('main.fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('main.fixed.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>;
</body>
</html>
<?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/layouts/layout.blade.php ENDPATH**/ ?>