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








{{ $subscriptors->links(  ) }}

<table class="table table-bordered">
	<thead>
		<tr>


			<th> </th>
			<th>EMAIL</th>
			<th>REGISTRO
				<a href="{{ route('contactos'). '?page=' . request()->query('page', 1) . '&orderby=created_at&orderdir=desc'}}">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle align-middle me-2">
						<circle cx="12" cy="12" r="10"></circle>
						<polyline points="8 12 12 16 16 12"></polyline>
						<line x1="12" y1="8" x2="12" y2="16"></line>
					</svg>
				</a>

				<a href="{{ route('contactos'). '?page=' . request()->query('page', 1) . '&orderby=created_at&orderdir=asc'}}">
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


		@foreach ($subscriptors as $ca )


		<tr>
			<td>

			@if ($ca->contact)

			<a class="btn btn-sm btn-primary" href="{{route('contactos') . '/leer/' . $ca->contact->id }}"> VER CONTACTO</a>
				
			@endif
			</td>

			<td> {{$ca->email }} </td>

			<td class="fs-6">
				{{ optional($ca->created_at)->format('d/m/Y H:i')}}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection