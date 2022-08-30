<?php $__env->startSection('title'); ?> Contact <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Here you can find out how to contact us. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, contact, location, clothes <?php $__env->stopSection(); ?>
<?php $__env->startSection('token'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                If you have any questions you can contact us using the form underneath or via our email or phone.
            </p>
        </div>
    </div>


    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">

            <form action="<?php echo e(route('contact.store')); ?>" class="contact-form" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">

                        <div class="col-lg-6">
                            <input type="text" id="name" class="form-control" name="name" data-field="name"  placeholder="Your Name">
                            <p class="text-danger msgErrorName"></p>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" data-field="email" class="form-control" id="tbEmailContact" name="email" placeholder="Your Email">
                            <p class="text-danger msgErrorEmail"></p>
                        </div>
                    <div class="col-lg-12">
                        <input type="text" data-field="subject" class="form-control" id="tbSubjectContact" name="subject" placeholder="Subject | Reason for Contact">
                        <p class="text-danger msgErrorSubj"></p>
                    </div>
                    <div class="col-lg-12">
                        <textarea data-field="message" class="form-control" id="taMessageContact" name="message" placeholder="Your Message"></textarea>
                        <p class="text-danger msgErrorMessage"></p>
                        <button id="btnSendMessage" class="form-control btn-success" type="submit">Send message</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylittleshop\resources\views/main/pages/main/contact.blade.php ENDPATH**/ ?>