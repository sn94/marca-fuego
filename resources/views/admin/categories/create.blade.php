@extends('admin.layouts.admin')
@section('content')
 

<div class="container col-12 col-md-6">
<form action="{{route('categorias')}}" method="POST" enctype="multipart/form-data">
@csrf

@include('admin.categories.form')


<button type="submit"  class="btn btn-lg btn-primary">GUARDAR</button>
</form>
</div>
	 
@endsection