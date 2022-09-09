@extends('admin.layouts.admin')

@push('js')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	
@endpush
@section('content')



<a class="btn btn-lg btn-primary" href="{{route('lotes').'/crear' }}">

	<i style="width:32px;height: 32px;" data-feather="file-plus"></i>
	CREAR LOTE</a>

 


 
 
	 
	{{ $lots->links(  ) }}

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


		@foreach ($lots as $ca )


		<tr>
			 

			 
			<td>
				@if ($ca->front_photo_url)
				<img src="{{ $ca->front_photo_url }}" style="width:200px; height:auto;" alt="">
				@else <img src="{{ asset('image/logo.png') }}" style="width:200px; height:auto;opacity: .2;" alt="">

				@endif
			<div class="mt-1">
			<a class="btn btn-primary btn-sm" href="{{route('lotes').'/editar/' . $ca->id  }}">
					<i class="align-middle" data-feather="edit-2"></i>
				</a>
				<a class="btn btn-primary btn-sm" href="{{route('lotes').'/borrar/' . $ca->id  }}">
					<i class="align-middle" data-feather="trash"></i>
				</a>
			</div>
			</td>

			<td>{{$ca->title}}</td>
			<td> {{$ca->zone }}</td>
			<td>{{$ca->price }}</td>
			<td>
				@if ($ca->category)
				{{ $ca->category->description}}

				@endif
			</td>

			<td>
				{{ optional($ca->created_at)->format('d/m/Y')}}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection