<form autocomplete="off" id="CONTACT-FORM" class="main_form" style="position:relative;" action="<?php echo e(route('client.contact_us') .'#CONTACT-FORM'); ?>" method="POST">

    <?php echo csrf_field(); ?>


    <input type="hidden" name="switch" value="not-registered">


    <div id="fullname" class="d-flex align-items-center" style="position: relative;z-index: 2;">

        <i class="fa fa-vcard-o text-light "></i>

        <input class="contactus ml-1" placeholder="Nombre y Apellido" type="text" name="fullname">

    </div>



    <div class="d-flex align-items-center" style="position: relative;z-index: 2;">

        <i class="fa fa-envelope-o text-light "></i>

        <input class="ml-1 contactus" placeholder="Correo" type="email" name="email" id="email">

    </div>



    <div id="phone" class="d-flex align-items-center" style="position: relative;z-index: 2;">

        <i class="fa fa-phone text-light "></i>

        <input class="ml-1 contactus" placeholder="Teléfono" type="text" name="phone">

    </div>



    <div id="message" class="d-flex" style="position: relative;z-index: 2;">

        <i class="fa fa-pencil text-light "></i>

        <textarea class="contactus1" placeholder="Digite su mensaje" type="type" name="message" placeholder="Digite su mensaje"></textarea>

    </div>




    <div   style="position: relative;z-index: 2;">

        <label class="form-check-label text-light" for="suscribeme">
            <input onchange="if( this.checked) launchConfetti();" class="d-none" name="subscription" type="checkbox" value="yes" id="suscribeme">
            <i class="fa fa-square-o text-light"></i>
            <i class="fa fa-check-square-o text-light"></i>
            SUSCRIBIRME
        </label>
    </div>


    <button class="mainbutton mx-auto" style="position: relative;z-index: 2;">Enviar</button>
    <canvas style="position: absolute; width: 400px; height:400px;bottom: 0;left:0;z-index:1;" id="my-canvas"></canvas>

</form><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/pages/PrimerContacto/NoRegistradoForm.blade.php ENDPATH**/ ?>