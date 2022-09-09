<!DOCTYPE html>



<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">



<head>

    <!-- basic -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <!-- mobile metas -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- site metas -->

    <link rel="icon" href="<?php echo e(asset('image/logo-xs.png')); ?>">

    <title> <?php echo e(env('APP_NAME')); ?> - Negocios Agroganaderos</title>

    <meta name="keywords" content="">

    <meta name="description" content="">

    <meta name="author" content="">





    <link rel="stylesheet" href="<?php echo e(asset('css/palette.css')); ?>">

    <!-- bootstrap css -->

    <link rel="stylesheet" href="<?php echo e(asset('main_web_template/css/bootstrap.min.css')); ?>">

    <!-- style css -->

    <link rel="stylesheet" href="<?php echo e(asset('main_web_template/css/style.css') . '?v=' . date('His')); ?>">

    <!-- Responsive-->

    <link rel="stylesheet" href="<?php echo e(asset('main_web_template/css/responsive.css')); ?>">

    <!-- fevicon -->

    <link rel="icon" href="<?php echo e(asset('image/logo-xs.png')); ?>" type="image/gif" />

    <!-- Scrollbar Custom CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('main_web_template/css/jquery.mCustomScrollbar.min.css')); ?>">

    <!-- Tweaks for older IEs-->

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">



    <!-- Scripts -->

    <?php echo app('Illuminate\Foundation\Vite')([ 'resources/js/confetti.js']); ?>

    <style>
        video {

            position: fixed;
            width: 100%;
            min-height: 100vh;
            height: 100vh;
            top: 0;
            right: 0;
            z-index: -1;
            border-radius: 0;

        }

        .marcafuegologo {

          
            opacity: .75;
            z-index: 1;

        }

        @media  only screen and (max-width: 600px) {
            video {
                object-fit: cover;
            }
            #LoginLink{
                position: relative; z-index: 2;
                margin-left: 5%;
                padding-bottom: 2%;
            }

            .marcafuegologo {

                position: relative;
                width: 100vw;
            }

            #MainTranslucid {
                width: 100vw;
                min-height: 100vh;
            }
            .whatsapp {
display: none;
}
        }

        @media  only screen and (min-width: 768px) {
            video {
                object-fit: contain;
            }

            #LoginLink{
                position: fixed;right: 50px;bottom: 40px;z-index: 50;
                
            }
            .marcafuegologo {

                position: absolute;
                width: 600px;
                right: 10px;
                top: 10px;
            }
            .whatsapp {

position: fixed;

top: 40%;

right: 5%;

font-size: 2em;

font-weight: bold;

color: white;
text-shadow: 0px 0px 15px black, 0 0 5px green;
display: flex;
align-items: center;
z-index: 2;
}
        }



        .intro-title {

            position: relative;

            font-size: min(28px, 2.5em);

            letter-spacing: 1.5px;

            top: 20px;

            z-index: 1;

            color: white;
            text-align: center;
            margin-bottom: 10px;
            text-shadow: 1px 1px 3px black;


        }







      



        .whatsapp i {

            font-size: 3em !important;

        }



        input::placeholder,

        textarea::placeholder,

        input,

        textarea {

            color: white !important;

            font-weight: bold !important;

        }



        input,

        textarea {

            background: transparent !important;

        }






        i.fa {
            font-size: 1.5em;
        }

        body {

            min-height: 100vh;

            position: relative;

            z-index: 1;

            background-position: bottom;

        }


        .preload {

            position: fixed;
            background: #060605;
            width: 100%;
            height: 100%;
            z-index: 5;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        /*radios */
        input[type=radio]~i.fa.fa-check-square-o {
            display: none;
        }

        input[type=radio]~i.fa.fa-square-o {
            display: inline;
        }

        input[type=radio]:checked~i.fa.fa-square-o {
            display: none;
        }

        input[type=radio]:checked~i.fa.fa-check-square-o {
            display: inline;
        }

        /* checkboxes */
        input[type=checkbox]~i.fa.fa-check-square-o {
            display: none;
        }

        input[type=checkbox]~i.fa.fa-square-o {
            display: inline;
        }

        input[type=checkbox]:checked~i.fa.fa-square-o {
            display: none;
        }

        input[type=checkbox]:checked~i.fa.fa-check-square-o {
            display: inline;
        }

        .form-check-label {
            font-size: 1.3em;
        }

        .form-check-label:hover {
            cursor: pointer;
        }
    </style>

    <script src="<?php echo e(asset('main_web_template/js/jquery.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {


            //    $(".preload").addClass( 'd-none')


            $(".preload").animate({
                opacity: 0,
                display: "none",
                zIndex: -1
            }, 3500, function() {
                // Animation complete.
            });
        })


        function launchConfetti() {



            var canvas = document.getElementById('my-canvas');

            canvas.confetti = canvas.confetti || confetti.create(canvas, {

                resize: true

            });



            canvas.confetti({

                spread: 70,

                origin: {

                    y: 1.2

                }

            });

        }

        async function updateForm() {


            let URL_FORM = '';
            if ($("#registrado").prop('checked')) {
                URL_FORM = '<?= route('client.form_contact_registrado') ?>';
            } else {
                URL_FORM = '<?= route('client.form_contact_noregistrado') ?>';

            }
            $("#form").html('')
            $("#fireloading").removeClass('d-none');

            try {
                const request = await fetch(URL_FORM);
                const result = await request.text();
                $("#fireloading").addClass('d-none')
                $("#form").html(result)
            } catch (err) {
                $("#form").html(`<div class="alert alert-danger"> Error de servidor: ${err}  </div> `)
            }

        }
    </script>



