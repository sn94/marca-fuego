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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

   <style>
      .product_box {
         position: relative;
         overflow: hidden;
      }

      .product_box img,
      .product_box h3 {
         transition: all 1.1s ease;
      }

      .product_box h3 {
         text-shadow: 1px 1px 3px black, 2px 2px 3px gray;
         z-index: 1
      }

      .product_box:hover img {
         transform: scale(1.2);

      }

      .product_box h3::before {
         transition: all 1.2s ease;
         position: absolute;
         content: '';
         bottom: 0px;
         right: 0;
         width: 0;
         height: 0;
         border-bottom: 0 solid white;
      }

      .product_box:hover h3 {
         position: absolute;
         bottom: 30px;
         right: 30px;
         letter-spacing: 2px;

      }

      .product_box:hover h3::before {
         width: 120%;
         height: 100%;
         background: #f4cb1e88;
         bottom: -1px;

         z-index: -1;
      }
   </style>

   <?php echo $__env->yieldPushContent('css'); ?>
   <?php echo $__env->yieldPushContent('js'); ?>
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="<?php echo e(asset('main_web_template/images/loading.gif')); ?>" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
  <?php echo $__env->make('client.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
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
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="<?php echo e(asset('main_web_template/js/jquery.min.js')); ?>"></script>
   <script src="<?php echo e(asset('main_web_template/js/popper.min.js')); ?>"></script>
   <script src="<?php echo e(asset('main_web_template/js/bootstrap.bundle.min.js')); ?>"></script>
   <script src="<?php echo e(asset('main_web_template/js/jquery-3.0.0.min.js')); ?>"></script>
   <!-- sidebar -->
   <script src="<?php echo e(asset('main_web_template/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
   <script src="<?php echo e(asset('main_web_template/js/custom.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/layouts/app.blade.php ENDPATH**/ ?>