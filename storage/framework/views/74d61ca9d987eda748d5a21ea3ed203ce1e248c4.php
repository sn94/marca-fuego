<form id="CONTACT-FORM" class="main_form" action="<?php echo e(route('client.contact_us') .'#CONTACT-FORM'); ?>" method="POST" style="position: relative;">

    <?php echo csrf_field(); ?>



    <input type="hidden" name="switch" value="registered">




    <div class="d-flex align-items-center" style="position: relative;z-index: 2;">

        <i class="fa fa-envelope-o text-light "></i>

        <input class="ml-1 contactus" placeholder="Correo" type="email" name="email" id="email">

    </div>




    <div   style="position: relative;z-index: 2;">

        <label class="form-check-label text-light" for="suscribeme">
            <input onchange="if( this.checked) launchConfetti();" class="d-none" name="subscription" type="checkbox" value="yes" id="suscribeme">
            <i class="fa fa-square-o text-light"></i>
            <i class="fa fa-check-square-o text-light"></i>
            SUSCRIBIRME
        </label>
    </div>

    <button class="mainbutton mx-auto" style="position: relative;z-index: 2;">Ingresar</button>

    <canvas style="position: absolute; width: 400px; height:400px;bottom: 0;left:0;z-index:1;" id="my-canvas"></canvas>
</form><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/pages/PrimerContacto/RegistradoForm.blade.php ENDPATH**/ ?>