</head>



<body>

    <div class="preload">
        <img class="m-0" src="<?php echo e(asset('image/logo.png')); ?>" alt="">
    </div>


    <div class="container p-0" style="position: relative;">

        <video src="<?php echo e(asset('videos/pexels-samed-gojak.mp4')); ?>" muted autoplay loop></video>

        <img class="m-0 marcafuegologo" src="<?php echo e(asset('image/logo.png')); ?>" alt="">

        <a href="https://api.whatsapp.com/send?phone=595%20982%20594052&text= Buenas, quisiera mas información sobre los lotes" class=" whatsapp" target="_blank">

            <i class="fa fa-whatsapp my-float"></i>

            <span>

                ¡Contáctanos!</span>

        </a>



    </div>

    <div class="container-fluid" style="position:relative;z-index: 1;">
        <!-- background: linear-gradient(#7c6902,#7c6902bf); -->


        <div class="row">





            <div class="col-12 col-md-5 pl-0 pr-5  " style="min-height: 100vh;">



                <div id="MainTranslucid" class="container" style="background: #806f0bcc;">

                    <h1 class="intro-title">Queremos conocerte</h1>

                    <p class="text-light text-center mt-4  mb-2" style="font-size: 1.3em;">Elije una opción</p>
                    <div class="row mt-1" style="position: relative;z-index: 2;">
                        <div class="col-12 col-md-6">

                            <label class="form-check-label text-light" for="registrado">
                                <input onchange="updateForm(  )" class="d-none" type="radio" name="tipoformulario" value="registrado" id="registrado">
                                <i class="fa fa-square-o text-light"></i>
                                <i class="fa fa-check-square-o text-light"></i>
                                Ya estoy registrado
                            </label>
                        </div>
                        <div class="col-12 col-md-6">

                            <label class="form-check-label text-light" for="no_registrado">
                                <input onchange="updateForm(  )" class="d-none" type="radio" name="tipoformulario" value="no_registrado" id="no_registrado" checked>
                                <i class="fa fa-square-o text-light"></i>
                                <i class="fa fa-check-square-o text-light"></i>
                                Quiero registrarme
                            </label>
                        </div>
                    </div>
              

                    <img id='fireloading' style="height: 300px;margin: auto;width: 250px;opacity: .5;" class="d-none" src="<?php echo e(asset('main_web_template/images/loading.gif')); ?>" alt="">
                    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <div id="form">
                        <?php echo $__env->make('client.pages.PrimerContacto.NoRegistradoForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=595%20982%20594052&text= Buenas, quisiera mas información sobre los lotes"
                     class=" whatsapp text-light d-md-none d-block p-3" target="_blank">

<i class="fa fa-whatsapp my-float"></i> 

</a>
                    <?php if(session()->has('error')): ?>

                    <div class="alert alert-danger" role="alert">

                        <h4><?php echo e(session('error')); ?></h4>

                    </div>

                    <?php endif; ?>

                    <a id="LoginLink"  href="<?php echo e(route('login')); ?>"><i class="fa fa-user text-light"></i>
                    <span class="d-inline d-md-none text-light pl-2">Acceso administrativo</span>
                </a>

                </div>

            </div>

            <!-- aqui estaba el panel de video -->

        </div>

    </div>

</body>



</html><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/pages/PrimerContacto/Welcome_desktop.blade.php ENDPATH**/ ?>