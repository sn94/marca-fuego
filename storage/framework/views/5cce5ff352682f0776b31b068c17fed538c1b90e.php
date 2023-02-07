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



   <script src="<?php echo e(asset('js/toast.min.js')); ?>"></script>


   <?php echo app('Illuminate\Foundation\Vite')(['resources/css/animate.css', 'resources/css/bootstrapcss.css' , 'resources/js/bootstrapcss.js' ]); ?>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo e(asset('css/palette.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('css/montserrat.css') . '?v' . date('His')); ?>">

   <link rel="icon" href="<?php echo e(asset('image/logo-xs.png')); ?>" type="image/gif" />



   <?php echo $__env->yieldPushContent('css'); ?>

   <?php echo $__env->yieldPushContent('js'); ?>

</head>

<!-- body -->



<body class="m-0 p-0">



   <?php if(session()->has('success_toast')): ?>

   <script>
      const options = {
         settings: {
            duration: 3500,
         },

         style: {
            main: {
               background: "#f3a90a",
               color: "rgb(136, 39, 1)",
               fontSize: "max(4vw, 1em)",
               fontWeight: "bolder",
               borderRadius: "20px",
               bottom: "30vh"
            },
         }

      };

      setTimeout(() => {
         iqwerty.toast.toast('😊<?= session('success_toast') ?>', options);
      }, 2800)
   </script>


   <?php endif; ?>
   <?php if(session()->has('success')): ?>

   <div class="alert alert-info" role="alert">



      <?php $__currentLoopData = explode("\n", session('success')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <h3> <?php echo e($msg); ?></h3>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   </div>

   <?php endif; ?>





   <?php if(session()->has('error')): ?>

   <div class="alert alert-danger" role="alert">

      <h3><?php echo e(session('error')); ?></h3>

   </div>

   <?php endif; ?>





   <?php echo $__env->yieldContent('content'); ?>



   <!--  footer -->

   <?php echo $__env->make('client.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



   <script src="<?php echo e(asset('main_web_template/js/jquery-3.0.0.min.js')); ?>"></script>



</body>



</html><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/layouts/newapp.blade.php ENDPATH**/ ?>