<?php $__env->startSection('title'); ?>
    Admin | Lil'Shop | Product | Form
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    Online shop - Edit or Add products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
    admin panel, product, category, edit, add
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">
                <?php if($action == "create"): ?>
                    Create product
                <?php else: ?>
                    Edit product
                <?php endif; ?>
            </h1>
            <form enctype="multipart/form-data" method="POST"
                  <?php if($action == "create"): ?>
                  action="<?php echo e(route('product_create_post')); ?>"
                  <?php else: ?>

                  action="<?php echo e(route('product_edit_post', ['id' => $product->id ])); ?>"
                  <?php endif; ?>
            >
                <?php echo csrf_field(); ?>

                <div class="form-group mt-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($product->name); ?>"  placeholder="Name">

                </div>
                <div class="form-group mt-3">
                    <label for="name">Image</label>
                    <input type="file" class="form-control" id="image" name="image"  placeholder="Image">
                    <img src="<?php echo e(asset('assets/img/'. $product->image)); ?>" alt="<?php echo e($product->name); ?>" height="50px">
                </div>
                <div class="form-group mt-3">
                    <label for="name">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo e($product->description); ?>"  placeholder="Description">
                </div>
                <?php if($action == "edit"): ?>
                <?php $__currentLoopData = $product->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group mt-3">
                            <label for="name">Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="<?php echo e($p->price); ?>"  placeholder="Price">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="form-group mt-3">
                            <label for="name">Price</label>
                            <input type="text" class="form-control" id="<?php echo e($product->id); ?>" name="price" value="<?php echo e($product->price); ?>"  placeholder="Price">
                        </div>
                            <?php endif; ?>

                <div class="mt-3">
                    <p>Sizes</p>
                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="custom-control custom-checkbox mr-5">
                            <input type="checkbox" class="custom-control-input" id="size<?php echo e($size->id); ?>" name="size_id[]" value="<?php echo e($size->id); ?>"
                                   <?php if(isset($product) && in_array($size->id, $product->sizes()->pluck('size_id')->toArray())): ?>
                                   checked
                                   <?php elseif(is_array(old('size_id')) && in_array($size->id, old('size_id'))): ?>
                                   checked
                                <?php endif; ?>
                            />
                            <label class="custom-control-label" for="size<?php echo e($size->id); ?>"><?php echo e($size->name); ?></label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mt-3">
                    <p>Categories</p>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="custom-control custom-checkbox mr-5">
                            <input type="checkbox" class="custom-control-input" id="category<?php echo e($category->id); ?>" name="category_id[]" value="<?php echo e($category->id); ?>"
                                   <?php if(isset($product) && in_array($category->id, $product->categories()->pluck('category_id')->toArray())): ?>
                                   checked
                                   <?php elseif(is_array(old('category_id')) && in_array($category->id, old('category_id'))): ?>
                                   checked
                                <?php endif; ?>
                            />
                            <label class="custom-control-label" for="category<?php echo e($category->id); ?>"><?php echo e($category->name); ?></label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mt-3">
                    <p>Colors</p>
                    <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="custom-control custom-checkbox mr-5">
                            <input type="checkbox" class="custom-control-input" id="color<?php echo e($color->id); ?>" name="color_id[]" value="<?php echo e($color->id); ?>"
                                   <?php if(isset($product) && in_array($color->id, $product->colors()->pluck('color_id')->toArray())): ?>
                                   checked
                                   <?php elseif(is_array(old('color_id')) && in_array($color->id, old('color_id'))): ?>
                                   checked
                                <?php endif; ?>
                            />
                            <label class="custom-control-label" for="color<?php echo e($color->id); ?>"><?php echo e($color->name); ?></label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <br>
                <div class="form-group form-check form-check-inline mt-3">
                    <label for="featured">Featured</label>
                    <input type="radio"  class="form-check-input" id="featured"  name="optionFeatured" value="Radio<?php echo e($product->featured); ?>" <?php if($product->featured): ?> checked  <?php endif; ?>">
                </div>
                <button class="btn btn-success mt-3" type="submit">
                    <?php if($action == "create"): ?>
                        Create
                    <?php else: ?>
                        Edit
                    <?php endif; ?>
                </button>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/admin/pages/products/form.blade.php ENDPATH**/ ?>