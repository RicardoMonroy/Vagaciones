<!DOCTYPE html>
<html lang="es">

<!-- Head -->
<head>

<title>Vagaciones</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Vagaciones">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS -->	  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" media="all">
<!-- Index-Page-CSS -->	  <link rel="stylesheet" href="{{ asset('css/style.css') }}"		  type="text/css" media="all">
<!-- Owl-Carousel-CSS --> <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"  type="text/css" media="all">
<!-- Date-Picker-CSS -->  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}"	  type="text/css" media="all">
<!-- Chocolat-CSS -->	  <link rel="stylesheet" href="{{ asset('css/chocolat.css') }}"	  type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500" type="text/css" media="all">
<!-- //Fonts -->

<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" 	 type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="{{ asset('fonts/fontawesome-webfont.ttf') }}" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->

<!-- Supportive-JavaScript -->
<script src="{{ asset('js/modernizr.js') }}"></script>
<!-- //Supportive-JavaScript -->

</head>
<!-- //Head -->



<!-- Body -->
<body>
	<!-- Header -->
	<div class="agileheader" id="hOME">

		@include('layouts.navigation')

		@include('layouts.slider')

	</div>
	<!-- //Header -->



	<!-- About -->
	<div class="About" id="About">
		<div class="container">

			<h2>Sobre Nosotros</h2>
			<h4>"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</h4>
			<div class="About-grids">
				<div class="col-md-6 About-grid About-grid-1">
					<h3>The Lorem Ipsum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">READ MORE<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
				</div>
				<div class="col-md-6 About-grid About-grid-2">
					<h3>Misión <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<h3>Visión <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<h3>Valores <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></h3>
					<p class="bottom-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="clearfix"></div>
			</div>

			<!-- Tooltip-Content -->
			<div class="tooltip-content">
				<div class="modal fade details-modal" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">The Lorem Ipsum Dolores</h4>
							</div>
							<div class="modal-body">
								<img src="images/about.jpg" alt="Odyssey">
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Tooltip-Content -->

		</div>
	</div>
	<!-- //About -->



	<!-- Details -->
	<div class="agileinfodetails" id="agileinfodetails">
		<div class="container">
            <!-- Photo by Cody Black on Unsplash -->
			<div class="col-md-12 agileinfodetails-grid agileinfodetails-heading">
				<h3>Experimenta la Libertad</h3>
			</div>
			<div class="col-md-12 agileinfodetails-grid agileinfodetails-paragraph">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //Details -->



	<!-- Locations -->
	<div class="Locations" id="Locations">
		<div class="container">
			<h3>Donde Vagar</h3>
			<section class="grid3d vertical" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
						<figure class="col-md-4 effect-zoe"><img src="images/location-1.jpg" alt="Odyssey"><figcaption><h4>CANCÚN</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/location-2.jpg" alt="Odyssey"><figcaption><h4>GUANAJUATO</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/location-3.jpg" alt="Odyssey"><figcaption><h4>MORELIA</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/location-4.jpg" alt="Odyssey"><figcaption><h4>CDMX</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/location-5.jpg" alt="Odyssey"><figcaption><h4>RIVIERA MAYA</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/location-6.jpg" alt="Odyssey"><figcaption><h4>VALLARTA</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/location-7.jpg" alt="Odyssey"><figcaption><h4>SAN LUIS POTOSÍ</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/location-8.jpg" alt="Odyssey"><figcaption><h4>QUERÉTARO</h4></figcaption></figure>
                        <figure class="col-md-4 effect-zoe"><img src="images/location-9.jpg" alt="Odyssey"><figcaption><h4>IXTAPA</h4></figcaption></figure>
                        <figure class="col-md-4 effect-zoe"><img src="images/location-10.jpg" alt="Odyssey"><figcaption><h4>HUATULCO</h4></figcaption></figure>
                        <figure class="col-md-4 effect-zoe"><img src="images/location-11.jpg" alt="Odyssey"><figcaption><h4>MÉRIDA</h4></figcaption></figure>
                        <figure class="col-md-4 effect-zoe"><img src="images/location-12.jpg" alt="Odyssey"><figcaption><h4>PUEBLA</h4></figcaption></figure>
					</div>
				</div>
				<div class="content">
					<div>
						<div class="dummy-img dummy-img-1"><img src="images/location-1.jpg" alt="Photo by Conor Luddy on Unsplash"></div>
						<p class="dummy-text aitsheadingw3">CANCÚN</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-2"><img src="images/location-2.jpg" alt="Photo by Dennis Schrader on Unsplash"></div>
						<p class="dummy-text aitsheadingw3">GUANAJUATO</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-3"><img src="images/location-3.jpg" alt="Photo by Jezael Melgoza on Unsplash"></div>
						<p class="dummy-text aitsheadingw3">MORELIA</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-4"><img src="images/location-4.jpg" alt="Photo by Jezael Melgoza on Unsplash"></div>
						<p class="dummy-text aitsheadingw3">CDMX</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-5"><img src="images/location-5.jpg" alt="Photo by Marv Watson on Unsplash"></div>
						<p class="dummy-text aitsheadingw3">RIVIERA MAYA</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-6"><img src="images/location-6.jpg" alt="Photo by Alonso Reyes on Unsplash"></div>
						<p class="dummy-text aitsheadingw3">VALLARTA</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-7"><img src="images/location-7.jpg" alt="Imagen de JoseLuisOrtega en Pixabay"></div>
						<p class="dummy-text aitsheadingw3">SAN LUIS POTOSÍ</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-8"><img src="images/location-8.jpg" alt="Imagen de Agustín Barrios en Pixabay"></div>
						<p class="dummy-text aitsheadingw3">QUERÉTARO</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-9"><img src="images/location-9.jpg" alt="Imagen de Miguel González en Pixabay"></div>
						<p class="dummy-text aitsheadingw3">IXTAPA</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div>
						<div class="dummy-img dummy-img-10"><img src="images/location-10.jpg" alt="Imagen de Jesús Marco Galindo en Pixabay"></div>
						<p class="dummy-text aitsheadingw3">HUATULCO</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div>
						<div class="dummy-img dummy-img-11"><img src="images/location-11.jpg" alt="Imagen de Peter H en Pixabay"></div>
						<p class="dummy-text aitsheadingw3">MÉRIDA</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div>
						<div class="dummy-img dummy-img-12"><img src="images/location-12.jpg" alt="Photo by Pedro Lastra on Unsplash"></div>
						<p class="dummy-text aitsheadingw3">PUEBLA</p>
						<p class="dummy-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<span class="loading"></span>
					<span class="icon close-content"><i class="fa fa-times" aria-hidden="true"></i></span>
				</div>
			</section>
		</div>
	</div>
	<!-- //Locations -->



	<!-- Packages -->
	<div class="Paquetes" id="Paquetes">
		<div class="container">

			<h3>Paquetes</h3>

			<div id="owl-demo" class="owl-carousel text-center">
				<div class="item w3-agile">
					<div class="agilegrid agilegrid1">
						<img src="images/package-1.jpg" alt="Odyssey">
						<h4>Paquete 1</h4>
						<h5>$1300</h5>
						<ul>
							<li>5 Personas</li>
							<li>9 Días, 8 Noches</li>
							<li>Vehículo incluido</li>
							<li>Car, SUV, Bus, RV</li>
						</ul>
						<div class="sign w3-agile text-center">
							<a class="popup-with-zoom-anim" href="#small-dialog">Comprar</a>
						</div>
					</div>
				</div>
				<div class="item w3-agile">
					<div class="agilegrid agilegrid2">
						<img src="images/package-2.jpg" alt="Odyssey">
						<h4>Paquete 2</h4>
						<h5>$900</h5>
						<ul>
							<li>2 Personas</li>
							<li>5 Días, 4 Noches</li>
							<li>Backpacking & Rock Climbing</li>
							<li>Seguridad a todo momento</li>
						</ul>
						<div class="sign w3-agile text-center">
							<a class="popup-with-zoom-anim" href="#small-dialog">Comprar</a>
						</div>
					</div>
				</div>
				<div class="item w3-agile">
					<div class="agilegrid agilegrid3">
						<img src="images/package-3.jpg" alt="Odyssey">
						<h4>Paquete 3</h4>
						<h5>$1000</h5>
						<ul>
							<li>2 Personas</li>
							<li>4 Días, 4 Noches</li>
							<li>Trekking & Skiing</li>
							<li>Desayuno y comida</li>
						</ul>
						<div class="sign w3-agile text-center">
							<a class="popup-with-zoom-anim" href="#small-dialog">Comprar</a>
						</div>
					</div>
				</div>
				<div class="item w3-agile">
					<div class="agilegrid agilegrid4">
						<img src="images/package-4.jpg" alt="Odyssey">
						<h4>Paquete 4</h4>
						<h5>$2500</h5>
						<ul>
							<li>9 Personas</li>
							<li>28 Días, 29 Noches</li>
							<li>Casinos, Espectáculos</li>
							<li>Hotel de lujo</li>
						</ul>
						<div class="sign w3-agile text-center">
							<a class="popup-with-zoom-anim" href="#small-dialog">Comprar</a>
						</div>
					</div>
				</div>
				<div class="item w3-agile">
					<div class="agilegrid agilegrid5">
						<img src="images/package-5.jpg" alt="Odyssey">
						<h4>Paquete 5</h4>
						<h5>$2900</h5>
						<ul>
							<li>9 Cersonas</li>
							<li>18 Días, 17 Noches</li>
							<li>Surfing, Jet ski, Hang Gliding</li>
							<li>Hotel Gran Turismo</li>
						</ul>
						<div class="sign w3-agile text-center">
							<a class="popup-with-zoom-anim" href="#small-dialog">Comprar</a>
						</div>
					</div>
				</div>
				<div class="item w3-agile">
					<div class="agilegrid agilegrid6">
						<img src="images/package-6.jpg" alt="Odyssey">
						<h4>Paquete 6</h4>
						<h5>$3500</h5>
						<ul>
							<li>7 Personas</li>
							<li>25 Días, 26 Noches</li>
							<li>Ciudad, Montañas</li>
							<li>Hotel 5 estrellas</li>
						</ul>
						<div class="sign w3-agile text-center">
							<a class="popup-with-zoom-anim" href="#small-dialog">Comprar</a>
						</div>
					</div>
				</div>
				<div class="item w3-agile">
					<div class="agilegrid agilegrid7">
						<img src="images/package-7.jpg" alt="Odyssey">
						<h4>Paquete 7</h4>
						<h5>$1500</h5>
						<ul>
							<li>2 Personas</li>
							<li>5 Días, 6 Noches</li>
							<li>Santuarios</li>
							<li>Tiendas de campaña</li>
						</ul>
						<div class="sign w3-agile text-center">
							<a class="popup-with-zoom-anim" href="#small-dialog">Comprar</a>
						</div>
					</div>
				</div>
				<div class="item w3-agile">
					<div class="agilegrid agilegrid8">
						<img src="images/package-8.jpg" alt="Odyssey">
						<h4>Paquete 8</h4>
						<h5>€2500</h5>
						<ul>
							<li>3 Cersonas</li>
							<li>9 Días, 9 Noches</li>
							<li>Mntañas, bosques, lagos</li>
							<li>Hospedaje en cabañas</li>
						</ul>
						<div class="sign w3-agile text-center">
							<a class="popup-with-zoom-anim" href="#small-dialog">Comprar</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Popup-Box -->
			<div id="popup">
				<div id="small-dialog" class="mfp-hide agileinfo">
					<div class="pop_up">
						<div class="payment-online-form-left w3-agileits">
							<form action="#" method="post">
								<h4><span class="shipping agileits-w3layouts"></span>Detalles de compra</h4>
								<ul>
									<li><input class="text-box-dark agileits-w3layouts" type="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></li>
									<li><input class="text-box-dark agileits" type="text" value="Apellido" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
								</ul>
								<ul>
									<li><input class="text-box-dark agile" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
									<li><input class="text-box-dark" type="text" value="Teléfono" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
								</ul>
								<div class="clear"></div>
								<h4 class="paymenthead"><span class="payment"></span>Método de pago</h4>
								<div class="clear"></div>
								<ul class="payment-type">
									<li><span class="col_checkbox agileits-w3layouts">
											<input id="3" class="css-checkbox1" type="checkbox">
											<label for="3" class="css-label1"></label>
											<a class="visa agileits-w3layouts" href="#"></a>
										</span>
									</li>
									<li>
										<span class="col_checkbox">
											<input id="4" class="css-checkbox2" type="checkbox">
											<label for="4" class="css-label2"></label>
											<a class="paypal w3-agileits" href="#"></a>
										</span>
									</li>
								</ul>
								<ul>
									<li><input class="text-box-dark" type="text" value="Número de tarjeta" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
									<li><input class="text-box-dark w3layouts" type="text" value="Alias de Tarjeta" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
								</ul>
								<ul>
									<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Fecha de expiración" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
									<li><input class="text-box-dark agileits-w3layouts" type="text" value="CVV" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'CVV';}"></li>
								</ul>
								<ul class="payment-sendbtns">
									<li><input type="reset" value="Reset"></li>
									<li><input type="submit" name="Procesar Pago" value="Process Order"></li>
								</ul>
								<div class="clear agile"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<button title="Close (Esc)" type="button" class="mfp-close w3-agileits">×</button>
			<!-- //Popup-Box -->

		</div>
	</div>
	<!-- //Packages -->



	<!-- Portfolio -->
	<div class="Portafolio" id="Portafolio">
		<h3>Galería</h3>

		<div class="Portafolio-items">
			<div class="col-md-3 Portafolio-item Portafolio-item-1">
				<a class="example-image-link" href="images/portfolio-1.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-1.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-2">
				<a class="example-image-link" href="images/portfolio-2.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-2.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-3">
				<a class="example-image-link" href="images/portfolio-3.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-3.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-4">
				<a class="example-image-link" href="images/portfolio-4.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-4.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-5">
				<a class="example-image-link" href="images/portfolio-5.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-5.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-6">
				<a class="example-image-link" href="images/portfolio-6.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-6.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-7">
				<a class="example-image-link" href="images/portfolio-7.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-7.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-8">
				<a class="example-image-link" href="images/portfolio-8.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-8.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-9">
				<a class="example-image-link" href="images/portfolio-9.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-9.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-9">
				<a class="example-image-link" href="images/portfolio-10.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-10.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-9">
				<a class="example-image-link" href="images/portfolio-11.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-11.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="col-md-3 Portafolio-item Portafolio-item-9">
				<a class="example-image-link" href="images/portfolio-12.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/portfolio-12.jpg" alt="Game Robo">
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
	<!-- //Portfolio -->



	<!-- Reviews -->
	<div class="Reviews" id="Reviews">
		<main>
			<div class="cd-image-block">
				<ul class="cd-images-list">
					<li class="is-selected agiletravelerw3ls agiletravelerw3ls1">
                        <!-- Photo by James Connolly on Unsplash -->
						<a href="#0">
							<h3>¡La he pasado en grande!</h3>
							<img src="images/opinion-1.jpg" alt="Odyssey">
							<h4>Iván Murillo</h4>
							<p>Pues comencé todo meco y desconfiado pero luego de comprar con este compa todo salió chido y medio se me quitó lo puñetas.</p>
							<div class="wthreeratingaits">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
						</a>
					</li>

					<li class="agiletravelerw3ls agiletravelerw3ls2">
						<a href="#0">
							<h3>I don't want to go home...</h3>
							<img src="images/opinion-2.jpg" alt="Odyssey">
							<h4>Darth Vader</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="wthreeratingaits">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
								</ul>
							</div>
						</a>
					</li>

					<li class="agiletravelerw3ls agiletravelerw3ls3">
						<a href="#0">
							<h3>Most amazing moments!</h3>
							<img src="images/opinion-3.jpg" alt="Odyssey">
							<h4>James Kirk</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="wthreeratingaits">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
						</a>
					</li>

					<li class="agiletravelerw3ls agiletravelerw3ls4">
						<a href="#0">
							<h3>Unforgettable experience!</h3>
							<img src="images/opinion-4.jpg" alt="Odyssey">
							<h4>Ellen Ripley</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="wthreeratingaits">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
			</div>

			<div class="cd-content-block">
				<ul>
					<li class="is-selected wthreeli wthreeli-1"></li>

					<li class="wthreeli wthreeli-2"></li>

					<li class="wthreeli wthreeli-3"></li>

					<li class="wthreeli wthreeli-4"></li>
				</ul>

				<button class="cd-close">Close</button>
			</div>

			<ul class="block-navigation">
				<li><button class="cd-prev inactive">&larr; Prev</button></li>
				<li><button class="cd-next">Next &rarr;</button></li>
			</ul>
		</main>
	</div>
	<!-- //Reviews -->



    <!-- Contact -->
    <!-- Photo by Mohamed Nohassi on Unsplash -->
	<div class="Contact" id="Contact">
		<div class="container">
			<h3>Contacto</h3>
			<form action="#" method="post">
				<div class="col-md-6 Contact-grid Contact-grid-1">
					<input type="text" Name="First Name" placeholder="FIRST NAME" required="">
					<input type="text" Name="Last Name" placeholder="LAST NAME" required="">
					<input type="email" Name="Email" placeholder="EMAIL" required="">
				</div>
				<div class="col-md-6 Contact-grid Contact-grid-2">
					<textarea name="Message" placeholder="MESSAGE" required=""></textarea>
					<div class="send-button">
						<input type="submit" value="SEND">
					</div>
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
	<!-- //Contact -->



	<!-- Map -->
		<!-- <div id="map"></div> -->
	<!-- //Map -->



	<!-- Social-Icons -->
	<div class="agilesocialwthree">
		<ul class="social-icons">
			<li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
			<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
			<li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
			<li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
			<li><a href="#" class="pinterest w3layouts" title="Go to Our Pinterest Account"><i class="fa w3layouts fa-pinterest-square" aria-hidden="true"></i></a></li>
			<li><a href="#" class="tumblr w3layouts" title="Go to Our Tumblr Account"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<!-- //Social-Icons -->



	<!-- Footer -->
	<div class="agilefooterwthree" id="agilefooterwthree">
		<div class="container">

			<div class="agilefooterwthree-grids">
				<div class="col-md-4 agilefooterwthree-grid agilefooterwthree-grid1">
					<h4>LINKS</h4>
					<ul>
						<li><a class="scroll" href="#hOME">HOME</a></li>
						<li><a class="scroll" href="#About"><span>NOSOTROS</span></a></li>
						<li><a class="scroll" href="#Locations"><span>LUGARES</span></a></li>
						<li><a class="scroll" href="#Paquetes"><span>PAQUETES</span></a></li>
						<li><a class="scroll" href="#Portafolio"><span>PORTAFOLIO</span></a></li>
                        <li><a class="scroll" href="#Reviews"><span>REVIEWS</span></a></li>
                        <li><a class="" href="{{ route('home') }}"><span>DASHBOARD</span></a></li>
					</ul>
				</div>
				<div class="col-md-4 agilefooterwthree-grid agilefooterwthree-grid2">
					<h4>DIRECCIÓN</h4>
					<address>
						<ul>
							<li>Av. Siempreviva</li>
							<li># 742</li>
							<li>Colonia</li>
							<li>Qro, México</li>
							<li>+1 (442) 123-4567</li>
							<li><a class="mail" href="#">info@example.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-4 agilefooterwthree-grid agilefooterwthree-grid3 newsletter">
					<h4>INSCRIBIRSE</h4>
					<p>Inscribirse a nuesto Newsletter</p>
					<form action="#" method="post">
						<input class="email aitsw3ls" type="email" placeholder="Your Email" required="">
						<input type="submit" class="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>

	</div>
	<!-- //Footer -->



	<!-- Copyright -->
	<div class="copyright">
		<p>© 2019 Vagaciones. Todos los derechos reservados | Programado por <a href="#" target="=_blank"> Ricardo Monroy </a></p>
	</div>
	<!-- //Copyright -->



	<!-- Custom-JavaScript-File-Links -->

	<!-- Default-JavaScript -->   <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<!-- Bootstrap-JavaScript --> <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

