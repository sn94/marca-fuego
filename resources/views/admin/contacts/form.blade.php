@push('css')

<style>
   button .feather,
   div.d-flex .feather {

      width: 32px !important;
      height: 32px !important;
   }
</style>

@endpush

<div class="card col-12 col-md-8">
   <div class="card-body">

      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif

      <div class="card">
         <div class="card-body">
            <input class="form-control mt-1" value="{{$contact->fullname  ?? ''}}" placeholder="Nombre y Apellido" type="text" name="fullname">

            <div class="d-flex flex-row align-items-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail align-middle me-2">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
               </svg>
               <input value="{{$contact->email  ?? ''}}" class="form-control mt-1" placeholder="Correo" type="email" name="email">
            </div>


            <div class="d-flex flex-row align-items-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone align-middle me-2">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
               </svg>

               <input value="{{$contact->phone  ?? ''}}" class="form-control mt-1" placeholder="Teléfono" type="text" name="phone">
            </div>



            <textarea rows="4" class="form-control" placeholder="Digite su mensaje" type="type" name="message">{{$contact->message ?? ''}}</textarea>
         </div>
      </div>





   </div>
</div>