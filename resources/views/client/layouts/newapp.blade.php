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



   <script src="{{asset('js/toast.min.js')}}"></script>


   @vite(['resources/css/animate.css', 'resources/css/bootstrapcss.css' , 'resources/js/bootstrapcss.js' ])

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('css/palette.css')}}">
   <link rel="stylesheet" href="{{asset('css/montserrat.css') . '?v' . date('His')}}">

   <link rel="icon" href="{{asset('image/logo-xs.png')}}" type="image/gif" />



   @stack('css')

   @stack('js')

</head>

<!-- body -->



<body class="m-0 p-0">



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
               borderRadius: "20px",
               bottom: "30vh"
            },
         }

      };

      setTimeout(() => {
         iqwerty.toast.toast('😊<?= session('success_toast') ?>', options);
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



   <script src="{{asset('main_web_template/js/jquery-3.0.0.min.js')}}"></script>



</body>



</html>