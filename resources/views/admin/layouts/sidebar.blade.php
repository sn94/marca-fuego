<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">{{ env('APP_NAME')}} - ADMINISTRACION DE CONTENIDO</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Opciones
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="{{route('dashboard')}}">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">PANEL</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('categorias')}}">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Categorias de lotes</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('lotes')}}">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Lotes</span>
						</a>
					</li>


                    <li class="sidebar-item">
						<a class="sidebar-link" href="{{route('contactos')}}">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Contactos desde la web</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('subscriptors')}}">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle"> Suscriptos</span>
						</a>
					</li>


 

					 

					 

				 

					 
				</ul>


				<div class="sidebar-cta  ">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">NUEVOS CONTACTOS!</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Revisar</a>
						</div>
					</div>
				</div>
			</div>
		</nav>