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

            height: auto;

            top: 0;

            object-fit: contain;

            right: 0;
            z-index: -1;


            border-radius: 0;

        }



        /*   

@keyframes  tituloanimado {

    0%, 100%{

 

width: 0;



    }

    90%{

 

width: 100%;

    }

    

} */

        .intro-title {

            position: relative;

            font-size: 2.5em;

            letter-spacing: 1.5px;

            top: 20px;

            z-index: 1;

            color: white;

            margin-bottom: 10px;
            text-shadow: 1px 1px 3px black;


        }



      



        .whatsapp {

            position: absolute;

            bottom: 10px;

            left: 0;

            font-size: 2em;

            font-weight: bold;

            color: white;
            text-shadow: 1px 1px 15px black;
          

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



        .marcafuegologo {

            position: absolute;

            width: 600px;

            right: 10px;

            top: 10px;

            opacity: .75;

            z-index: 1;

        }



        body {

            min-height: 100vh;

            position: relative;

            z-index: 1;

                {
                    {
                    -- background-image: url(<?= asset('image/wallpaper1.jpg') ?>);
                    --
                }
            }

            background-position: bottom;

        }


        .preload {

            position: fixed;
            background: #060605;
            width: 100%;
            height: 100%;
            z-index: 2;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
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
    </script>



</head>



<body>

    <div class="preload">
        <img class="m-0" src="<?php echo e(asset('image/logo.png')); ?>" alt="">
    </div>



    <div class="container-fluid" style="position:relative;z-index: 1;">
        <!-- background: linear-gradient(#7c6902,#7c6902bf); -->


        <div class="row">





            <div class="col-12 col-md-5 pl-0 pr-5  " style="min-height: 100vh;">



                <div class="container" style="background: #806f0bcc;">

                    <h1 class="intro-title">Queremos conocerte</h1>





                    <?php echo $__env->make('client.contact_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php if(session()->has('error')): ?>

                    <div class="alert alert-danger" role="alert">

                        <h4><?php echo e(session('error')); ?></h4>

                    </div>

                    <?php endif; ?>

                    <a style="position: fixed;right: 20px;bottom: 20px;z-index: 50;" href="<?php echo e(route('login')); ?>"><i class="fa fa-user text-light"></i></a>

                </div>

            </div>

            <div class="col-12 col-md-7 p-0" style="position: relative;overflow: hidden;">

                <video src="<?php echo e(asset('videos/pexels-samed-gojak.mp4')); ?>" muted autoplay loop></video>

                <img class="m-0 marcafuegologo" src="<?php echo e(asset('image/logo.png')); ?>" alt="">

                <a  href="https://api.whatsapp.com/send?phone=595%20982%20594052&text= Buenas, quisiera mas información sobre los lotes" 
                class="   whatsapp" target="_blank">

                    <i class="fa fa-whatsapp my-float"></i>

                    <span>

                        +595 982 594052</span>

                </a>



            </div>

        </div>

    </div>

</body>



</html><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/pages/contacto.blade.php ENDPATH**/ ?>