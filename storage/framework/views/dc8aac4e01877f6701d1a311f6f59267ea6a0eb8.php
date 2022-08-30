<?php $__env->startSection('title'); ?> Shop <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Shop and find the perfect clothes for you. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, buy, get, clothes <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Filter</h1>
                <form method="GET">

                    <div class="pb-4">
                        <div class="d-flex">

                            <select class="form-control" id="sort" name="sort">
                                <option>Sort...</option>
                                <option value="asc" <?php if(request()->sort && request()->sort == 'asc'): ?> selected <?php endif; ?> >Name A to Z</option>
                                <option value="desc" <?php if(request()->sort && request()->sort == 'desc'): ?> selected <?php endif; ?> >Name Z to A</option>
                                
                                
                            </select>

                        </div>
                    </div>


                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Sizes
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>

                        <ul class="collapse show list-unstyled pl-3">
                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <input class="form-check-input" name="sizes[]" type="checkbox" value="<?php echo e($size->id); ?>" id="flexCheckDefaultSize"
                                    <?php if(request()->sizes && in_array($size->id, request()->sizes)): ?> checked <?php endif; ?>/>
                                    <label class="form-check-label" for="flexCheckDefaultSize">
                                        <?php echo e($size->name); ?>

                                    </label>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Colors
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                <input class="form-check-input" name="colors[]" type="checkbox" value="<?php echo e($color->id); ?>" id="flexCheckDefaultColor"
                                <?php if(request()->colors && in_array($color->id, request()->colors)): ?> checked <?php endif; ?>/>
                                <label class="form-check-label" for="flexCheckDefaultColor">
                                    <?php echo e($color->name); ?>

                                </label>
                        </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Product Category
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <input class="form-check-input" name="categories[]" type="checkbox" value="<?php echo e($category->id); ?>" id="flexCheckDefaultCategory"
                                           <?php if(request()->categories && in_array($category->id, request()->categories)): ?> checked <?php endif; ?>/>
                                    <label class="form-check-label" for="flexCheckDefaultCategory">
                                        <?php echo e($category->name); ?>

                                    </label>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                </ul>
                    <button class="btn btn-secondary w-100">Submit</button>
                </form>
            </div>

            <div class="col-lg-9">
                <div class="row">

                </div>
                <div class="row" id="products">
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php echo $__env->make('main.partials.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h2>No products.</h2>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center">









                    <?php echo e($products->withQueryString()->links('pagination::bootstrap-4')); ?>

                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/pages/products/index.blade.php ENDPATH**/ ?>