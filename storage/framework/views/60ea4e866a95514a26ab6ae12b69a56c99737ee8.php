
<?php $__env->startSection('content'); ?>



<a class="btn btn-lg btn-primary" href="<?php echo e(route('categorias').'/crear'); ?>">

<i style="width:32px;height: 32px;" data-feather="file-plus"></i>
CREAR CATEGORIA</a>
<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th>CODIGO</th>
			<th>FOTO</th>
			<th>TITULO</th>
		</tr>
	</thead>
	<tbody>


		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


		<tr>
			<td>

				<a class="btn btn-primary btn-sm" href="<?php echo e(route('categorias').'/editar/' . $ca->id); ?>">
					<i class="align-middle" data-feather="edit-2"></i>
				</a>
				<a class="btn btn-primary btn-sm" href="<?php echo e(route('categorias').'/borrar/' . $ca->id); ?>">
					<i class="align-middle" data-feather="trash"></i>
				</a>
			</td>

			<td><?php echo e($ca->id); ?></td>

			<td>
			<?php if($ca->image_url): ?>
			<img src="<?php echo e($ca->image_url); ?>" style="width:200px; height:auto;" alt="">
			<?php else: ?> 	<img src="<?php echo e(asset('image/logo.png')); ?>" style="width:200px; height:auto;opacity: .2;" alt="">
				
			<?php endif; ?>
			</td>

			<td><?php echo e($ca->description); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>