@extends('admin.layouts.admin')



@push('css')

@vite([ 'resources/css/dropzone.css'])



@endpush

@push('js')

@vite([ 'resources/js/dropzone.js'])

<script>

    document.addEventListener("DOMContentLoaded", function() {

        // A quick way setup

        Dropzone.options.recommendationDiv = {
    acceptedFiles: 'image/*'
};
        var myDropzone = new Dropzone("#my-awesome-dropzone", {

 

            // Setup chunking

            chunking: true,

            method: "POST",

            maxFilesize: 400000000,

            chunkSize: 1000000,

            // If true, the individual chunks of a file are being uploaded simultaneously.

            parallelChunkUploads: true,

            addRemoveLinks: true,
            acceptedFiles:  ['video/mp4', 'video/3gpp', 'video/quicktime', 'video/x-msvideo','video/x-ms-wmv']

        });



        // Append token to the request - required for web routes

        myDropzone.on('sending', function(file, xhr, formData) {

            formData.append("_token", $("[name=_token]").val());

        })



        // Append token to the request - required for web routes

        myDropzone.on('sending', function(file, xhr, formData) {

            formData.append("_token", $("[name=_token]").val());



            // This will track all request so we can get the correct request that returns final response:

            // We will change the load callback but we need to ensure that we will call original

            // load callback from dropzone

            var dropzoneOnLoad = xhr.onload;

            xhr.onload = function(e) {

                dropzoneOnLoad(e)



                // Check for final chunk and get the response

                var uploadResponse = JSON.parse(xhr.responseText)

                if (typeof uploadResponse.name === 'string') {

                    $list.append('<li>Uploaded: ' + uploadResponse.path + uploadResponse.name + '</li>')

                }

            }

        })





        const fetchPhotos = async () => {

            const resp = await axios.get('/api/videos/<?= $lot->id ?>');

            if (resp.status == 200) {



                resp.data.forEach((asset) => {

                    let mockFile = {

                        id: asset.id,

                        name: asset.name,

                        size: 12345

                    };

                    myDropzone.displayExistingFile(mockFile, asset.thumbnail);

                });





            } else;



        }



        fetchPhotos()











    });

</script>



@endpush







@section('content')





<div class="container ">

    <form action="{{route('lotes') .'/'. $lot->id  }}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')

        @include('admin.lots.form')





        <button type="submit" class="btn btn-lg btn-primary">GUARDAR</button>

    </form>



    <div class="card">

        <div class="card-header">

            <h6 class="text-primary text-center fw-bold">SUBIR VIDEO</h6>

        </div>

        <form method="POST" action="{{route('videos').'/'.  $lot->id   }}" class="dropzone" id="my-awesome-dropzone">

            @csrf



           

        </form>



    </div>

</div>



@endsection