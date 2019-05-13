<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="/inicio" class="site-logo">
					<img src="{{asset('JMAimagen.jpeg')}}" alt="" width="150px" height="50px">
				</a>
	<nav class="top-nav-area w-100">
		<div class="user-panel">
						<a href="">Login</a> / <a href="">Register</a>
		</div>
					<!-- Menu -->
		<ul class="main-menu primary-menu">
			<li><a href="/inicio">Inicio</a></li>
			<li><a href="/info">Información</a></li>
			<li><a href="{{route('obras.index')}}">Obras</a></li>
			<li><a href="/contacto">Contactanos</a></li>
			<li><a href="{{route('materiales.index')}}">Materiales</a></li>
		</ul>
	</nav>
</div>