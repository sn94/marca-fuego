@extends('admin.layouts.admin')

@push('js')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

@endpush

@push('css')

<style>
	a.btn .feather {

		width: 32px !important;
		height: 32px !important;
	}
</style>

@endpush

@section('content')



<a class="btn btn-lg btn-primary" href="{{route('contactos').'/crear' }}">


	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus align-middle me-2">
		<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
		<circle cx="8.5" cy="7" r="4"></circle>
		<line x1="20" y1="8" x2="20" y2="14"></line>
		<line x1="23" y1="11" x2="17" y2="11"></line>
	</svg>

	AGREGAR CONTACTO</a>

 

	

{{ $contacts->links(  ) }}

<table class="table table-bordered">
	<thead>
		<tr>


			<th> </th>
			<th>NOMBRE COMPLETO</th>
			<th>TELEFONO</th>
			<th>EMAIL</th>
			<th>MENSAJE</th>
			<th>REGISTRO
			<a href="{{ route('contactos'). '?page=' . request()->query('page', 1) . '&orderby=created_at&orderdir=desc'}}">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle align-middle me-2"><circle cx="12" cy="12" r="10"></circle><polyline points="8 12 12 16 16 12"></polyline><line x1="12" y1="8" x2="12" y2="16"></line></svg>
			</a>
		
			<a  href="{{ route('contactos'). '?page=' . request()->query('page', 1) . '&orderby=created_at&orderdir=asc'}}">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle align-middle me-2"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg>
			</a>
			</th>
		</tr>
	</thead>
	<tbody>


		@foreach ($contacts as $ca )


		<tr>
			<td>

				<a class="btn btn-sm btn-primary" href="{{route('contactos') . '/leer/' . $ca->id }}"> VER M&Aacute;S</a>
			</td>
			<td class="fs-6">{{$ca->fullname}}</td>
			<td class="fs-6"> {{$ca->phone }}</td>
			<td>
				@if ($ca->subscriptor)
				<span class="badge bg-success fs-5"> {{$ca->email }} </span>
				<span class="text-success"> SUSCRIPTO
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square align-middle me-2">
						<polyline points="9 11 12 14 22 4"></polyline>
						<path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
					</svg>
				</span>

				@else
				{{$ca->email }}
				@endif


			</td>
			<td class="fs-6 text-truncate" style="max-width: 100px;"> {{ $ca->message}} </td>

			<td class="fs-6">
				{{ optional($ca->created_at)->format('d/m/Y H:i')}}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection