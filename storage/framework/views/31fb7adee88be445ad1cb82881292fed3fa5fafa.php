<div class="product">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="titlepage">
                  <h2>Nuestros Productos</h2>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($category->image_url): ?>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 <?php echo e($loop->index%2 == 0 ? 'padding_left0' : 'padding_right0'); ?>">
               <div class="product_box">
                  <a href="<?php echo e(route('client.categorias'). '/'.  $category->id); ?>"  >
                     <figure>
                        <img style="object-fit: cover;" src="<?php echo e($category->image_url); ?>" alt="#" />
                     </figure>
                     <h3><?php echo e($category->description); ?></h3>
                  </a>
               </div>
            </div>
            <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


         </div>
      </div>
   </div><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/categories.blade.php ENDPATH**/ ?>