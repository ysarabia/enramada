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

	<!--HOME body BEGIN-->
	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-7">
			<div class="row">
				<div class="home-title">
					Nuestras Recomendaciones
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 recommendation-img-top-box">
				    <div class="img-shadow-box">
						<img class="recommendation-img" src="{{ ('assets/images/pescado-a-la-talla-sopes.jpg') }}">
					</div>
					<div class="recommendation-subtitle">
						Pescado a la talla
					</div>
					<div class="recommendation-description">
						El mejor pescado a la talla, disfruta de cualquier pescado mayor a 1kg preparado con un delicioso adobo, mayonesa y cocinado con brasas de coco.
					</div>
				</div>
				<div class="col-sm-6 recommendation-img-top-box">
				    <div class="img-shadow-box">
						<img class="recommendation-img" src="{{ ('assets/images/caldo-de-camaron-molcajete-galeria.jpg') }}">
					</div>
					<div class="recommendation-subtitle">
						Caldo de camarones
					</div>
					<div class="recommendation-description">
						Exquisito caldo de camarones servido en nuestro tradicional molcajete.
					</div>
				</div>
			</div>
			<div class="clear-space"></div>
			<div class="row">
				<div class="home-title">
					Galeria
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/pescado-a-la-talla-sopes.jpg') }}" class="galery-img">
					</div>
				</div>
				<div class="col-sm-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/pescado-a-la-talla-sopes.jpg') }}" class="galery-img">
					</div>
				</div>
				<div class="col-sm-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/pescado-a-la-talla-sopes.jpg') }}" class="galery-img">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/pescado-a-la-talla-sopes.jpg') }}" class="galery-img">
					</div>
				</div>
				<div class="col-sm-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/pescado-a-la-talla-sopes.jpg') }}" class="galery-img">
					</div>
				</div>
				<div class="col-sm-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/pescado-a-la-talla-sopes.jpg') }}" class="galery-img">
					</div>
				</div>
			</div>
			<div class="clear-space"></div>
		</div>
		<div class="col-sm-3">
			<div class="clear-space"></div>
			<div class="row">
				<div class="top-sidebar-bg">
					Horario
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-sm-4 sidebar-schedule-day">
						Lunes
					</div>
					<div class="col-sm-8 sidebar-schedule-hour">
						10:00 am - 7:00 pm
					</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-sm-4 sidebar-schedule-day">
						Martes
					</div>
					<div class="col-sm-8 sidebar-schedule-hour">
						10:00 am - 7:00 pm
					</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-sm-4 sidebar-schedule-day">
						Miercoles
					</div>
					<div class="col-sm-8 sidebar-schedule-hour">
						10:00 am - 7:00 pm
					</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-sm-4 sidebar-schedule-day">
						Jueves
					</div>
					<div class="col-sm-8 sidebar-schedule-hour">
						10:00 am - 7:00 pm
					</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-sm-4 sidebar-schedule-day">
						Viernes
					</div>
					<div class="col-sm-8 sidebar-schedule-hour">
						10:00 am - 7:00 pm
					</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-sm-4 sidebar-schedule-day">
						Sabado
					</div>
					<div class="col-sm-8 sidebar-schedule-hour">
						10:00 am - 7:00 pm
					</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-sm-4 sidebar-schedule-day">
						Domingo
					</div>
					<div class="col-sm-8 sidebar-schedule-hour">
						10:00 am - 7:00 pm
					</div>
				</div>
			</div>
			<div class="clear-space"></div>
			<div class="row">
				<div class="top-sidebar-bg">
					Reservar
				</div>
				<div class="col-sm-4">
					<img src="{{ ('assets/images/reservar-telefono.png') }}" class="booking-img">
				</div>
				<div class="col-sm-8">
					<div class="row sidebar-schedule-day">
						(045) 7441-20-6091
					</div>
					<div class="row sidebar-schedule-hour">
						No olvides realizar tu reservacion minimo 24 horas antes de tu llegada si requieres algun producto en especifico.
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1">
		</div>
	</div>
	<!--HOME body END-->
@stop