@extends('admin.layouts.admin')
@section('content')
 

<div class="container ">
<form action="{{route('categorias')}}" method="POST" enctype="multipart/form-data">
@csrf

@include('admin.lots.form')


<button type="submit"  class="btn btn-lg btn-primary">GUARDAR</button>
</form>
</div>
	 
@endsection