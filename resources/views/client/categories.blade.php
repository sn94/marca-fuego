<div class="product">

      <div class="container">

         <div class="row" >

            <div class="col-md-6">

               <div class="titlepage">

                  <h2>Nuestros lotes</h2>

               </div>

            </div>

         </div>

      </div>

      <div class="container-fluid">

         <div class="row">



            @foreach ($categories as $category )

            @if ($category->image_url)



            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 {{ $loop->index%2 == 0 ? 'padding_left0' : 'padding_right0'}}">

               <div class="product_box">

                  <a href="{{route('client.categorias'). '/'.  $category->id }}"  >

                     <figure>

                        <img style="object-fit: cover;" src="{{$category->image_url}}" alt="#" />

                     </figure>

                     <h3>{{ $category->description }}</h3>

                  </a>

               </div>

            </div>

            @endif



            @endforeach





         </div>

      </div>

   </div>