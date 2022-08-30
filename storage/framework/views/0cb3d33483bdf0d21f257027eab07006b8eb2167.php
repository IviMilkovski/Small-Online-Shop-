;

<?php $__env->startSection('title'); ?> Admin | Main Page <?php $__env->stopSection(); ?>
<?php $__env->startSection('author'); ?> Iva Milkovski <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Main page/dashboard for admin users.<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> admin, main, page, dashboard <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Lil'Shop Admin Page</h1>
                <div class="container-fluid">
                    <h2>Wellcome to the Admin Pages.</h2>
                    <h3>Here you can edit the site and find all the inforamtion you need on the products and users.</h3>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/admin/pages/main/dashboard.blade.php ENDPATH**/ ?>