<!-- Responsive-Slider-JavaScript -->
			<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
			<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						nav: true,
						speed: 2000,
						namespace: "callbacks",
						pager: true,
					});
				});
			</script>
		<!-- //Responsive-Slider-JavaScript -->


		<!-- Review-Slider-JavaScript -->
			<script src="{{ asset('js/main.js') }}"></script>
		<!-- //Review-Slider-JavaScript -->

		<!-- Tour-Locations-JavaScript -->
			<script src="{{ asset('js/classie.js') }}"></script>
			<script src="{{ asset('js/helper.js') }}"></script>
			<script src="{{ asset('js/grid3d.js') }}"></script>
			<script>
				new grid3D( document.getElementById( 'grid3d' ) );
			</script>
		<!-- //Tour-Locations-JavaScript -->

		<!-- Owl-Carousel-JavaScript -->
			<script src="{{ asset('js/owl.carousel.js') }}"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo, #owl-demo1, #owl-demo2, #owl-demo3, #owl-demo4").owlCarousel({
						autoPlay: 4000,
						items : 3,
						itemsDesktop : [568,2],
						itemsDesktopSmall : [414,1]
					});
				});
			</script>
		<!-- //Owl-Carousel-JavaScript -->

		<!-- Pricing-Popup-Box-JavaScript -->
			<script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
		<!-- //Pricing-Popup-Box-JavaScript -->

		<!-- Date-Picker-JavaScript -->
			<script src="{{ asset('js/jquery-ui.js') }}"></script>
			<script>
				$(function() {
					$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
				});
			</script>
		<!-- //Date-Picker-JavaScript -->

		<!-- Portfolio-Popup-Box-JavaScript -->
			<script src="{{ asset('js/jquery.chocolat.js') }}"></script>
			<script type="text/javascript">
				$(function() {
					$('.Portafolio-item a').Chocolat();
				});
			</script>
		<!-- //Portfolio-Popup-Box-JavaScript -->

		<!-- Map-JavaScript -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(43.73333, 7.41667),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(43.73333, 7.41667),
						map: map,
					});
				}
			</script>
		<!-- //Map-JavaScript -->

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

		<!-- Slide-To-Top JavaScript -->
			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop',
						containerHoverID: 'toTopHover',
						scrollSpeed: 100,
						easingType: 'linear',
					};
				});
			</script>
			<a href="#hOME" id="toTop" class="stuoyal3w scroll stieliga" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->

</body>
<!-- //Body -->
</html>


{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            @can('products.index')
                            <li>
                                <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                            </li>
                            @endcan
                            @can('users.index')
                            <li>
                                <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                            </li>
                            @endcan
                            @can('roles.index')
                            <li>
                                <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                            @endcan

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
