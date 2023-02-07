<?php $__env->startPush('css'); ?>


<style>
    #contactForm {
        overflow: hidden;
    }

    #contactForm label,
    #contactForm p,
    #contactForm button,
    #contactForm input {
        font-family: Montserrat !important;
    }

    #contactForm label {
        font-size: max(1vw, 11px);
    }

    #contactForm .form-control {
        padding-left: 40px;
    }

    #contactForm i.fa {
        font-size: 1.6em !important;
    }

    #contactForm .gallery {
        height: calc(18vh + 60px);
        padding-top: 50px;
        padding-bottom: 50px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;

    }

    #contactForm .gallery img {

        width: max(20vw, 200px);
        object-fit: cover;
    }

    #contactForm .gallery img:nth-of-type(1) {
        position: absolute;
        top: 30px;
        left: calc((max(20vw, 200px) / 4) * -1);
        height: 20vh;
    }

    #contactForm .gallery img:nth-of-type(2) {
        position: relative;

        z-index: 1 !important;
        height: calc(20vh + 30px);
    }

    #contactForm .gallery img:nth-of-type(3) {
        position: absolute;
        top: 30px;
        right: calc((max(20vw, 200px) / 4) * -1);
        height: 20vh;
    }

    #LOGO_BOTTOM{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    #LOGO_BOTTOM img {
        width:  150px;
    }
</style>

<?php $__env->stopPush(); ?>


<div class="card m-0" id="contactForm" style="background: #000000d4;padding-inline: 30px;min-height: 100vh;">


    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>




    <h3 style="font-family: Montserrat;font-size: max(1.7vw, 18px);" class="text-light fw-bold text-center mt-4   mt-md-3">TE CONTAMOS SOBRE LAS <br> MEJORES OPORTUNIDADES EN <br>
        <span class="text-warning fw-bold fst-italic">LOTES DE GANADO</span>
    </h3>


    <div class="position-relative mt-2" style="transform: scale(.9);">



        <label class="text-light" for="email">Escribe tu correo electronico</label>
        <i class="fa fa-envelope-o  text-secondary position-absolute " style="bottom: 5px;left: 10px;"></i>
        <input name="email" id="email" type="text" class="form-control" placeholder="Tu Email">
    </div>


    <div class="position-relative mt-1" style="transform: scale(.9);">



        <label class="text-light" for="phone">Escribe tu numero de celular</label>
        <i class="fa fa-whatsapp  text-secondary position-absolute" style="bottom: 5px;left: 10px;"></i>
        <input name="phone" id="phone" type="text" class="form-control" placeholder="Numero de celular">

    </div>


    <button style="background-color: #dd0000;transform: scale(.9);" class="btn btn-danger border border-danger fw-bold mt-3 mb-4">!QUIERO CONOCER LOS PRECIOS!</button>


    <div class="gallery position-relative">
        <img src="<?php echo e(asset('image/collage/img1.webp')); ?>" alt="">
        <img src="<?php echo e(asset('image/collage/img2.jpg')); ?>" alt="">
        <img src="<?php echo e(asset('image/collage/img3.jpg')); ?>" alt="">
      
    </div>


    <div class="container mt-1 p-1">
        <div class="row">

           

            <div class="col-12 d-flex flex-row justify-content-center">
            <a  href="https://api.whatsapp.com/send?phone=595%20982%20594052&text= Buenas, quisiera mas información sobre los lotes" 
            class="fs-1 text-light me-2  " target="_blank">

<i class="fa fa-whatsapp"></i>

</a>
                <p style="font-size: max(1.1vw,12px);" class="text-light fw-bold">También podés contactarnos directo a Whatsapp!</p>
            </div>

            <div class="col-12">
                <div id="LOGO_BOTTOM" class="position-relative mx-auto">
                    <img class="mx-auto" src="<?php echo e(asset('image/logo_original_landing.png')); ?>" alt="">
                    <p class="fw-bold text-light text-center" style="font-size: 12px;width: 100%;">Todos los derechos reservados</p>
                </div>
            </div>

        </div>


        
    <a  href="<?php echo e(route('login')); ?>">
        <span  style="font-size: 11px;"  class="d-inline text-light pl-2">Acceso administrativo</span>
    </a>
    </div>


    <?php if(session()->has('error')): ?>

    <div class="alert alert-danger" role="alert">

        <h4><?php echo e(session('error')); ?></h4>

    </div>

    <?php endif; ?>





</div><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/pages/PrimerContacto/Form.blade.php ENDPATH**/ ?>