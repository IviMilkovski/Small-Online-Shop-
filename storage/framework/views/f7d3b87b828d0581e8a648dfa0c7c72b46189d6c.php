<?php $__env->startSection('title'); ?>
    Admin | Lil'Shop | Users
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Online shop - Information about users and their activity
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
                <h1>Users</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id User</th>
                        <th scope="col">User First Name</th>
                        <th scope="col">User Last Namw</th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        <th scope="col">Joined at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="col"><?php echo e($user->id); ?></td>
                            <td scope="col"><?php echo e($user->firstname); ?></td>
                            <td scope="col"><?php echo e($user->lastname); ?></td>
                            <td scope="col"><?php echo e($user->role->role_name); ?></td>
                            <td scope="col"><?php echo e($user->email); ?></td>
                            <td scope="col"><?php echo e($user->created_at); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Users Activity</h1>
                <div>
                    <form method="GET">
                        <select class="form-control" id="sort" name="sort">
                            <option>Sort by date</option>
                            <option value="asc" <?php if(request()->sort && request()->sort == 'asc'): ?> selected <?php endif; ?> >Ascedint date</option>
                            <option value="desc" <?php if(request()->sort && request()->sort == 'desc'): ?> selected <?php endif; ?> >Descending Date</option>
                        </select>
                        <button class="btn-info">Sort</button>
                    </form>
                </div>
                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">User name</th>
                        <th scope="col">User email</th>
                        <th scope="col">Ip addrees</th>
                        <th scope="col">Date</th>
                        <th scope="col">Activity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="col"><?php echo e($a->user->firstname); ?></td>
                            <td scope="col"><?php echo e($a->user->email); ?></td>
                            <td scope="col"><?php echo e($a->ip_address); ?></td>
                            <td scope="col"><?php echo e($a->date); ?></td>
                            <td scope="col"><?php echo e($a->activity); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/admin/pages/users/index.blade.php ENDPATH**/ ?>