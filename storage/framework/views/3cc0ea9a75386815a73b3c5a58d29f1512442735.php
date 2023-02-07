


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

<div class="container p-0" style="position: relative;">


    <div class="row col s12">

        <div class="col s12 m6" style="background: #0009;
padding-inline: 30px;">
            <?php echo $__env->make("client.pages.PrimerContacto.Form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col s12 m6">
            

            

            <a href="https://api.whatsapp.com/send?phone=595%20982%20594052&text= Buenas, quisiera mas información sobre los lotes" class=" whatsapp" target="_blank">

                <i class="fa fa-whatsapp my-float"></i>

                <span>

                    ¡Contáctanos!</span>

            </a>
        </div>
    </div>






</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.newapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/pages/PrimerContacto/Welcome.blade.php ENDPATH**/ ?>