@push('css')

<style>
	.photo,
	#foto img {

		width: 300px;
		height: 300px;
		object-fit: contain;
	}
</style>

@endpush
@push('js')

<script src="{{asset('js/utilidades.js')}}"></script>

@endpush


<div class="card">
<div class="card-body">
 <div class="container border border-secondary">
			<div class="container d-flex justify-content-center" id="foto">
				@if ( isset($category) &&  $category->image_url)
				<img class="photo" src="{{ $category->image_url}}"  alt="">

				@else


				<img class="photo" src="{{asset('image/logo.png')}}" style="opacity: .2 ;" alt="">
				@endif


			</div>
			<button onclick="document.querySelector('input[type=file]').click() ;"  type="button" class="btn btn-primary btn-sm">
				<i class="align-middle" data-feather="camera"></i> BUSCAR FOTO
			</button>
		</div>
		<div class="mb-3">
			<label class="form-label">TITULO</label>
			<input type="text" class="form-control fs-4"  value="{{$category->description ?? ''}}" name="description">
		</div>

		<input class="d-none" type="file" name="image" onchange=" show_loaded_image(event, '#foto')" >
 </div>
</div>