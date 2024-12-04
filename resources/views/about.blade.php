@extends('layout')
@section('titulo', 'Sobre Nosotros')
@section('content')
	

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Somos un minimarket</p>
						<h1>Sobre nosotros</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">¿Por qué <span class="orange-text">El Chavez?</span></h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-shipping-fast"></i>
									</div>
									<div class="content">
										<h3>Entrega a Domicilio</h3>
										<p>Hoy más que nunca debemos estar en casa; por eso, nosotros te llevamos tus productos con todos los cuidados necesarios. Disfrútala sin preocupaciones gracias a nuestros servicios de entrega a Domicilio.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-money-bill-alt"></i>
									</div>
									<div class="content">
										<h3>Mejor precio</h3>
										<p>¿Pensando en hacer compras? Ahorra dinero y tiempo al comparar los precios de los mejores productos en un solo lugar.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-briefcase"></i>
									</div>
									<div class="content">
										<h3>Compra con seguridad</h3>
										<p>Compras en línea protegidas con Visa. Seguridad avanzada para ayudarte a comprar en línea con confianza y tranquilidad.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-sync-alt"></i>
									</div>
									<div class="content">
										<h3>Reembolso</h3>
										<p>Los reembolsos serán procesados en cualquier momento durante las cuatro semanas siguientes a la cancelación del pedido; los tiempos de devolución pueden variar en función de la entidad bancaria emisora de la tarjeta de pago del usuario.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end featured section -->

		<!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub">Desde 2021</p>
                        <h2>Nosotros somos <span class="orange-text">El Chavez</span></h2>
                        <p>Tenemos el mayor almacén de productos, por ello, es la opción más completa para que puedas
                            realizar tus compras en un solo lugar. Cada día incorporamos nuevas marcas y productos para que
                            no tengas que perder ni un minuto buscando todo lo que puedes necesitar.</p>
                        <p>Llevamos un pedacito de Perú a tu casa con solo un clic. Actualmente, contamos con más de 500
                            diferentes productos disponibles referidos a alimentación, bebidas, golosinas y
                            superalimentos. Optimizamos nuestros procesos para darte el mejor producto y servicio con total
                            garantía.</p>
                        <a href="about" class="boxed-btn mt-4">Saber más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->

	<!-- team section -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Nuestro <span class="orange-text">Equipo</span></h3>
						<p>En nuestro minimarket El Chavez, nuestro grupo de colaboradores es organizado y disciplinado para ofrecer tanto la mejor atención a los clientes como también los mejores servicios.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<img src="{{asset('assets/img/avaters/angel.jpg')}}" class="team-bg">
						<h4>Angel de la Cruz <span>Administrador de base de datos</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<img src="{{asset('assets/img/avaters/Max.png')}}" class="team-bg">
						<h4>Victor Castro <span>Diseñador Web</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-team-item">
						<img src="{{asset('assets/img/avaters/Ayrton.PNG')}}" class="team-bg">
						<h4>Ayrton Molina<span>Musico</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<img src="{{asset('assets/img/avaters/Aldo.JPG')}}" class="team-bg">
						<h4>Aldo Canales<span>Secretario General</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<img src="{{asset('assets/img/avaters/Alejandro.png')}}" class="team-bg">
						<h4>Alejandro Huaman <span>Administrador de empresa</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<img src="{{asset('assets/img/avaters/Marcelo.jpg')}}" class="team-bg">
						<h4>Marcelo Mendez <span>Programador Tecnológico</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
					<img src="{{asset('assets/img/avaters/Chavez.png')}}" class="team-bg">
						<h4>Adrian Chavez <span>Diseñador web y Seguridad Informatica</span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end team section -->

		<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/angel.jpg')}}" alt="">
							</div>
							<div class="client-meta">

							

								<h3>Angel De la Cruz <span>Administrador de base de datos</span></h3>
								<p class="testimonial-body">
									" Desde pequeño me ha gustado el orden, y ahora como parte de la empresa voy a dar todo mi esfuerzo para lograr ese orden que tanto busco en esta empresa usando mis conocimientos extensos y bastos sobre base de datos"
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/Chavez.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Adrian Chavez <span>Propietario general de la empresa</span></h3>

								<p class="testimonial-body">
									" Cuando empecé con este proyecto años atras, no sabía todas las difilcultades con las que tendría que pasar. Ahora cuento con un equipo altamente capacitado y están en un ambiente agradable trabajando juntos. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>

						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/Max.png')}}" alt="">
							</div>
							<div class="client-meta">
						

								<h3>Victor Maximo <span>Diseñador Web</span></h3>

								<p class="testimonial-body">
									" Al momento de entrar no tenía mucha confianza con el demás equipo, pero como diseñador web tenía que demostrar que puedo esforzarme lo mismo e incluso más que los demás y eso mantiene mi confianza conmigo y con los demás. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/Aldo.jpg')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Aldo Canales <span>Secretario General</span></h3>
								<p class="testimonial-body">
									" Por causa de la pandemia perdí mi trabajo anterior en el cuál no me sentía tan a gusto, e inluso puedo decir que era una sensación desagradable. Ahora trabajo en armonía aún sabiendo que muchos temas importantes están a mi responsabilidad. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/Ayrton.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Ayrton Molina <span>Jefe de distribución</span></h3>
								<p class="testimonial-body">
									" En esta época de digitalización es demasiado común hacer compras en línea, y como distribuidor reconozco que algunas veces puede ser frustrante que una empresa no posea un equipo de distribución. Pero ahora no se preocupen, ya estoy aquí. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>

						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/Alejandro.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Alejandro Huamán <span>Administrador de Empresa</span></h3>
								<p class="testimonial-body">
									" Antes pensaba que como administrador solo debía dedicarme a mi deber; pero ver que todos, sabiendo lo mínimo, buscan apoyarme; me ha incentivado a aprender más y más por ellos. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>

						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/Marcelo.jpg')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Marcelo Mendez <span>Programador tecnológico</span></h3>
								<p class="testimonial-body">
									" Soy el más joven de todos, pero eso no ha impedido que hayamos logrado un vínculo laboral estable y responsable. Siento que como programador de esta empresa puedo lograr muchas cosas en el presente y en el futuro. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<!-- testimonail-section -->
<!--	<div class="testimonail-section mt-80 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/avatar1.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Angel de la Cruz Robles<span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Descripcion "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/avatar2.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Alejandro Huaman <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Descripcion "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/avatar3.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Aldo Canales Quevedo <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Descripcion "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/avatar3.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Marcelo Mendez Cavero<span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Descripcion "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/avatar3.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Ayrton Aaron Molina<span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Descripcion "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avaters/avatar3.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Victor Castro<span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Descripcion "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- end testimonail-section --> 

@endsection