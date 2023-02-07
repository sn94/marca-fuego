@extends('client.layouts.newapp')


@push('css')

<style>
    video {
        position: fixed;
        left: 0;
        top: 0;
        width: 100vw;
        min-height: 100vh;
        object-fit: cover;
    }
</style>

@endpush
@section('content')



<video src="{{asset('videos/pexels-samed-gojak.mp4')}}" muted autoplay loop></video>

<div class="row  m-0  p-0" style="position: relative;">
<div class="col-12 col-sm-10 col-md-5 m-0 p-0 ">
<form action="{{route('client.contact_us')}}" method="POST">
    @csrf
@include("client.pages.PrimerContacto.Form" )
</form>
 
</div>
   
      

    {{-- <video src="{{asset('videos/pexels-samed-gojak.mp4')}}" muted autoplay loop></video>--}}
 


</div>




@endsection