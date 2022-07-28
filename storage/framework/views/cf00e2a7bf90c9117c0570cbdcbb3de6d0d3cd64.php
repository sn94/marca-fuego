 

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


 </div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/welcome.blade.php ENDPATH**/ ?>