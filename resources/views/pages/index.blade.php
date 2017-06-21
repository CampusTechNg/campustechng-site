@extends('pages.templates.master')

@section('page_title')
<title>{{ config('app.name', 'CTL') }}</title>
@endsection

@section('page_description')
<meta name="description" content="A multi-product consulting firm that provides Information Technology consulting services across various industry sectors">
@endsection

@section('keywords')
<meta name="keywords" content="ctl, consulting firm in nigeria, niit abuja, niit kaduna, software development, business management, software development company in nigeria">
@endsection

@section('content')
	<section class="carousel_section wow fadeIn">
		<div class="container">
			<div class="carousel slide" data-ride="carousel" id="myCarousel">
				<div class="carousel-inner">
					<div class="item active">
						<img src="/img/slider/slide1.jpg" alt="slide-image-1">
						<div class="carousel-caption">
							<div class="slide_content">
								<h2>Providing solutions that transform businesses</h2>
								<h3>Transforming Businesses</h3>
								<a class="dark_btn_link" href="{{ url('/services') }}">Read More <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="/img/slider/slide2.jpg" alt="slide-image-2">
						<div class="carousel-caption">
							<div class="slide_content">
								<h2>Deploying software that optimizes processes</h2>
								<h3>Optimizing Processes</h3>
								<a class="dark_btn_link" href="{{ url('/contact') }}">Get in touch <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="/img/slider/slide3.jpg" alt="slide-image-3">
						<div class="carousel-caption">
							<div class="slide_content">
								<h2>Innovation that speaks for itself</h2>
								<h3>Innovative Ideals</h3>
							</div>
						</div>
					</div>
					<a href="#myCarousel" class="left carousel-control" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a> 

					<a href="#myCarousel" class="right carousel-control" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="intro_section wow fadeInUp">
		<div class="container intro">
			<h3>We provide solutions that enable individuals and organizations to transform their businesses</h3>
			<a href="{{ url('/services') }}" class="light_btn_link">Learn More</a>
		</div>
	</section>

	<section class="about_section wow fadeInUp">
		<div class="container">
			<h2 class="section_title">Who We Are</h2>
			<article>
				<p>
					Campus Technologies Limited is a multi-product consulting firm that provides Information Technology consulting services across various industry sectors. We are a provider of Information Management and Technology solutions in Nigeria providing solutions that enable individuals and organizations to transform their businesses. Our clients are varied; they include large, small and medium sized businesses, governmental and non-governmental institutions, agencies and departments.
				</p>

				<p>
					We help our clients identify, implement, and manage modern technologies. We deploy and optimize software solutions which are strategically tailored to meeting specific business needs and dealing with the most common inefficiencies that afflict essential business processes.
				</p>
				<a href="{{ url('/about') }}" class="read_more">Read More <i class="fa fa-arrow-circle-right"></i></a>
			</article>
		</div>
	</section>

	<section class="core_value_section wow fadeInUp">
		<div class="container">
			<h2 class="section_title">Our Core Values</h2>
			<div class="row">
				<div class="col-md-3 col-sm-3 grid_item">
					<img src="/img/integrity.png" alt="Integrity">
					<h4>Integrity</h4>
				</div>

				<div class="col-md-3 col-sm-3 grid_item">
					<img src="/img/innovation.png" alt="Innovation">
					<h4>Innovation</h4>
				</div>

				<div class="col-md-3 col-sm-3 grid_item">
					<img src="/img/commitment.png" alt="Commitment">
					<h4>Commitment</h4>
				</div>

				<div class="col-md-3 col-sm-3 grid_item" >
					<img src="/img/accountability.png" alt="Accountability">
					<h4>Accountability</h4>
				</div>
			</div>
		</div>
	</section>

	<section class="niit_section">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-xs-12 wow slideInLeft">
					<p>
						<h2 class="section_title">We Are NIIT Licensee</h2>
						Campus Technologies Limited is an indegenous Nigerian company with international affiliations with world-class Solution &amp; Service providing organizations such as NIIT India. NIIT now has operational centres in Abuja and Kaduna.
					</p>

					<p class="niit_quick_link">
						<a href="http://www.niitabuja.com" target="_blank" class="light_btn_link niit_btn">NIIT Abuja</a>
						<a href="http://www.niitkaduna.com" target="_blank" class="light_btn_link niit_btn">NIIT Kaduna</a>
					</p>
				</div>

				<div class="col-md-5 col-sm-5 col-xs-12 wow slideInRight">
					<img src="/img/niit.jpg" alt="NIIT-Image" class="img-responsive">
				</div>
			</div>
		</div>
	</section>

	<section class="clients_section text-center wow fadeInUp">
		<div class="container">
			<h2 class="section_title">Our Clients</h2>
			<img src="/img/clients.png" class="img-responsive" alt="Our Clients">
		</div>
	</section>
@endsection