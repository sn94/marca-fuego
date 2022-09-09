<footer id="contact">
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="titlepage">
                     <h2>Contactanos</h2>
                  </div>
               </div>
               <div class="col-md-12">
                  @include('client.contact_us')
               </div>
               <div class="col-md-4 border_right">
                  <ul class="location_icon">
                     <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>Nivaclé 4026 c/ Mby'a</li>
                     <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+595 982 594052
                     </li>
                     <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>comercial@marcafuego.com.py
                     </li>
                  </ul>
               </div>
               <!--<div class="col-md-3 border_right">
                     <h3>Useful Link</h3>
                     <ul class="link">
                        <li><a href="#">humour, or </a></li>
                        <li><a href="#">randomised words </a> </li>
                        <li><a href="#">which don't look </a></li>
                        <li><a href="#">even slightly  </a> </li>
                        <li><a href="#">believable. If   </a></li>
                     </ul>
                  </div>-->
               <div class="col-md-3 border_right">
                  <h3>Menu</h3>
                  <ul class="link">
                     <li><a href="{{ route('home')}}">Inicio</a></li>
                     <li><a href="{{ route('client.us')}}">Nosotros</a></li>
                     <li><a href="{{route('client.categorias')}}">Productos</a></li>
                     <li><a href="{{route('client.news')}}">Novedades</a></li>
                     <li><a href="{{route('home') .'#CONTACT-FORM'}}">Contacto</a></li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <form class="bottom_form"  action="{{route('client.subscription')}}" method="POST">
                     @csrf
                     <h3>Informativo</h3>
                     <input class="enter" placeholder="Ingrese su correo" type="text" name="email">
                     <button class="mainbutton " >Suscribirse</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p class="black">© Desarrollado por INFO SERVICE - Soluciones Tecnologicas: 2022<a href="https://html.design/"></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>