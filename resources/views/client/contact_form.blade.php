<style>

   #suscribeme~i.fa.fa-check-square-o,

   #suscribeme:checked~i.fa.fa-check-square {

      display: inline-flex !important;

   }



   #suscribeme:checked~i.fa.fa-check-square {

      color: #f8820c !important;

   }



   #suscribeme:checked~i.fa.fa-check-square-o,

   #suscribeme~i.fa.fa-check-square {

      display: none !important;

   }





   #btnSwitch.already-registered {

      border: 2px solid orangered;

      padding: 5px 10px;

      color: orangered !important;

      font-weight: bold;

      letter-spacing: 1px;

      background: white;

   }



   #btnSwitch.not-registered {

      border: 2px solid #2b92f9;

      padding: 5px 10px;

      color: #2b92f9 !important;

      font-weight: bold;

      letter-spacing: 1px;

      background: white;

   }



   input[type=radio]~i.fa {



      display: none;

   }



   input[type=radio]:checked~i.fa {



      display: inline;

   }



   input[type=radio]:checked+label {



      text-decoration: underline !important;

   }



   i.fa {

      font-size: 2em;

   }

</style>

<script>

   function btnForm() {



      $("#registrado").prop('checked', !$("#registrado").prop('checked'));



      var estatus = $("#registrado").prop('checked');

      if (estatus) {

         $("#fullname,#phone,#message").removeClass("d-flex");

         $("#fullname,#phone,#message").addClass("d-none");

      } else {

         $("#fullname,#phone,#message").removeClass("d-none");

         $("#fullname,#phone,#message").addClass("d-flex");

      }



      if (estatus) {

         $('#btnSwitch').text('Quiero registrarme');

         $('#btnSwitch').removeClass('already-registered');

         $('#btnSwitch').addClass('not-registered');



      } else {

         $('#btnSwitch').text('Ya estoy registrado');

         $('#btnSwitch').removeClass('not-registered');

         $('#btnSwitch').addClass('already-registered');



      }

   }



   function launchConfetti() {



      var canvas = document.getElementById('my-canvas');

      canvas.confetti = canvas.confetti || confetti.create(canvas, {

         resize: true

      });



      canvas.confetti({

         spread: 70,

         origin: {

            y: 1.2

         }

      });

   }

</script>

@if ($errors->any())

<div class="alert alert-danger">

   <ul>

      @foreach ($errors->all() as $error)

      <li>{{ $error }}</li>

      @endforeach

   </ul>

</div>

@endif

<form id="CONTACT-FORM" class="main_form" action="{{route('client.contact_us') }}" method="POST">

   @csrf



 {{--  <p style="color:white;text-align: center;font-size: 18px;">Elige una opci&oacute;n</p> --}}

   <div class="d-flex flex-row justify-content-between mb-2">

      <input type="checkbox" name="registrado" id="registrado" class="d-none">

      <div class="form-check d-flex ">

         <input onchange="btnForm()" class="form-check-input d-none" type="radio" name="switch" id="exampleRadios1" value="registered">

         <i class="fa fa-check-square-o text-light" class="d-none"></i>

         <label class="form-check-label text-light font-weight-bold" style="font-size: 18px;" for="exampleRadios1">

            Ya estoy registrado

         </label>

      </div>



      <div class="form-check d-flex">

         <input onchange="btnForm()" class="form-check-input d-none" type="radio" name="switch" id="exampleRadios2" value="not-registered" checked>

         <i class="fa fa-check-square-o text-light"></i>

         <label class="form-check-label text-light font-weight-bold" style="font-size: 18px;" for="exampleRadios2">

           Quiero registrarme

         </label>

      </div>



   </div>

   <div id="fullname" class="d-flex align-items-center">

      <i class="fa fa-vcard-o text-light "></i>

      <input class="contactus ml-1" placeholder="Nombre y Apellido" type="text" name="fullname">

   </div>



   <div class="d-flex align-items-center">

      <i class="fa fa-envelope-o text-light "></i>

      <input class="ml-1 contactus" placeholder="Correo" type="email" name="email" id="email">

   </div>



   <div id="phone" class="d-flex align-items-center">

      <i class="fa fa-phone text-light "></i>

      <input class="ml-1 contactus" placeholder="Teléfono" type="text" name="phone">

   </div>



   <div id="message" class="d-flex">

      <i class="fa fa-pencil text-light "></i>

      <textarea class="contactus1" placeholder="Digite su mensaje" type="type" name="message" placeholder="Digite su mensaje"></textarea>

   </div>





   <div class="d-flex">

      <label for="suscribeme" class="d-flex">



         <canvas style="position: absolute; width: 200px; height:200px;z-index:1;" id="my-canvas"></canvas>

         <input onchange="if( this.checked) launchConfetti();" type="checkbox" name="subscription" value="yes" id="suscribeme" class="d-none">

         <i class="fa fa-check-square-o text-light "></i>

         <i class="fa fa-check-square  text-light "></i>

         <h3 class="text-light pl-2">SUSCRIBIRME</h3>

      </label>

   </div>

   <button class="mainbutton mx-auto">Enviar</button>

</form>