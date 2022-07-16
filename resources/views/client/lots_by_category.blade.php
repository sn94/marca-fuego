@extends('client.layouts.app')

@push('css')

@vite([ 'resources/css/videojs.css'])


<style>
    .detail-label {

        position: absolute;
        bottom: -50px;
        left: 0;
        width: 100%;
       
    }
</style>

@endpush

@push('js')



@vite([ 'resources/js/videojs.js'])

<script>
    function showDetails(   containerInfoId) {
        //   $($(target).next('.card')[0]).removeClass('d-none');

       // const detailContent = $($(target).next('.card')[0]).find(".card-body").clone();
        const detailContent = $("#"+ containerInfoId).html();
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



<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="titlepage">
                    <h2 style="text-transform: uppercase;">{{ $category->description }}</h2>
                  
                    @if (  $lotes->count() == 0)
                    <h2 style="font-style: italic;" class="text-secondary"> PROXIMAMENTE</h2>
                    @else    
                    <h2>¡LOTES DISPONIBLES!</h2>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">



            @foreach ($lotes as $lot )

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_left0">
                <div class="container bg-dark" style="position: relative;margin-bottom: 70px;">
                    <figure>
                        <!---Ejemplo 1 Ya no se usa <img />  
                        
                        se usar <video></video>  
                     
                     -->
                        @if ($lot->video_url)
                        <video src="{{$lot->video_url}}" style="width: 100%;height: auto;" controls="controls"></video>


                        @else

                        <img src="{{$lot->front_photo_url}}" alt="" class="img-fluid">

                        @endif

                    </figure>


                    <!-- boton para ver descripcion-->
                   <div class="d-flex flex-row pt-2 pb-2  detail-label  bg-dark ">
                   <button style="z-index: 1;" onclick="showDetails(  'detail_<?= $lot->id ?>')" class="btn btn-outline-warning mt-0 " type="button">Ver detalles</button>
                    <h4 style="font-size: 2em; transform: scaleX(1.5)" class="text-center text-warning d-block w-100 text-truncate">{{$lot->title }}</h4>
                   </div>


                    <!--Ejemplo de descripcion para video-->
                    <div class="d-none" id="{{ 'detail_' . $lot->id }}">
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
                                        <td>353 kg promedio</td>

                                        <th> Precio:</th>
                                        <td> 12.500 g/kg, -4%, iva incluido</td>
                                    </tr>
                                    <tr>
                                        <td> Doble marca
                                        </td>
                                        <td> {{ $lot->double_mark}}</td>

                                        <td> Comision: </td>
                                        <td> {{$lot->comission}}</td>
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