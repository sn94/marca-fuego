<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="<?php echo e(asset('image/logo-xs.png')); ?>" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title> <?php echo e(env('APP_NAME')); ?></title>

	<link href="<?php echo e(asset('template/css/app.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('main_web_template/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<?php echo $__env->yieldPushContent('css'); ?>
	

	<script src="<?php echo e(asset('template/js/app.js')); ?>"></script>

	<?php echo app('Illuminate\Foundation\Vite')([ 'resources/js/app.js']); ?>

	

    <?php echo \Livewire\Livewire::styles(); ?>
</head>

<body>
	<div class="wrapper">
	<?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="main">
			<?php echo $__env->make('admin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<main class="content">



				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<?php $__currentLoopData = request()->segments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segmento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<?php if(Route::has($segmento)): ?>
						<li class="breadcrumb-item fs-3 fw-bold  <?php echo e($loop->last ? 'active' : ''); ?>"><a href="<?php echo e(route($segmento)); ?>">

								<?php echo e(__(ucfirst($segmento))); ?>
							</a></li>

						<?php else: ?>
						<li class="breadcrumb-item fs-3 fw-bold <?php echo e($loop->last ? 'active' : ''); ?>"><a href="#"> 
							<?php echo e(__(ucfirst($segmento))); ?> </a></li>

						<?php endif; ?>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ol>
				</nav>




				<?php if(session()->has('success')): ?>
				<div class="alert alert-info" role="alert">

					<?php $__currentLoopData = explode("\n", session('success')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<h4> <?php echo e($msg); ?></h4>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<?php endif; ?>


				<?php if(session()->has('error')): ?>
				<div class="alert alert-danger" role="alert">
					<h4><?php echo e(session('error')); ?></h4>
				</div>
				<?php endif; ?>

				<?php echo $__env->yieldContent('content'); ?>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Administrador web</strong></a> &copy;
							</p>
						</div>
						<!--
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
-->
					</div>
				</div>
			</footer>
		</div>
	</div>



	<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



	<?php echo $__env->yieldPushContent('js'); ?>
	<?php echo \Livewire\Livewire::scripts(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/layouts/admin.blade.php ENDPATH**/ ?>