 @extends('admin.layouts.admin')

 @section('content')
 <div class="container-fluid p-0">

 
 <div class="row">
           <div class="col-sm-6">
             <div class="card">
               <div class="card-body">
                 <div class="row">
                   <div class="col-12 col-md-6 mt-0">
                     <h1 class="card-title text-primary fs-1">LOTES</h1>
                   </div>

                   <div class="col-12 col-md-6">


                     <img srcset="{{asset('image/cow-breed.png')}}" alt="Cow Breed" loading="lazy" onload="this.setAttribute('lazy', 'loaded')" onerror="this.setAttribute('lazy', 'error')" style="width: 100px; height: 100px; filter: invert(0%) sepia(0%) saturate(0%) hue-rotate(268deg) brightness(97%) contrast(107%);" lazy="loaded">


                   </div>
                 </div>
                 <h1 class="mt-1 mb-3">{{$lots}}</h1>

               </div>
             </div>

           </div>


           <div class="col-sm-6">
             <div class="card">
               <div class="card-body">
                 <div class="row">
                   <div class="col-12 col-md-6 mt-0">
                     <h1 class="card-title text-primary fs-1">CATEGORIAS</h1>
                   </div>

                   <div class="col-12 col-md-6">

                     <img srcset="{{asset('image/external-cow.png')}}" alt="Cow" loading="lazy" onload="this.setAttribute('lazy', 'loaded')" onerror="this.setAttribute('lazy', 'error')" style="width: 100px; height: 100px;" lazy="loaded">

                   </div>
                 </div>
                 <h1 class="mt-1 mb-3">{{$categories}}</h1>

               </div>
             </div>
           </div>

         </div>


 </div>

 @endsection