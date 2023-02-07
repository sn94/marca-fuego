



<?php $__env->startPush('js'); ?>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

	

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>







<a class="btn btn-lg btn-primary" href="<?php echo e(route('lotes').'/crear'); ?>">



	<i style="width:32px;height: 32px;" data-feather="file-plus"></i>

	CREAR LOTE</a>



 





 

 

	 

	<?php echo e($lots->links(  )); ?>




<table class="table table-bordered">

	<thead>

		<tr>

			 

			 

			<th> </th>

			<th>TITULO</th>

			<th>ZONA</th>

			<th>PRECIO</th>

			<th>CATEGORIA</th>

			<th>SE REGISTRÓ EL</th>

		</tr>

	</thead>

	<tbody>





		<?php $__currentLoopData = $lots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>





		<tr>

			 



			 

			<td>

				<?php if($ca->front_photo_url): ?>

				<img src="<?php echo e($ca->front_photo_url); ?>" style="width:200px; height:auto;" alt="">

				<?php else: ?> <img src="<?php echo e(asset('image/logo.png')); ?>" style="width:200px; height:auto;opacity: .2;" alt="">



				<?php endif; ?>

			<div class="mt-1">

			<a class="btn btn-primary btn-sm" href="<?php echo e(route('lotes').'/editar/' . $ca->id); ?>">

					<i class="align-middle" data-feather="edit-2"></i>

				</a>

				<a class="btn btn-primary btn-sm" href="<?php echo e(route('lotes').'/borrar/' . $ca->id); ?>">

					<i class="align-middle" data-feather="trash"></i>

				</a>

			</div>

			</td>



			<td><?php echo e($ca->title); ?></td>

			<td> <?php echo e($ca->zone); ?></td>

			<td><?php echo e($ca->price); ?></td>

			<td>

				<?php if($ca->category): ?>

				<?php echo e($ca->category->description); ?>




				<?php endif; ?>

			</td>



			<td>

				<?php echo e(optional($ca->created_at)->format('d/m/Y')); ?>


			</td>

		</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</tbody>

</table>



<?php echo e($lots->links()); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/lots/index.blade.php ENDPATH**/ ?>