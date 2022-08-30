
<!-- Start Top Nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
            </div>
            <div>
                <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
            </div>
        </div>
    </div>
</nav>
<!-- Close Top Nav -->


<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-info logo h1 align-self-center" href="<?php echo e(route('home')); ?>">
            Lil'Shop
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <?php if(session()->has('user') && $link->name != 'Login' && $link->name != 'Register'): ?>
                        <a class="nav-link" href="<?php echo e(route($link->url)); ?>"><?php echo e($link->name); ?></a>
                        <?php elseif(!session()->has('user')): ?>
                            <a class="nav-link" href="<?php echo e(route($link->url)); ?>"><?php echo e($link->name); ?></a>
                        <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if(session()->has('user')): ?>
                          <li> <a class="nav-link" href="<?php echo e(route("logoutUser")); ?>">Logout</a>
                    </li>
                        <?php endif; ?>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">

                <?php if(session()->has('user')): ?>
                <a class="nav-icon position-relative text-decoration-none" href="<?php echo e(route('cart_display')); ?>">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                </a>



                <?php endif; ?>
            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->
<?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/fixed/header.blade.php ENDPATH**/ ?>