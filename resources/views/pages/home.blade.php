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
					<h5>@lang('messages.carousel.0.title')</h5>
					<p>@lang('messages.carousel.0.subtitle')</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel-img" src={{ ('assets/images/amanecer-rio.jpg') }} alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>@lang('messages.carousel.1.title')</h5>
					<p>@lang('messages.carousel.1.subtitle')</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel-img" src={{ ('assets/images/caldo-de-camaron-molcajete-slide.jpg') }} alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>@lang('messages.carousel.2.title')</h5>
					<p>@lang('messages.carousel.2.subtitle')</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel-img" src={{ ('assets/images/fuego-comal-slide.jpg') }} alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>@lang('messages.carousel.3.title')</h5>
					<p>@lang('messages.carousel.3.subtitle')</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">@lang('messages.common.previous')</span>
		</a>
		<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">@lang('messages.common.next')</span>
		</a>
	</div>

	<!--HOME body BEGIN-->
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-2 col-lg-1"></div>
		<div class="col-xs-7 col-sm-7 col-md-8 col-lg-7">
			<div class="row">
				<div class="home-title">
					@lang('messages.reccomendation.title')
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-12 col-lg-6 recommendation-img-top-box">
				    <div class="img-shadow-box">
						<img class="gallery-img" src="{{ ('assets/images/pescado-a-la-talla-sopes-galeria.jpg') }}">
					</div>
					<div class="recommendation-subtitle">
						@lang('messages.reccomendation.0.subtitle')
					</div>
					<div class="recommendation-description">
						@lang('messages.reccomendation.0.description')
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-12 col-lg-6 recommendation-img-top-box">
				    <div class="img-shadow-box">
						<img class="gallery-img" src="{{ ('assets/images/caldo-de-camaron-molcajete-galeria.jpg') }}">
					</div>
					<div class="recommendation-subtitle">
						@lang('messages.reccomendation.1.subtitle')
					</div>
					<div class="recommendation-description">
						@lang('messages.reccomendation.1.description')
					</div>
				</div>
			</div>
			<div class="clear-space"></div>
			<div class="row">
				<div class="home-title">
						@lang('messages.gallery.title')
				</div>
			</div>	
			<!-- Modal Gallery-->
			<div class="modal fade" id="display-gallery" tabindex="-1" role="dialog" aria-labelledby="display-gallery" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body"></div>
					</div>
				</div>
			</div>
			<!-- Gallery -->
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/huachinango-fresco-galeria.jpg') }}" class="gallery-img">
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/cocina-sopes-galeria.jpg') }}" class="gallery-img">
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/atardecer-en-el-mar-galeria.jpg') }}" class="gallery-img">
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/enramada-laguna-galeria.jpg') }}" class="gallery-img">
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/luna-enorme-galeria.jpg') }}" class="gallery-img">
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-12 col-lg-4 galery-img-box">
				    <div class="img-shadow-box">
						<img src="{{ ('assets/images/tiritas-de-pescado-galeria.jpg') }}" class="gallery-img">
					</div>
				</div>
			</div>
			<div class="clear-space"></div>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-8 col-lg-3 custom-offset-md-2">
			<div class="clear-space"></div>
			<div class="row">
				<div class="top-sidebar-bg img-shadow-box">
					@lang('messages.schedule.title')
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sidebar-schedule-day">@lang('messages.days.monday')</div>
					<div class="col-xs-8 col-sm-8 col-md-4 col-lg-8 sidebar-schedule-hour">@lang('messages.schedule.hours')</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sidebar-schedule-day">@lang('messages.days.tuesday')</div>
					<div class="col-xs-8 col-sm-8 col-md-4 col-lg-8 sidebar-schedule-hour">@lang('messages.schedule.hours')</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sidebar-schedule-day">@lang('messages.days.wednesday')</div>
					<div class="col-xs-8 col-sm-8 col-md-4 col-lg-8 sidebar-schedule-hour">@lang('messages.schedule.hours')</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sidebar-schedule-day">@lang('messages.days.thursday')</div>
					<div class="col-xs-8 col-sm-8 col-md-4 col-lg-8 sidebar-schedule-hour">@lang('messages.schedule.hours')</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sidebar-schedule-day">@lang('messages.days.friday')</div>
					<div class="col-xs-8 col-sm-8 col-md-4 col-lg-8 sidebar-schedule-hour">@lang('messages.schedule.hours')</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sidebar-schedule-day">@lang('messages.days.saturday')</div>
					<div class="col-xs-8 col-sm-8 col-md-4 col-lg-8 sidebar-schedule-hour">@lang('mesages.schedule.hours')</div>
				</div>
				<div class="row sidebar-schedule-border">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sidebar-schedule-day">@lang('messages.days.sunday')</div>
					<div class="col-xs-8 col-sm-8 col-md-4 col-lg-8 sidebar-schedule-hour">@lang('messages.schedule.hours')</div>
				</div>
			</div>
			<div class="clear-space"></div>
			<div class="row">
				<div class="top-sidebar-bg img-shadow-box">
					@lang('messages.book_now')
				</div>
				<div class="col-xs-4 col-sm-4 custom-offset-md-3 col-md-2 col-lg-4">
					<img src="{{ ('assets/images/reservar-telefono.png') }}" class="booking-img">
				</div>
				<div class="col-xs-8 col-sm-8 col-md-6 col-lg-8">
					<div class="row top-booking-phone">
						(045) 7441-20-6091
					</div>
					<div class="row sidebar-schedule-hour">
						@lang('messages.booking_description')
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-1 col-sm-1 col-md-2 col-lg-1"></div>
	</div>
	<!--HOME body END-->
	<div class="clear-space"></div>
@stop