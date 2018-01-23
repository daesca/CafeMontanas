<!-- <?php
	defined ('_JEXEC') or die ('resticted access');
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cafe entre montañas</title>
	<link rel="stylesheet" href="css/ed-grid.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/tools.css">
	<link href="https://file.myfontastic.com/wH6g93ZKMC8bRtvPn6F25Z/icons.css" rel="stylesheet">
</head>
<body>
	<div class="main-menu ed-container full">
		<nav class="ed-item s-100">
			<ul>
				<li><a href="#" data-dir="banner-section">HOME</a></li>
				<li><a href="#" data-dir="wwa-section">QUIENES SOMOS</a></li>
				<li><a href="#" data-dir="plans-section">PLANES</a></li>
				<li><a href="#" data-dir=""><img src="img/cafemontanamenu.png" alt=""></a></li>
				<li><a href="#" data-dir="attractions-section">ATRACCIONES</a></li>
				<li><a href="#" data-dir="blogs-section">BLOG</a></li>
				<li><a href="#" data-dir="">CONTACTO</a></li>
			</ul>
		</nav>
	</div>
	<div class="banner-section ed-container full">
		<div class="register-box ed-item s-100 l-25 ed-container">
			<div class="ed-item s-100 flex flex-v-center flex-h-center">	
				<h2 class="text-center text-green-title">RESERVA AHORA</h2>
			</div>	
			<form action="" class=" ed-item s-100 ed-container">
				<div class="ed-item s-100">			
					<label for="user">Nombre</label>
					<input class="full-width" type="text" name="user">
				</div>
				<div class="ed-item s-100">	
					<label for="mail">Correo electrónico</label>
					<input class="full-width" type="email" name="mail">
				</div>
				<div class="ed-item s-100 l-50">
					<label for="date">FECHA</label>
					<select name="date" id="">
						<option value="">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="ed-item s-100 l-50">
					<label for="people">PERSONAS</label>
					<select name="people" id="">
						<option value="">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="ed-item s-100 l-50">
					<label for="oldpeople">ADULTOS</label>
					<select name="oldpeople" id="">
						<option value="">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="ed-item s-100 l-50">
	
					<label for="boys">NIÑOS</label>
					<select name="boys" id="">
						<option value="">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="ed-item s-100 l-50">	
					<label for="plan">PLAN</label>
					<select name="plan" id="">
						<option value="">plan1</option>
						<option value="">plan2</option>
					</select>
				</div>
			<div class="ed-item s-100 text-center">	
				<button class="text-white backg-green">ENVIAR</button>
			</div>
			</form>
		</div>
		<div class="banner-message ed-item s-100 l-40">
			<h3>Deja que tus manos se entrelacen con la naturaleza.</h3>
			<span>Te esperamos</span>
		</div>
		<div class="banner-section__social ed-item s-5 no-padding">
			<ul>
				<li><a href="" class="backg-green"><i class="icon-facebook flex flex-v-center"></i></a></li>
				<li><a href="" class="backg-green"><i class="icon-twitter-alt flex flex-v-center"></i></a></li>
				<li><a href="" class="backg-green"><i class="icon-instagram flex flex-v-center"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="wwa-section ed-container flex-h-center">
		<div class="ed-item s-100">
			<h2 class="cvp text-green-title text-center">QUIENES SOMOS</h2>
		</div>
		<div class="ed-item s-100 no-padding">
			<div class="container-tabs">
				<button id="defaultOpen" class="wwa-section__tabs" onclick="openCity(event, 'we')">Nosotros</a>
				<button class="wwa-section__tabs" onclick="openCity(event, 'salamina')">Salamina</a>
			</div>

		</div>

		<div id="we" class="ed-item s-100 ed-container wwa-section__tabs-content">
			<div class="ed-item s-100 l-30 ed-container full">
				Nosotros
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor, quas eveniet voluptatem quos commodi nisi! Voluptate ea aliquid iure dolore, rem cupiditate alias, repellat nam officia quidem autem doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quo corporis quae nulla blanditiis quod facilis velit at. Odio ut, doloremque, explicabo totam consequuntur temporibus debitis. Autem, cupiditate! Deleniti, impedit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum autem voluptates eos, tempore et porro impedit ducimus sapiente iusto, itaque. Molestias eveniet nostrum necessitatibus, soluta doloremque porro quisquam ea delectus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, sunt, laudantium! Earum ipsum dolorem iusto. Amet perspiciatis quisquam sint facilis blanditiis animi, atque sed necessitatibus saepe doloremque suscipit, asperiores, ratione.</p>
				<div class="ed-item s-100 l-90 wwa-section__tabs-content_text-footer">
					<p style="">
						Vive con nosotros una experiencia cafetera unica
					</p>
				</div>
			</div>
			<div class="ed-item base-100 l-60">
				<img src="img/paisajemedio1.png" alt="">
			</div>
		</div>
		<div id="salamina" class="ed-item s-100 ed-container wwa-section__tabs-content">
			<div class="ed-item s-100 l-30 ed-container wwa-section__tabs-content-text">
				Salamina
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor, quas eveniet voluptatem quos commodi nisi! Voluptate ea aliquid iure dolore, rem cupiditate alias, repellat nam officia quidem autem doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quo corporis quae nulla blanditiis quod facilis velit at. Odio ut, doloremque, explicabo totam consequuntur temporibus debitis. Autem, cupiditate! Deleniti, impedit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum autem voluptates eos, tempore et porro impedit ducimus sapiente iusto, itaque. Molestias eveniet nostrum necessitatibus, soluta doloremque porro quisquam ea delectus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, sunt, laudantium! Earum ipsum dolorem iusto. Amet perspiciatis quisquam sint facilis blanditiis animi, atque sed necessitatibus saepe doloremque suscipit, asperiores, ratione.</p>
				<div class="ed-item s-100 l-90 wwa-section__tabs-content_text-footer">
					<p style="">
							Vive con nosotros una experiencia cafetera unica
					</p>
				</div>
			</div>
			<div class="ed-item base-100 l-60 wwa-section__tabs-content-slider">
				<img src="img/paisajemedio1.png" alt="">
			</div>
		</div>
	</div>
	<div class="plans-section ed-container flex-h-center full">
		<div class="ed-item s-100">
			<h2 class="text-green-title text-center">PLANES</h2>
		</div>
		<div class="ed-item s-100 l-25">
			<div class="plans-section__card flex flex-column backg-white">
				<div class="plans-section__card-title backg-cyan text-center">
					<img src="img/almendra.png" alt="">
					<h3><span class="text-1rem">PLAN</span><br> ALMENDRA</h3>
				</div>
				<div class="plans-section__card-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolorum quidem, saepe molestiae dicta. Delectus explicabo excepturi id maiores. Mollitia delectus, at recusandae nesciunt dolore voluptatem et quam aperiam excepturi?</p>	
				</div>
				<div class="plans-section__card-footer text-center">
					<a href="#" class="text-white backg-green">ELEGIR PLAN</a>
				</div>
			</div>
		</div>
		<div class="ed-item s-100 l-25">
			<div class="plans-section__card flex flex-column backg-white">
				<div class="plans-section__card-title text-center backg-orange">
					<img src="img/regional.png" alt="">
					<h3 class="text-center"><span class="text-1rem">PLAN</span><br>REGIONAL</h3>
				</div>
				<div class="plans-section__card-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolorum quidem, saepe molestiae dicta. Delectus explicabo excepturi id maiores. Mollitia delectus, at recusandae nesciunt dolore voluptatem et quam aperiam excepturi?</p>	
				</div>
				<div class="plans-section__card-footer text-center">
					<a href="#" class="text-white backg-green">ELEGIR PLAN</a>
				</div>
			</div>
		</div>
		<div class="ed-item s-100 l-25">
			<div class="plans-section__card flex flex-column backg-white">
				<div class="plans-section__card-title text-center backg-yellow">
					<img src="img/cosecha.png" alt="">
					<h3><span class="text-1rem">PLAN</span><br>COSECHA</h3>
				</div>
				<div class="plans-section__card-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolorum quidem, saepe molestiae dicta. Delectus explicabo excepturi id maiores. Mollitia delectus, at recusandae nesciunt dolore voluptatem et quam aperiam excepturi?</p>	
				</div>
				<div class="plans-section__card-footer text-center">
					<a href="#" class="text-white backg-green">ELEGIR PLAN</a>
				</div>
			</div>
		</div>
		<div class="ed-item s-100">
			<p class="text-center plans-section__observation">Todos nuestros planes y alojamientos son con reserva previa. Comunicate con nosotros, es un placer atenderte</p>
		</div>
	</div>
	<div class="invitation-section ed-container full flex-h-center backg-green">
		<div class="ed-item s-100 l-40">
			<p class="text-center text-white">Vive una experiencia única con olor a cafe entre montañas</p>	
		</div>
	</div>
	<div class="attractions-section ed-container flex-h-center">
		<div class="ed-item s-100">
			<h2 class="cvp text-green-title text-center">ATRACCIONES</h2>
		</div>
		<div class="ed-item s-100 l-20 attractions-section__box backg-cyan flex no-padding">
			<div class="attractions-section__box-text">
				<h4>Lorem Impsum dolor</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
		<div class="ed-item s-100 l-20 attractions-section__box flex no-padding">
			<div class="attractions-section__box-text">
				<h4>Lorem Impsum dolor</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
		<div class="ed-item s-100 l-20 attractions-section__box flex no-padding">
			<div class="attractions-section__box-text">
				<h4>Lorem Impsum dolor</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
		<div class="ed-item s-100 l-20 attractions-section__box flex no-padding">
			<div class="attractions-section__box-text">
				<h4>Lorem Impsum dolor</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
		<div class="ed-item s-100 l-20 attractions-section__box flex no-padding">
			<div class="attractions-section__box-text">
				<h4>Lorem Impsum dolor</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
		<div class="ed-item s-100 l-20 attractions-section__box flex no-padding">
			<div class="attractions-section__box-text">
				<h4>Lorem Impsum dolor</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
		<div class="ed-item s-100 l-20 attractions-section__box flex no-padding">
			<div class="attractions-section__box-text">
				<h4>Lorem Impsum dolor</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
		<div class="ed-item s-100 l-20 attractions-section__box flex no-padding">
			<div class="attractions-section__box-text">
				<h4>Lorem Impsum dolor</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="backg-gray">
		<div class="blogs-section ed-container flex-h-center">
			<div class="ed-item s-100">
				<h2 class="cvp text-green-title text-center">BLOG</h2>
			</div>
			<div class="ed-item s-100 l-50">
				<div class="blogs-section__card">
					<img src="img/paisajemedio1.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title text-xl">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
			<div class="ed-item s-100 l-50">
				<div class="blogs-section__card">
					<img src="img/paisajemedio2.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title text-xl">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
			<div class="ed-item s-100 l-25">
				<div class="blogs-section__card">
					<img src="img/paisaje1.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
			<div class="ed-item s-100 l-25">
				<div class="blogs-section__card">
					<img src="img/paisaje2.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
			<div class="ed-item s-100 l-25">
				<div class="blogs-section__card">
					<img src="img/paisaje3.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
			<div class="ed-item s-100 l-25">
				<div class="blogs-section__card">	
					<img src="img/paisaje4.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
			<div class="ed-item s-100 l-25">
				<div class="blogs-section__card">
					<img src="img/paisaje1.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
			<div class="ed-item s-100 l-25">
				<div class="blogs-section__card">
					<img src="img/paisaje2.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
			<div class="ed-item s-100 l-25">
				<div class="blogs-section__card">		
					<img src="img/paisaje3.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
			<div class="ed-item s-100 l-25">
				<div class="blogs-section__card">	
					<img src="img/paisaje4.png" alt="">
					<div class="blogs-section__card-text">
						<p class="text-green-title">LOREM IMPSUMP DOLOR</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="moral-section ed-container flex-h-center">
		<div class="ed-item s-100 l-20 text-center">
			<!-- <div class="moral-section__box"> -->
				<img src="img/moral1.png" alt="">
				<h5 class="text-red-orange">NO AL TRÁFICO DE BIENES DE INTERÉS CULTURALEN COLOMBIA.</h5>
				<p> Penalizado según la Ley 63 de 1986 ley 1185 de 2008 y ley 397 de 1997 y demás que lascomplementen o sustituyan.</p>
			<!-- </div> -->
		</div>

		<div class="ed-item s-100 l-20 text-center">
			<img src="img/moral2.png" alt="">
			<h5 class="text-brown">NO AL TRÁFICO DE ESPECIES DE FLORA Y FAUNA SILVESTRE.</h5>
			<p>Penalizado según la ley 17 de 1981 y la resolución ministerial 1367 del 2000.</p>
		</div>

		<div class="ed-item s-100 l-20 text-center">
			<img src="img/moral3.png" alt="">
			<h5 class="text-dark-green">SI AL TURISMO. NO A LA EXPLOTACIÓN Y ABUSO SEXUAL DE MENORES Y ADOLESCENTES.</h5>
			<p>(Penalizado segùn la Ley 679 de 2001 y Ley 1336 de 2009).</p>
		</div>

		<div class="ed-item s-100 l-20 text-center">
			<img src="img/moral4.png" alt="">
			<h5 class="text-yellow">SI A UN TRATO JUSTO E IGUALITARIO, PROMOVEMOS LA PROTECCIÓN DE LOS DERECHOS DE TODAS AQUELLAS PERSONAS Y COMUNIDADES EN GENERAL CON LAS CUALES INTERACTUAMOS.</h5>
			<p>Conforme la ley 1482 de 2011 rechazando cualquier acto de racismo o discriminación</p>		
		</div>
	</div>
	<div class="total-footer ed-container full">
		<div class="register-box--mod ed-item s-100 l-25 ed-container">
			<div class="ed-item s-100">	
				<h2 class="text-center text-white">RESERVA AHORA</h2>
			</div>	
			<form action="" class=" ed-item s-100 ed-container">
				<div class="ed-item s-100">			
					<label for="user">Nombre</label>
					<input class="full-width" type="text" name="user">
				</div>
				<div class="ed-item s-100">	
					<label for="mail">Correo electrónico</label>
					<input class="full-width" type="email" name="mail">
				</div>
				<div class="ed-item s-100 l-50">
					<label for="date">FECHA</label>
					<select name="date" id="">
						<option value="">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="ed-item s-100 l-50">
					<label for="people">PERSONAS</label>
					<select name="people" id="">
						<option value="">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="ed-item s-100 l-50">
					<label for="oldpeople">ADULTOS</label>
					<select name="oldpeople" id="">
						<option value="">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="ed-item s-100 l-50">
	
					<label for="boys">NIÑOS</label>
					<select name="boys" id="">
						<option value="">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="ed-item s-100 l-50">	
					<label for="plan">PLAN</label>
					<select name="plan" id="">
						<option value="">plan1</option>
						<option value="">plan2</option>
					</select>
				</div>
			<div class="ed-item s-100 text-center">	
				<button class="text-white backg-green">ENVIAR</button>
			</div>
			</form>
		</div>
		<div class="ed-item s-100 map-section no-padding">
			<img src="img/map.png" alt="" style="width: 100%;">
		</div>
		<footer class="ed-item s-100 ed-container text-white full">
			<div class="ed-item s-100 l-25">
				<h3>CONTACTO</h3>
				<p>
					CAFENTREMONTANAS@GMAIL.COM
					
					(+57) 320 584 3586
					
					VEREDA EL BOTÓN, SALAMINA (CALDAS - COLOMBIA)
					
					COORDENADAS/COORDINATES: 524199 - 753115</p>
			</div>
			<div class="ed-item s-100 l-15">
				<h3>SIGUENOS</h3>
				<ul class="flex">
					<li><a href="" class="text-white"><i class="icon-facebook flex flex-v-center"></i></a></li>
					<li><a href="" class="text-white"><i class="icon-twitter-alt flex flex-v-center"></i></a></li>
					<li><a href="" class="text-white"><i class="icon-instagram flex flex-v-center"></i></a></li>
				</ul>
			</div>
			<div class="ed-item s-100 l-25">
				<h3>ALIADOS</h3>
				<p>Hospedaje Casa Real</p>
			</div>
		</footer>
	</div>
	<script
  		src="https://code.jquery.com/jquery-3.2.1.min.js"
  		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  		crossorigin="anonymous">
  </script>
  <script src="js/scripts.js"></script>
</body>
</html>