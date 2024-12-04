@extends('layout')
@section('titulo', 'Contactos')
@section('content')
	
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Atención 24/7</p>
						<h1>Contáctanos</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>¿Tienes alguna pregunta?</h2>
						<p>Si tiene alguna consulta o queja nos lo puede hacer saber a través de este pequeño cuestionario.</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Nombre" name="name" id="name">
								<input type="email" placeholder="Correo" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Celular" name="phone" id="phone">
								<input type="text" placeholder="Asunto" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Enviar"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Dirección</h4>
							<p>Av. Emancipación 703 <br> Lima, Lima. <br> Perú</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Horario de Atención</h4>
							<p>LUN - VIE: 8 a 9 PM <br> SAB - DOM: 10 a 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contacto</h4>
							<p>Celular: +51 111 222 3333 <br> Email: contacto@ElChavez.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

@endsection