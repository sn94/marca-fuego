@extends('admin.layouts.admin')
@section('content')


<div class="container col-12 col-md-6">
    <form action="{{route('categorias') .'/'. $category->id  }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
       
        <div class="flex flex-row justify-content-center">
      <button type="submit" class="btn btn-lg btn-danger">BORRAR CATEGORÍA</button>
        <button type="button" onclick="window.history.go(-1)" class="btn btn-lg btn-secondary">CANCELAR</button>
      </div>
      <h4 class="mt-1 text-center">{{$category->description}}</h4>
        @if ( isset($category) &&  $category->image_url)
				<img class="img-fluid" src="{{ $category->image_url}}"  alt="">

				@else


				<img class="img-fluid" src="{{asset('image/logo.png')}}" style="opacity: .2 ;" alt="">
				@endif

              


    
    </form>
</div>

@endsection