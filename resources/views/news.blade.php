@extends('layout')
@section('titulo', 'Noticias')
@section('content')
	
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>INFORMACIÓN ORGÁNICA</p>
						<h1>NOTICIAS</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<img src="https://transmarket.pe/wp-content/uploads/2020/05/galleta-oreo-chocolate.png" alt="" >
						<div class="news-text-box">
							<h3><a href="single-news">Galleta de Chocolate con Crema Oreo</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Nabisco</span>
								<span class="date"><i class="fas fa-calendar"></i> 6 de marzo de 1912</span>
							</p>
							<p class="excerpt">Estas galletas consisten en dos galletas circulares de chocolate con un relleno dulce blanco (normalmente denominado "crema", aunque técnicamente no lo es) aplastado entre estas.</p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
							<img src="https://sommelier.com.pe/wp-content/uploads/abrid_Sublime-Cla%CC%81sico.jpg" alt="" >
						<div class="news-text-box">
							<h3><a href="single-news">Chocolate Sublime.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Nestlé</span>
								<span class="date"><i class="fas fa-calendar"></i> 18 de enero de 2008</span>
							</p>
							<p class="excerpt">Las barras de chocolate Sublime son un favorito peruano hecho con chocolate dulce con leche y cacahuetes peruanos.</p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<img src="https://cdn.milenio.com/uploads/media/2020/09/29/te-gusta-este-refresco-shutterstock.jpg" alt="" >
						<div class="news-text-box">
							<h3><a href="single-news">Coca-Cola es una bebida azucarada gaseosa vendida a nivel mundial en tiendas</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> The Coca-Cola Company</span>
								<span class="date"><i class="fas fa-calendar"></i> 8 de mayo de 1886</span>
							</p>
							<p class="excerpt">La marca Coca-Cola tiene algunos atributos que siempre la han identificado: el color rojo, un logotipo que apenas ha variado desde 1886, su icónica botella contour con más de un siglo de historia</p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<img src="https://www.suavemashigiene.com/-/media/project/site/promo/promo-home-suave-mob.png?h=376&w=414&la=es-PE&hash=9BFD295989F3A098634E25FB6588C2D6" alt="" >
						<div class="news-text-box">
							<h3><a href="single-news">Quieres cuidar a tu familia? Es momento de probar Papel Higiénico Suave</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Kimberly Clark </span>
								<span class="date"><i class="fas fa-calendar"></i>  Tuvo sus inicios en 1870</span>
							</p>
							<p class="excerpt">Suave®, es una de las marcas más reconocidas en el Perú, y en otros países es conocida como Scott®. Tuvo sus inicios en 1870 y desde entonces, hemos sido el papel higiénico favorito de muchas familias. Los hogares de Latinoamérica usan millones de kilómetros de nuestras marcas cada año.</p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<img src="https://mir-s3-cdn-cf.behance.net/projects/404/0bb266152179629.Y3JvcCw3MjcsNTY5LDM5LDMw.png" alt="" >
						<div class="news-text-box">
							<h3><a href="single-news">Tus helados de toda la vida, ¡ahora más cerca de ti!</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> D'Onofrio</span>
								<span class="date"><i class="fas fa-calendar"></i> Fundado en 1924</span>
							</p>
							<p class="excerpt">D'Onofrio es una marca y empresa peruana fundada por el italiano Pedro D'Onofrio que está ligada a la venta de helados así como de panetón, chocolates y golosinas. D'Onofrio tiene una trayectoria muy larga en Perú. Actualmente, pertenece a Nestlé.</p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<img src="https://brief.pe/wp-content/uploads/2020/10/logo-bimbo.jpg" alt="" >
						<div class="news-text-box">
							<h3>Con el cariño de Siempre</h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> BIMBO</span>
								<span class="date"><i class="fas fa-calendar"></i> 2 de Diciembre de 1945</span>
							</p>
							<p class="excerpt">Grupo BIMBO fue fundado en la Ciudad de México en 1945 y hoy en día se cuenta entre las empresas de panificación más importantes del mundo, por su volumen de producción, ventas y posicionamiento de marca.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a class="active" href="about">Prev</a></li>
									<li><a href="#">1</a></li>
									<li><a class="active" href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

@endsection