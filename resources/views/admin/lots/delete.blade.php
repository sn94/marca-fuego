@extends('admin.layouts.admin')
@section('content')


<div class="container col-12 col-md-6">
    <form action="{{route('lotes') .'/'. $lot->id  }}" method="POST" >
        @csrf
        @method('DELETE')
       
        <div class="flex flex-row justify-content-center">
      <button type="submit" class="btn btn-lg btn-danger">BORRAR LOTE</button>
        <button type="button" onclick="window.history.go(-1)" class="btn btn-lg btn-secondary">CANCELAR</button>
      </div>
      <h4 class="mt-1 text-center">{{$lot->title}}</h4>
        @if ( isset($lot) &&  $lot->front_photo_url)
				<img class="img-fluid" src="{{ $lot->front_photo_url}}"  alt="">

				@else


				<img class="img-fluid" src="{{asset('image/logo.png')}}" style="opacity: .2 ;" alt="">
				@endif

              


    
    </form>
</div>

@endsection