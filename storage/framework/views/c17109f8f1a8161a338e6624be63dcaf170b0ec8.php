


<?php $__env->startPush('css'); ?>

<style>
    video {
        position: fixed;
        left: 0;
        top: 0;
        width: 100vw;
        min-height: 100vh;
        object-fit: cover;
    }
</style>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>



<video src="<?php echo e(asset('videos/pexels-samed-gojak.mp4')); ?>" muted autoplay loop></video>

<div class="row  m-0  p-0" style="position: relative;">
<div class="col-12 col-sm-10 col-md-5 m-0 p-0 ">
<form action="<?php echo e(route('client.contact_us')); ?>" method="POST">
    <?php echo csrf_field(); ?>
<?php echo $__env->make("client.pages.PrimerContacto.Form" , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
 
</div>
   
      

    
 


</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/pages/PrimerContacto/Welcome.blade.php ENDPATH**/ ?>