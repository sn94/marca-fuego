@extends('admin.layouts.admin')
@section('content')



<a class="btn btn-lg btn-primary" href="{{route('categorias').'/crear' }}">

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


		@foreach ($categories as $ca )


		<tr>
			<td>

				<a class="btn btn-primary btn-sm" href="{{route('categorias').'/editar/' . $ca->id  }}">
					<i class="align-middle" data-feather="edit-2"></i>
				</a>
				<a class="btn btn-primary btn-sm" href="{{route('categorias').'/borrar/' . $ca->id  }}">
					<i class="align-middle" data-feather="trash"></i>
				</a>
			</td>

			<td>{{$ca->id}}</td>

			<td>
			@if ($ca->image_url)
			<img src="{{ $ca->image_url }}" style="width:200px; height:auto;" alt="">
			@else 	<img src="{{ asset('image/logo.png') }}" style="width:200px; height:auto;opacity: .2;" alt="">
				
			@endif
			</td>

			<td>{{$ca->description}}</td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection