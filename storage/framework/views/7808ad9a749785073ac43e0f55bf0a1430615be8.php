<?php $__env->startSection('title'); ?> Autor <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> A bit about me, the auther <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, about, autor, auther <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <h1>About me</h1>
            <img class="img-fluid" src="<?php echo e(asset('./assets/img/profslika2.jpg')); ?>" alt="profilna">
<p>Hello my name is Iva Milkovski, I'm in my last year of studies at the ICT college.</p>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/pages/main/autor.blade.php ENDPATH**/ ?>