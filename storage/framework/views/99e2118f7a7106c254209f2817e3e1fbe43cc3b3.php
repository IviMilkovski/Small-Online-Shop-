<?php $__env->startSection('title'); ?> Register <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Register and buy some beautiful clothes. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, register, buy, clothes <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Register</h1>
        </div>
    </div>


    <div class="container py-5">
        <div class="row py-5">
    <form action="<?php echo e(route('register.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group p-2 mb-3">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstnameHelp" placeholder="Enter First Name">

        </div>
        <div class="form-group p-2 mb-3">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastnameHelp" placeholder="Enter Last Name">

        </div>
        <div class="form-group p-2 mb-3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">

        </div>
        <div class="form-group p-2 mb-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Please make sure thath your password is made up of 8 characters and thath it has One big Leter, one small, a number and a character.</small>
            <small id="emailHelp" class="form-text text-muted">Example:Lil'Shop1</small>
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
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success">
                    <h3><?php echo e(session('success')); ?></h3>
                </div>
            <?php endif; ?>
            <?php if(session()->has('warning')): ?>
                <div class="alert alert-warning">
                    <h3><?php echo e(session('warning')); ?></h3>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/pages/main/register.blade.php ENDPATH**/ ?>