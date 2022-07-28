<?php $__env->startPush('css'); ?>

<style>
	.photo,
	#foto img {

		width: 300px;
		height: 300px;
		object-fit: contain;
	}
</style>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>

<script src="<?php echo e(asset('js/utilidades.js')); ?>"></script>

<?php $__env->stopPush(); ?>


<div class="card">
	<div class="card-body">

		<div class="row">
			<div class="col-12 col-md-6">
				<h6 class="text-primary text-center">FOTO PRINCIPAL (SE MUESTRA CUANDO NO HAY VIDEO)</h6>
				<div class="container border border-secondary">
					<div class="container d-flex justify-content-center" id="foto">
						<?php if( isset($lot) && $lot->front_photo_url): ?>
						<img class="photo" src="<?php echo e($lot->front_photo_url); ?>" alt="">

						<?php else: ?>


						<img class="photo" src="<?php echo e(asset('image/logo.png')); ?>" style="opacity: .2 ;" alt="">
						<?php endif; ?>


					</div>
					<button onclick="document.querySelector('input[type=file]').click() ;" type="button" class="btn btn-primary btn-sm">
						<i class="align-middle" data-feather="camera"></i> BUSCAR FOTO
					</button>
				</div>
			</div>

			<div class="col-12 col-md-6">


				<div class="mb-3">
					<label class="form-label">CATEGORIA</label>
					<select name="category_id" class="form-control form-select">
						<option value="">Elije una categoria..</option>
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<option <?php echo e(($lot->category_id ?? old('category_id') ) == $ca->id ? 'selected' : ''); ?> value="<?php echo e($ca->id); ?>"> <?php echo e($ca->description); ?> </option>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>

				<div class="mb-3">
					<label class="form-label">TITULO</label>
					<input type="text" class="form-control fs-4" value="<?php echo e($lot->title ?? ''); ?>" name="title">
				</div>

				<div class="mb-3">
					<label class="form-label ">DESCRIPCION</label>
					<textarea class="form-control" name="description" cols="30" rows="4"><?php echo e($lot->description ?? ''); ?></textarea>

				</div>


				<input class="d-none" type="file" name="front_photo" onchange=" show_loaded_image(event, '#foto')">
			</div>



			<div class="col-12 col-md-4">
				<div class="mb-3">
					<label class="form-label">ZONA</label>
					<input type="text" class="form-control fs-4" value="<?php echo e($lot->zone ?? ''); ?>" name="zone">

				</div>
				<div class="mb-3">
					<label class="form-label">PESO</label>
					<input type="text" class="form-control fs-4" value="<?php echo e($lot->weight ?? ''); ?>" name="weight">

				</div>



			</div>
			<div class="col-12 col-md-4">
				<div class="mb-3">
					<label class="form-label">DOBLE MARCA</label>
					<input type="text" class="form-control fs-4" value="<?php echo e($lot->double_mark ?? ''); ?>" name="double_mark">

				</div>
				<div class="mb-3">
					<label class="form-label">CANTIDAD DE CABEZAS QUE INCLUYE</label>
					<input type="text" class="form-control fs-4" value="<?php echo e($lot->quantity ?? ''); ?>" name="quantity">

				</div>


			</div>
			<div class="col-12 col-md-4">
				<div class="mb-3">
					<label class="form-label">PRECIO</label>
					 
					<input type="text" class="form-control fs-4" value="<?php echo e($lot->price ?? ''); ?>" name="price">

				</div>

				 

				<div class="mb-3">
					<label class="form-label">COMISION</label>
					<input type="text" class="form-control fs-4" value="<?php echo e($lot->vat_on_comission ?? ''); ?>" name="vat_on_comission">

				</div>
				 
			</div>
		</div>



		 
	</div>
</div><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/lots/form.blade.php ENDPATH**/ ?>