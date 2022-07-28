

<?php $__env->startSection('content'); ?>


<section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="text-bg">
                  <h1>Bienvenidos</h1>
                  <p>Desde el 2014, nuestro talentoso equipo, trabaja arduamente para ofrecer los mejores servicios a
                     nuestros clientes. Personalizamos nuestras ofertas basadas en las necesidades especificas de cada
                     uno.</p>
                  <!-- <a href="#">Discover</a>-->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- three_box -->
   <div class="three_box">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="box_text">
                  <figure><img src="images/img1.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box_text">
                  <figure><img src="images/img2.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box_text">
                  <figure><img src="images/img3.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- three_box -->
   <!-- hottest -->
   <div class="hottest">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-5">
               <div class="titlepage">
                  <h2>Nos estamos actualizando para vos!<br></h2>
               </div>
            </div>
            <div class="col-md-7">
               <div class="hottest_box">
                  <p>Venimos con nueva imagen en pro de brindar el mejor servicio como Consignataria destacada del
                     Paraguay La excelencia es nuestro norte. </p>
               </div>
            </div>
         </div>
      </div>
   </div>
    
   <!-- end hottest -->
   <!-- choose  section -->
  <?php echo $__env->make('client.why_choose_us', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
   <!-- end choose  section -->
   <!-- product  section -->
   <?php echo $__env->make('client.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end product  section -->
   <!-- about -->
   <?php echo $__env->make('client.who_we_are', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end about -->



   <?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/index.blade.php ENDPATH**/ ?>