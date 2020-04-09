@extends('layouts.default')
@section('content')
	<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselIndicators" data-slide-to="1"></li>
			<li data-target="#carouselIndicators" data-slide-to="2"></li>
			<li data-target="#carouselIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100 carousel-img" src={{ ('assets/images/amanecer-slide.jpg') }} alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>Amanecer</h5>
					<p>Trae tu casita de campaña y disfruta de un hermoso amanecer</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel-img" src={{ ('assets/images/amanecer-rio.jpg') }} alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>Atardecer</h5>
					<p>El mejor atardecer desde la laguna</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel-img" src={{ ('assets/images/caldo-de-camaron-molcajete-slide.jpg') }} alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>Caldo de camarones</h5>
					<p>Del mar a su paladar y de la ola a la cacerola, servidos en molcajete</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel-img" src={{ ('assets/images/fuego-comal-slide.jpg') }} alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>Comal de barro y leña</h5>
					<p>Todos nuestros platillos son cocinados con leña, lo que les da un sabor único</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Faztecaguerrerooficial%2Fvideos%2F752710128188025%2F&show_text=0&width=560" width="560" height="420" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>-->
@stop