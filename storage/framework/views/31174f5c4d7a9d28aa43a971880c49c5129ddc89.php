



<?php $__env->startPush('css'); ?>




<style>
    .loteItemTitle {
        background: #f3a90a;
        position: relative;
        overflow: hidden;
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
</style>





<?php $__env->stopPush(); ?>



<?php $__env->startPush('js'); ?>







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

<?php $__env->stopPush(); ?>



<?php $__env->startSection('content'); ?>





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

                    <h2 class="animate__animated  animate__slideInLeft animate__slower animate__repeat-2" style="text-transform: uppercase;"><?php echo e($category->description); ?></h2>



                    <?php if( $lotes->count() == 0): ?>

                    <h2 style="font-style: italic;" class="text-secondary"> PROXIMAMENTE</h2>

                    <?php else: ?>

                    <h2 class="animate__animated  animate__slideInRight animate__slower animate__repeat-2">¡LOTES DISPONIBLES!</h2>



                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">









            <?php $__currentLoopData = $lotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_left0">

                <div class="container " style="position: relative;margin-bottom: 70px;">
                    <div class="d-flex flex-row pt-2 pb-2  loteItemTitle  ">

                        <!--     <button style="z-index: 1;" onclick="showDetails(  'detail_<?php /*$lot->id */ ?>')" 
class="btn btn-outline-warning mt-0 " type="button">Ver detalles</button> -->

                        <h3 style="text-transform: uppercase;font-weight: bold ;" class="text-center text-dark d-block w-100 text-truncate"><?php echo e($lot->title); ?></h3>

                    </div>
                    <figure>

                        <?php if($lot->video_url): ?>

                        <video src="<?php echo e($lot->video_url); ?>" style="width: 100%;height: auto;" controls="controls"></video>


                        <?php else: ?>
                        <img src="<?php echo e($lot->front_photo_url); ?>" alt="" class="img-fluid">

                        <?php endif; ?>



                    </figure>




                    <!--Ejemplo de descripcion para video-->

                    <div id="<?php echo e('detail_' . $lot->id); ?>">

                        <table class="table table-sm table-hover table-striped">

                            <tbody>

                                <tr>

                                    <th> Zona:</th>

                                    <td><?php echo e($lot->zone); ?></td>



                                    <th> Cantidad:</th>

                                    <td> <?php echo e($lot->quantity); ?></td>

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

                                    <td> <?php echo e($lot->double_mark); ?></td>



                                    <td> Comision: </td>

                                    <td> <?php echo e($lot->comission); ?></td>

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







            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>









        </div>

    </div>

</div>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/lots_by_category.blade.php ENDPATH**/ ?>