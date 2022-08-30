<?php $__env->startSection('title'); ?>
    Admin | Lil'Shop | Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Online shop - Information about products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    admin panel, product, category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Products</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>

                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($p->id); ?></th>
                            <td><?php echo e($p->name); ?></td>
                            <td><img src="<?php echo e(asset('assets/img/'. $p->image)); ?>" height="50px"></td>
                            <td><?php echo e($p->description); ?></td>
                            <?php $__currentLoopData = $p->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td><?php echo e($pr->price); ?></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <td><a href="<?php echo e(route('product_edit_get',['id' => $p->id])); ?>" class="btnEditMenuLink" name="edit<?php echo e($p->id); ?>" data-id="<?php echo e($p->id); ?>">Edit</a></td>
                            <td><button href="#" class="btn btn_delete" data-id="<?php echo e($p->id); ?>">Delete</button></td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <br>
            </div>
            <div>
                <h2>Add New</h2>
                <a href="<?php echo e(route('product_create_get')); ?>" class="btn btn-info btn_create" >Create New Product</a>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/admin/pages/products/index.blade.php ENDPATH**/ ?>