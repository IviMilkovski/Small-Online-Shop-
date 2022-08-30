<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('admin.fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<?php echo $__env->make('admin.fixed.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    <div id="content-wrapper" class="d-flex flex-column"><div id="content">

            <?php echo $__env->make('admin.fixed.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
            <?php echo $__env->yieldContent('content'); ?>;
            <?php echo $__env->make('admin.fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#">Logout</a>
                </div>
            </div>
        </div>
    </div>

<?php echo $__env->make('admin.fixed.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php echo $__env->yieldContent('script'); ?>;
</body>

</html>

<?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/layouts/admin.blade.php ENDPATH**/ ?>