

<?php $__env->startPush('css'); ?>
<?php echo app('Illuminate\Foundation\Vite')([ 'resources/css/dropzone.css']); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
<?php echo app('Illuminate\Foundation\Vite')([ 'resources/js/dropzone.js']); ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // A quick way setup
        var myDropzone = new Dropzone("#my-awesome-dropzone", {
 
            // Setup chunking
            chunking: true,
            method: "POST",
            maxFilesize: 400000000,
            chunkSize: 1000000,
            // If true, the individual chunks of a file are being uploaded simultaneously.
            parallelChunkUploads: true,
            addRemoveLinks: true
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

<?php $__env->stopPush(); ?>



<?php $__env->startSection('content'); ?>


<div class="container ">
    <form action="<?php echo e(route('lotes') .'/'. $lot->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('admin.lots.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <button type="submit" class="btn btn-lg btn-primary">GUARDAR</button>
    </form>

    <div class="card">
        <div class="card-header">
            <h6 class="text-primary text-center fw-bold">SUBIR VIDEO</h6>
        </div>
        <form method="POST" action="<?php echo e(route('videos').'/'.  $lot->id); ?>" class="dropzone" id="my-awesome-dropzone">
            <?php echo csrf_field(); ?>

           
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/admin/lots/edit.blade.php ENDPATH**/ ?>