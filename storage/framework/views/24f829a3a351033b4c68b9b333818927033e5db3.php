<?php $__env->startSection('title'); ?> Login <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Login and shop at our store. Have fun. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, login, store, email <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> <div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Login</h1>
    </div>
</div>


<div class="container py-5">
    <div class="row py-5">
        <form action="<?php echo e(route('login.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group p-2 mb-3">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">

            </div>
            <div class="form-group p-2 mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(session()->has('warning')): ?>
            <div class="alert alert-warning">
                <h3><?php echo e(session('warning')); ?></h3>
            </div>
        <?php endif; ?>
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success">
                <h3><?php echo e(session('success')); ?></h3>
            </div>
        <?php endif; ?>
        <?php if(session()->has('error')): ?>
            <div class="alert alert-success">
                <h3><?php echo e(session('error')); ?></h3>
            </div>
        <?php endif; ?>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/pages/main/login.blade.php ENDPATH**/ ?>