

@extends('admin.layouts.admin')

@push('css')
@vite([  'resources/css/dropzone.css'])
 
@endpush
@push('js')

<script>
    
    document.addEventListener("DOMContentLoaded",  function(){
            // A quick way setup
var myDropzone = new Dropzone("#my-awesome-dropzone", {
        // Setup chunking
        chunking: true,
        method: "POST",
        maxFilesize: 400000000,
        chunkSize: 1000000,
        // If true, the individual chunks of a file are being uploaded simultaneously.
        parallelChunkUploads: true
    });

    // Append token to the request - required for web routes
    myDropzone.on('sending', function(file, xhr, formData) {
        formData.append("_token", $("[name=_token]").val() );
    })

    // Append token to the request - required for web routes
    myDropzone.on('sending', function(file, xhr, formData) {
        formData.append("_token", $("[name=_token]").val() );

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
    }  );

     

</script>

@endpush

@section('content')



<form method="POST"  action="{{route('videos').'/'.  $lot->id   }}" class="dropzone" id="my-awesome-dropzone"  > 
@csrf
</form>




@endsection