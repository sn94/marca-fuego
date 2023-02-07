<!DOCTYPE html>





<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>

   <!-- basic -->

   <meta charset="utf-8">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">



   <!-- mobile metas -->

   <meta name="viewport" content="width=device-width, initial-scale=1">

   <meta name="viewport" content="initial-scale=1, maximum-scale=1">

   <!-- site metas -->

   <link rel="icon" href="{{asset('image/logo-xs.png')}}">

   <title> {{ env('APP_NAME') }} - Negocios Agroganaderos</title>

   <meta name="keywords" content="">

   <meta name="description" content="">

   <meta name="author" content="">



   <script src="{{asset('main_web_template/js/jquery.min.js')}}"></script>
   <!--toaster-->


   <script src="{{asset('js/toast.min.js')}}"></script>


   @vite(['resources/css/animate.css' ])

   <link rel="stylesheet" href="{{asset('css/palette.css')}}">

   <!-- bootstrap css -->

   <link rel="stylesheet" href="{{asset('main_web_template/css/bootstrap.min.css')}}">

   <!-- style css -->

   <link rel="stylesheet" href="{{asset('main_web_template/css/style.css') . '?v=' . date('His')}}">

   <!-- Responsive-->

   <link rel="stylesheet" href="{{asset('main_web_template/css/responsive.css') . '?v=' . date('His')}}">

   <!-- fevicon -->

   <link rel="icon" href="{{asset('image/logo-xs.png')}}" type="image/gif" />

   <!-- Scrollbar Custom CSS -->

   <link rel="stylesheet" href="{{asset('main_web_template/css/jquery.mCustomScrollbar.min.css')}}">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <!-- Tweaks for older IEs-->

   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->



   <style>
      .product_box {

         position: relative;

         overflow: hidden;

      }



      .product_box img,

      .product_box h3 {

         transition: all 1.1s ease;

      }



      .product_box h3 {

         text-shadow: 1px 1px 3px black, 2px 2px 3px gray;

         z-index: 1
      }



      .product_box:hover img {

         transform: scale(1.2);



      }



      .product_box h3::before {

         transition: all 1.2s ease;

         position: absolute;

         content: '';

         bottom: 0px;

         right: 0;

         width: 0;

         height: 0;

         border-bottom: 0 solid white;

      }



      .product_box:hover h3 {

         position: absolute;

         bottom: 30px;

         right: 30px;

         letter-spacing: 2px;



      }



      .product_box:hover h3::before {

         width: 120%;

         height: 100%;

         background: #f4cb1e88;

         bottom: -1px;



         z-index: -1;

      }
   </style>

   <style>
      /* Element | http://127.0.0.1:8000/home */
      .whatsappFloatingTip {
         position: fixed;
         bottom: calc(10% + 100px);
         right: 5%;
         transition: all 1s ease;
         overflow: visible;
         z-index: 5;
      }


      .whatsappFloatingTip::before {
         position: absolute;
         content: '';
         top: 100%;
         right: 0;

         width: 0;
         height: 0;
         z-index: 5;
         border-right: 15px var(--primary) solid;
         border-top: 15px solid var(--primary);
         border-bottom: 15px solid transparent;
         border-left: 15px solid transparent;
         width: 30px;
         background: transparent;
      }






      .whatsappFloating:hover+.whatsappFloatingTip {
         display: block;
      }

      .whatsappFloating+.whatsappFloatingTip {
         display: none;
         overflow: visible;
      }

      .whatsappFloating i.fa-whatsapp {
         font-size: 4em;
         color: #ffffff;
      }

      /* style.css | http://127.0.0.1:8000/main_web_template/css/style.css?v=172705 */

      .whatsappFloating {
         display: block;
         padding: 15px;
         background-color: #4bc429;
         position: fixed;
         right: 5%;
         bottom: 10%;
         border-radius: 100%;
         box-shadow: 0 0 10px #226909;
         z-index: 5 !important;
      }


      @media only screen and (max-width: 600px) {

         .navbar-toggler {
            position: absolute !important;
            left: 20px;
            top: 50px !important;
         }
      }
   </style>

   <script>



   </script>

   @stack('css')

   @stack('js')

</head>

<!-- body -->



<body class="main-layout"  >

   <!-- loader  -->

   <div class="loader_bg">

      <div class="loader"><img src="{{asset('main_web_template/images/loading.gif')}}" alt="#" /></div>

   </div>

   <!-- end loader -->

   <!-- header -->

   @include('client.layouts.navbar')

   <!-- end header inner -->

   <!-- end header -->

   <!-- banner -->

   @if (session()->has('success_toast'))

   <script>
      const options = {
      settings: {
        duration: 3500,
      },

      style: {
        main: {
          background: "#f3a90a",
          color: "rgb(136, 39, 1)",
        fontSize: "max(4vw, 1em)",
     fontWeight: "bolder",
        borderRadius:"20px",
        bottom: "30vh"
      },
   }

};

setTimeout( ()=>{
   iqwerty.toast.toast('😊<?= session('success_toast') ?>',  options);
}, 2800)
    
   </script>


   @endif
   @if (session()->has('success'))

   <div class="alert alert-info" role="alert">



      @foreach (explode("\n", session('success')) as $msg )

      <h3> {{ $msg }}</h3>

      @endforeach

   </div>

   @endif





   @if (session()->has('error'))

   <div class="alert alert-danger" role="alert">

      <h3>{{ session('error')}}</h3>

   </div>

   @endif




 
 @yield('content')
  



   <!--  footer -->

   @include('client.layouts.footer')

   <!-- end footer -->

   <!-- Javascript files-->


   <script src="{{asset('main_web_template/js/popper.min.js')}}"></script>

   <script src="{{asset('main_web_template/js/bootstrap.bundle.min.js')}}"></script>

   <script src="{{asset('main_web_template/js/jquery-3.0.0.min.js')}}"></script>

   <!-- sidebar -->

   <script src="{{asset('main_web_template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

   <script src="{{asset('main_web_template/js/custom.js')}}"></script>

</body>



</html>