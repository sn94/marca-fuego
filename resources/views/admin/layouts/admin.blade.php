<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('image/logo-xs.png')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title> {{env('APP_NAME')}}</title>

	<link href="{{asset('template/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('main_web_template/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	@stack('css')
	

	<script src="{{asset('template/js/app.js')}}"></script>

	@vite([ 'resources/js/app.js'])

	

    @livewireStyles
</head>

<body>
	<div class="wrapper">
	@include('admin.layouts.sidebar')

		<div class="main">
			@include('admin.layouts.navbar')

			<main class="content">



				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						@foreach (request()->segments() as $segmento)

						@if (Route::has($segmento))
						<li class="breadcrumb-item fs-3 fw-bold  {{ $loop->last ? 'active' : '' }}"><a href="{{route($segmento)}}">

								{{ __(ucfirst($segmento)) }}
							</a></li>

						@else
						<li class="breadcrumb-item fs-3 fw-bold {{ $loop->last ? 'active' : '' }}"><a href="#"> 
							{{ __(ucfirst($segmento)) }} </a></li>

						@endif

						@endforeach
					</ol>
				</nav>




				@if (session()->has('success'))
				<div class="alert alert-info" role="alert">

					@foreach (explode("\n", session('success')) as $msg )
					<h4> {{ $msg }}</h4>
					@endforeach
				</div>
				@endif


				@if (session()->has('error'))
				<div class="alert alert-danger" role="alert">
					<h4>{{ session('error')}}</h4>
				</div>
				@endif

				@yield('content')
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Administrador web</strong></a> &copy;
							</p>
						</div>
						<!--
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
-->
					</div>
				</div>
			</footer>
		</div>
	</div>



	<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



	@stack('js')
	@livewireScripts
</body>

</html>