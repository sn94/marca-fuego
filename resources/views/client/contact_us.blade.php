@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form id="CONTACT-FORM" class="main_form" action="{{route('client.contact_us') .'#CONTACT-FORM'}}" method="POST">
   @csrf
   <div class="row">
      <div class="col-md-3 ">
         <input class="contactus" placeholder="Nombre y Apellido" type="text" name="fullname">
      </div>
      <div class="col-md-3">
         <input class="contactus" placeholder="Correo" type="email" name="email">
      </div>
      <div class="col-md-3">
         <input class="contactus" placeholder="Teléfono" type="text" name="phone">
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
         <ul class="social_icon">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
         </ul>
      </div>
      <div class="col-md-8">
         <textarea class="contactus1" placeholder="Digite su mensaje" type="type"  name="message" placeholder="Digite su mensaje"></textarea>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
         <button class="mainbutton">Enviar</button>
      </div>
   </div>
</form>