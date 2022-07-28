

<?php $__env->startPush('js'); ?>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>

<style>
	a.btn .feather {

		width: 32px !important;
		height: 32px !important;
	}
</style>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>








<?php echo e($subscriptors->links(  )); ?>


<table class="table table-bordered">
	<thead>
		<tr>


			<th> </th>
			<th>EMAIL</th>
			<th>REGISTRO
				<a href="<?php echo e(route('contactos'). '?page=' . request()->query('page', 1) . '&orderby=created_at&orderdir=desc'); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle align-middle me-2">
						<circle cx="12" cy="12" r="10"></circle>
						<polyline points="8 12 12 16 16 12"></polyline>
						<line x1="12" y1="8" x2="12" y2="16"></line>
					</svg>
				</a>

				<a href="<?php echo e(route('contactos'). '?page=' . request()->query('page', 1) . '&orderby=created_at&orderdir=asc'); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle align-middle me-2">
						<circle cx="12" cy="12" r="10"></circle>
						<polyline points="16 12 12 8 8 12"></polyline>
						<line x1="12" y1="16" x2="12" y2="8"></line>
					</svg>
				</a>
			</th>
		</tr>
	</thead>
	<tbody>


		<?php $__currentLoopData = $subscriptors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


		<tr>
			<td>

			<?php if($ca->contact): ?>

			<a class="btn btn-sm btn-primary" href="<?php echo e(route('contactos') . '/leer/' . $ca->contact->id); ?>"> VER CONTACTO</a>
				
			<?php endif; ?>
			</td>

			<td> <?php echo e($ca->email); ?> </td>

			<td class="fs-6">
				<?php echo e(optional($ca->created_at)->format('d/m/Y H:i')); ?>

			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/subscriptors/index.blade.php ENDPATH**/ ?>