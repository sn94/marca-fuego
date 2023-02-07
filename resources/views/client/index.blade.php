@extends('client.layouts.app')



@section('content')





@include('client.layouts.banner')

   <!-- end banner -->

   <!-- three_box -->

    

   <!-- three_box -->

   <!-- hottest -->

   <div class="hottest">

      <div class="container">

         <div class="row d_flex">

            <div class="col-md-5">

               <div class="titlepage">

                  <h2>Nos estamos actualizando para vos!<br></h2>

               </div>

            </div>

            <div class="col-md-7">

               <div class="hottest_box">

                  <p style="color:black;">Venimos con nueva imagen en pro de brindar el mejor servicio como Consignataria destacada del

                     Paraguay La excelencia es nuestro norte. </p>

               </div>

            </div>

         </div>

      </div>

   </div>

    

   <!-- end hottest -->

   <!-- choose  section -->

  @include('client.why_choose_us')

   

   <!-- end choose  section -->

   <!-- product  section -->

   @include('client.categories')

   <!-- end product  section -->

   <!-- about -->

   @include('client.who_we_are')

   <!-- end about -->







   @endsection