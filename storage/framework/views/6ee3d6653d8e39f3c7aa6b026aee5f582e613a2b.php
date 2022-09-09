 



<style>



 .sidebar-item.active > .sidebar-link:hover{

background: linear-gradient(90deg,rgba(8, 26, 52, 0.1),rgba(59, 125, 221, 0.48) 50%,transparent) !important;

}



.sidebar-link:hover{

	background: linear-gradient(90deg,rgba(8, 26, 52, 0.1),rgba(59, 125, 221, 0.48) 50%,transparent) !important;

	text-decoration:  none !important;

}





</style>

	

 



<nav id="sidebar" class="sidebar js-sidebar" style="background-image: url(<?php echo e(asset('image/wallpaper1.jpg')); ?>);">

			<div class="sidebar-content js-simplebar">

				<a class="sidebar-brand" href="<?php echo e(route('home')); ?>">

					

					<img src="<?php echo e(asset('image/logo.png')); ?>" class="img-fluid" alt="">

				</a>



				<ul class="sidebar-nav">

					<li class="sidebar-header">

						Opciones

					</li>



					<li class="sidebar-item <?php echo e(Route::currentRouteName() == 'dashboard' ? 'active' : ''); ?>">

						<a class="sidebar-link" href="<?php echo e(route('dashboard')); ?>">

							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">PANEL</span>

						</a>

					</li>

					<li class="sidebar-item  <?php echo e(Route::currentRouteName() == 'categorias' ? 'active' : ''); ?>">

						<a class="sidebar-link" href="<?php echo e(route('categorias')); ?>">

							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Categorias de lotes</span>

						</a>

					</li>

					<li class="sidebar-item  <?php echo e(Route::currentRouteName() == 'lotes' ? 'active' : ''); ?> ">

						<a class="sidebar-link" href="<?php echo e(route('lotes')); ?>">

							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Lotes</span>

						</a>

					</li>





                    <li class="sidebar-item  <?php echo e(Route::currentRouteName() == 'contactos' ? 'active' : ''); ?>">

						<a class="sidebar-link" href="<?php echo e(route('contactos')); ?>">

							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Contactos desde la web</span>

						</a>

					</li>



					<li class="sidebar-item  <?php echo e(Route::currentRouteName() == 'subscriptors' ? 'active' : ''); ?>">

						<a class="sidebar-link" href="<?php echo e(route('subscriptors')); ?>">

							<i class="align-middle" data-feather="user"></i> <span class="align-middle"> Suscriptos</span>

						</a>

					</li>





 



					 



					 



				 



					 

				</ul>



<!--

				<div class="sidebar-cta  ">

					<div class="sidebar-cta-content">

						<strong class="d-inline-block mb-2">NUEVOS CONTACTOS!</strong>

						<div class="mb-3 text-sm">

							Are you looking for more components? Check out our premium version.

						</div>

						<div class="d-grid">

							<a href="upgrade-to-pro.html" class="btn btn-primary">Revisar</a>

						</div>

					</div>

				</div>

-->

			</div>

		</nav><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>