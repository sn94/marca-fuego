@extends('client.layouts.app')

@section('content')


<section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="text-bg">
                  <h1>Bienvenidos</h1>
                  <p>Desde el 2014, nuestro talentoso equipo, trabaja arduamente para ofrecer los mejores servicios a
                     nuestros clientes. Personalizamos nuestras ofertas basadas en las necesidades especificas de cada
                     uno.</p>
                  <!-- <a href="#">Discover</a>-->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- three_box -->
   <div class="three_box">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="box_text">
                  <figure><img src="images/img1.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box_text">
                  <figure><img src="images/img2.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box_text">
                  <figure><img src="images/img3.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
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
                  <p>Venimos con nueva imagen en pro de brindar el mejor servicio como Consignataria destacada del
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