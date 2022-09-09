 <a class="whatsappFloating animate__animated  animate__tada animate__slow animate__infinite" href="https://api.whatsapp.com/send?phone=595%20982%20594052&text= Buenas, quisiera mas información sobre los lotes" target="_blank">

    <i class="fa fa-whatsapp"></i>


 </a>
 <span class="whatsappFloatingTip  bg-info text-light p-2">

    CONTACTANOS!</span>

 <header id="header">

    <!-- header inner -->

    <div class="header">

       <div class="container-fluid">

          <div class="row">

             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">

                <div class="full">

                   <div class="center-desk">

                      <div class="logo">

                         <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('main_web_template/images/logo.png')); ?>" alt="#" /></a>

                      </div>

                   </div>

                </div>

             </div>

             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">

                <nav class="navigation navbar navbar-expand-md navbar-dark ">

                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">

                      <span class="navbar-toggler-icon"></span>

                   </button>

                   <div class="collapse navbar-collapse" id="navbarsExample04">

                      <ul class="navbar-nav mr-auto">

                         <li class="nav-item active">

                            <a class="nav-link" href="<?php echo e(route('home')); ?>"> Inicio </a>

                         </li>

                         <li class="nav-item">

                            <a class="nav-link" href="<?php echo e(url('categorias')); ?>">Categorías de animales </a>

                         </li>
                         <li class="nav-item">

                            <a class="nav-link" href="<?php echo e(route('client.news')); ?>">Novedades</a>

                         </li>

                         <li class="nav-item">

                            <a class="nav-link" href="<?php echo e(route('client.us')); ?>">Nosotros</a>

                         </li>




                         <li class="nav-item">

                            <a class="nav-link" href="#CONTACT-FORM">Contacto</a>



                         </li>

                         <?php if(auth()->guard()->check()): ?>
                         <li class="nav-item">
                            <a onclick="event.preventDefault();if( confirm('¿CERRAR SESIÓN?')) $('#logoutform').submit();" class="nav-link text-warning" href="<?php echo e(route('logout')); ?>">
                               Cerrar sesión
                            </a>

                            <form id="logoutform" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">

                               <?php echo csrf_field(); ?>

                            </form>
                         </li>

                         <?php endif; ?>



                      



                      </ul>

                   </div>

                </nav>

             </div>

          </div>

       </div>

    </div>

 </header><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/layouts/navbar.blade.php ENDPATH**/ ?>