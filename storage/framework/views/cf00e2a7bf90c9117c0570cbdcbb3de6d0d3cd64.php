 

 <?php $__env->startSection('content'); ?>
 <div class="container-fluid p-0">


   <div class="row">
     <div class="col-sm-6">
       <div class="card">
         <div class="card-body">
           <div class="row">
             <div class="col-12 col-md-6 mt-0">
               <h1 class="card-title text-primary fs-1">LOTES</h1>
             </div>

             <div class="col-12 col-md-6">


               <img srcset="<?php echo e(asset('image/cow-breed.png')); ?>" alt="Cow Breed" loading="lazy" onload="this.setAttribute('lazy', 'loaded')" onerror="this.setAttribute('lazy', 'error')" style="width: 100px; height: 100px; filter: invert(0%) sepia(0%) saturate(0%) hue-rotate(268deg) brightness(97%) contrast(107%);" lazy="loaded">


             </div>
           </div>
           <h1 class="mt-1 mb-3"><?php echo e($lots); ?></h1>

         </div>
       </div>

     </div>


     <div class="col-sm-6">
       <div class="card">
         <div class="card-body">
           <div class="row">
             <div class="col-12 col-md-6 mt-0">
               <h1 class="card-title text-primary fs-1">CATEGORIAS</h1>
             </div>

             <div class="col-12 col-md-6">

               <img srcset="<?php echo e(asset('image/external-cow.png')); ?>" alt="Cow" loading="lazy" onload="this.setAttribute('lazy', 'loaded')" onerror="this.setAttribute('lazy', 'error')" style="width: 100px; height: 100px;" lazy="loaded">

             </div>
           </div>
           <h1 class="mt-1 mb-3"><?php echo e($categories); ?></h1>

         </div>
       </div>
     </div>

   </div>


   <br>

   <a class="weatherwidget-io mt-5" href="https://forecast7.com/es/n25d26n57d58/asuncion/" data-label_1="ASUNCIÓN" data-label_2="ESTA SEMANA" data-theme="original" >ASUNCIÓN ESTA SEMANA</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

 </div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/welcome.blade.php ENDPATH**/ ?>