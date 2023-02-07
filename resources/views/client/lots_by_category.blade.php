@extends('client.layouts.app')

@vite(['resources/css/videojs.css' , 'resources/js/videojs.js' ] )


@push('js')



<script>
    //inicializar


    window.addEventListener('DOMContentLoaded', (event) => {


        let videos = Array.from(
            document.querySelectorAll("video.vjs-tech")
        ).map(
            v => {



                return ({
                    id: v.id,
                    source: v.src
                });
            } //end handler

        )


        videos.forEach(

            V => {
                videojs(V.id)
                    .src(V.source);

            }
        )

    });
</script>

@endpush

@push('css')




<style>
    .loteItemTitle {
        background: #f3a90a;
        position: relative;
        overflow: hidden;
        width: 640px !important;
    }

    .loteItemTitle::before {
        position: absolute;
        content: '';
        width: 50px;
        height: 100px;
        z-index: 1;
        background: black;
        top: 0;
        left: 0;
    }

    figure{
      
        width: 640px !important;
        height: 264px !important;
    }
    figure img.noVideo {

        width: 640px !important;
        height: 264px !important;
        object-fit: cover;
    }
</style>





@endpush



@push('js')







<script>
    function showDetails(containerInfoId) {

        //   $($(target).next('.card')[0]).removeClass('d-none');



        // const detailContent = $($(target).next('.card')[0]).find(".card-body").clone();

        const detailContent = $("#" + containerInfoId).html();

        console.log(detailContent)



        $("#detailmodal .modal-body").empty();

        $("#detailmodal .modal-body").html(detailContent);

        $("#detailmodal").modal('show');

        //  $( $(target).next('.card')[0]  ).animate({opacity: 1}, 1500 );





        //   $(target).addClass('d-none');

        // $(target).addClass('showing');



    }
</script>

@endpush



@section('content')





<div class="modal" id="detailmodal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">Detalles</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body">

                <p>Modal body text goes here.</p>

            </div>

            <div class="modal-footer">

                <button onclick="$('#detailmodal').modal('hide');" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>



            </div>

        </div>

    </div>

</div>







<div class="product" style="padding-top: min(35vh, 140px);min-height: 100vh;">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <div class="titlepage">

                    <h2 class="animate__animated  animate__slideInLeft animate__slower animate__repeat-2" style="text-transform: uppercase;">{{ $category->description }}</h2>



                    @if ( $lotes->count() == 0)

                    <h2 style="font-style: italic;" class="text-secondary"> PROXIMAMENTE</h2>

                    @else

                    <h2 class="animate__animated  animate__slideInRight animate__slower animate__repeat-2">¡LOTES DISPONIBLES!</h2>



                    @endif

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">









            @foreach ($lotes as $lot )



            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_left0">

                <div class="container " style="position: relative;margin-bottom: 70px;">
                    <div class="d-flex flex-row pt-2 pb-2  loteItemTitle  ">

                        <!--     <button style="z-index: 1;" onclick="showDetails(  'detail_<?php /*$lot->id */ ?>')" 
class="btn btn-outline-warning mt-0 " type="button">Ver detalles</button> -->

                        <h3 style="text-transform: uppercase;font-weight: bold ;" class="text-center text-dark d-block w-100 text-truncate">{{$lot->title }}</h3>

                    </div>
                    <figure>

                        @if ($lot->video_url)

                        <video-js id="video_{{$lot->id}}" class="video-js" controls preload="auto" width="640" height="264" poster="{{$lot->category->image_url}}" data-setup="{}" src="{{$lot->video_url}}">

                        </video-js>

                        @else
                        @if ($lot->front_photo_url)
                        <img class="noVideo" src="{{$lot->front_photo_url}}" alt="" class="img-fluid">
                        @else
                        <img class="noVideo" src="{{$lot->category->image_url}}" alt="" class="img-fluid">

                        @endif
                        @endif



                    </figure>




                    <!--Ejemplo de descripcion para video-->

                    <div id="{{ 'detail_' . $lot->id }}">

                        <table class="table table-sm table-hover table-striped">

                            <tbody>

                                <tr>

                                    <th> Zona:</th>

                                    <td>{{ $lot->zone}}</td>



                                    <th> Cantidad:</th>

                                    <td> {{$lot->quantity}}</td>

                                </tr>

                                <tr>

                                    <th> Peso:</th>

                                    <td>{{ $lot->weight}}</td>



                                    <th> Precio:</th>

                                    <td> {{ $lot->price }}</td>

                                </tr>

                                <tr>

                                    <td> Doble marca

                                    </td>

                                    <td> {{ $lot->double_mark}}</td>



                                    <td> Comision: </td>

                                    <td> {{$lot->comission ?? '----'}}</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                    <!--

                        #######

                        Fin descripcion de video

                        ######

                     -->



                </div>

            </div>







            @endforeach









        </div>

    </div>

</div>







@endsection