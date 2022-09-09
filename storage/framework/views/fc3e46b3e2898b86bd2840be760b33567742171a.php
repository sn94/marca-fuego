


<?php $__env->startSection('content'); ?>

<form id="CONTACT-FORM" action="<?php echo e(route('contactos')); ?>" method="POST">
    <?php echo csrf_field(); ?>


    <?php echo $__env->make('admin.contacts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button class="btn btn-lg btn-primary mt-2">

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save align-middle me-2">
            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
            <polyline points="17 21 17 13 7 13 7 21"></polyline>
            <polyline points="7 3 7 8 15 8"></polyline>
        </svg>
        GUARDAR</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/contacts/create.blade.php ENDPATH**/ ?>