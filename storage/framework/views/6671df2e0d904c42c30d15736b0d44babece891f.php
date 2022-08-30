<?php $__env->startSection('title'); ?>
    Admin | Lil'Shop | Menu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Online shop - Information about navigation menu links
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    admin panel, navigation manu links
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
               <table class="table">
                   <thead>
                   <tr>
                       <th scope="col">Id</th>
                       <th scope="col">Name</th>
                       <th scope="col">Url</th>
                       <th scope="col">Order</th>
                       <th scope="col">Edit</th>
                       <th scope="col">Delete</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                       <th scope="row"><?php echo e($m->id); ?></th>
                       <td><?php echo e($m->name); ?></td>
                       <td><?php echo e($m->url); ?></td>
                       <td><?php echo e($m->order); ?></td>
                       <td><a href="<?php echo e(route('admin.menu.edit',['id' => $m->id ])); ?>" class="btnEditMenuLink" data-id="<?php echo e($m->id); ?>">Edit</a></td>
                       <td><button href="#" class="btn btn_delete" data-id="<?php echo e($m->id); ?>">Delete</button></td>
                   </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
               </table>
                <br>
            </div>
            <div>
                <h2>Add New</h2>
                <button href="#" class="btn btn-info btn_create" data-id="<?php echo e($m->id); ?>">Create New Menu Item</button>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/admin/pages/menu/index.blade.php ENDPATH**/ ?>