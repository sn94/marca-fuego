<header>
      <!-- header inner -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="{{route('home')}}"><img src="{{asset('main_web_template/images/logo.png')}}" alt="#" /></a>
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
                              <a class="nav-link" href="{{route('home')}}"> Inicio </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{  route('client.us')}}">Nosotros</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('categorias')}}">Lotes </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="blog.html">Novedades</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ route('client.contact_us')}}">Contacto</a>

                           </li>

                           <li class=" d_none get_btn">
                              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                              <a href="https://api.whatsapp.com/send?phone=595%20982%20594052&text= Buenas, quisiera mas información sobre los lotes" class="float" target="_blank">
                                 <i style="color: black !important;" class="fa fa-whatsapp my-float"></i><span style="color: black;text-shadow: 1px 1px 5px brown;font-size: 13px;text-align: center; font-family: Arial, Helvetica, sans-serif;">
                                    +595 982 594052</span>
                              </a>



                              </a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>