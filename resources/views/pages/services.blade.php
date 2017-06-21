@extends('pages.templates.master')

@section('page_title')
<title>Our Services &#8211; {{ config('app.name', 'CTL') }}</title>
@endsection

@section('page_description')
<meta name="description" content="Providing solutions that transform businesses">
@endsection

@section('keywords')
<meta name="keywords" content="software development company in abuja, software development, business management, management consulting, it services in nigeria, project management, project management in nigeria, web development company in abuja">
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/plugins/cubeportfolio/css/cubeportfolio.min.css" />
@endsection

@section('content')
	<section class="page_banner wow fadeIn paraxify">
		<div class="container">
			<div class="page_heading">
				<span class="banner_title">Our Services</span>
			</div>
			
		</div>
	</section>

	<section class="service_intro wow fadeInUp">
		<div class="container">
			<h3>Providing solutions that transform businesses</h3>
		</div>
	</section>

	<section class="service_section wow fadeInUp">
		<div class="container service">
			<div class="portfolio-content portfolio-3">
	            <div id="js-grid-lightbox-gallery" class="cbp">
	                <div class="cbp-item">
	                	<div class="service_title"><h4>Software Development</h4></div>
	                    <a href="/plugins/cubeportfolio/ajax/software_development.php" class="cbp-caption cbp-singlePageInline" data-title="Software Development" rel="nofollow">
	                        <div class="cbp-caption-defaultWrap">
	                            <img src="/img/portfolio/sd.png" alt="Software Development"> </div>
	                        <div class="cbp-caption-activeWrap">
	                            <div class="cbp-l-caption-alignLeft">
	                                <div class="cbp-l-caption-body">
	                                </div>
	                            </div>
	                        </div>
	                    </a>
	                </div>
	                <div class="cbp-item">
	                	<div class="service_title"><h4>Business Management</h4></div>
	                    <a href="/plugins/cubeportfolio/ajax/business_management.php" class="cbp-caption cbp-singlePageInline" data-title="Business Management" rel="nofollow">
	                        <div class="cbp-caption-defaultWrap">
	                            <img src="/img/portfolio/bm.png" alt="Busine Management"> </div>
	                        <div class="cbp-caption-activeWrap">
	                            <div class="cbp-l-caption-alignLeft">
	                                <div class="cbp-l-caption-body">
	                                </div>
	                            </div>
	                        </div>
	                    </a>
	                </div>
	                <div class="cbp-item">
	                	<div class="service_title"><h4>Management Consulting</h4></div>
	                    <a href="/plugins/cubeportfolio/ajax/management_consulting.php" class="cbp-caption cbp-singlePageInline" data-title="Management Consulting" rel="nofollow">
	                        <div class="cbp-caption-defaultWrap">
	                            <img src="/img/portfolio/mc.png" alt="Manage Consulting"> </div>
	                        <div class="cbp-caption-activeWrap">
	                            <div class="cbp-l-caption-alignLeft">
	                                <div class="cbp-l-caption-body">
	                                </div>
	                            </div>
	                        </div>
	                    </a>
	                </div>
	                <div class="cbp-item">
	                	<div class="service_title"><h4>Project Management</h4></div>
	                    <a href="/plugins/cubeportfolio/ajax/project_management.php" class="cbp-caption cbp-singlePageInline" data-title="Project Management" rel="nofollow">
	                        <div class="cbp-caption-defaultWrap">
	                            <img src="/img/portfolio/pm.png" alt="Project Management"> </div>
	                        <div class="cbp-caption-activeWrap">
	                            <div class="cbp-l-caption-alignLeft">
	                                <div class="cbp-l-caption-body">
	                                </div>
	                            </div>
	                        </div>
	                    </a>
	                </div>
	                <div class="cbp-item">
	                	<div class="service_title"><h4>ICT Advisory/Governance</h4></div>
	                    <a href="/plugins/cubeportfolio/ajax/ict_advisory_governance.php" class="cbp-caption cbp-singlePageInline" data-title="IT Advisory/Governance" rel="nofollow">
	                        <div class="cbp-caption-defaultWrap">
	                            <img src="/img/portfolio/it.png" alt="ICT Advisory/Governance"> </div>
	                        <div class="cbp-caption-activeWrap">
	                            <div class="cbp-l-caption-alignLeft">
	                                <div class="cbp-l-caption-body">
	                                </div>
	                            </div>
	                        </div>
	                    </a>
	                </div>

	                <div class="cbp-item">
	                	<div class="service_title"><h4>Big Data</h4></div>
	                    <a href="/plugins/cubeportfolio/ajax/big_data.php" class="cbp-caption cbp-singlePageInline" data-title="Big Data" rel="nofollow">
	                        <div class="cbp-caption-defaultWrap">
	                            <img src="/img/portfolio/bd.png" alt="Big Data"> </div>
	                        <div class="cbp-caption-activeWrap">
	                            <div class="cbp-l-caption-alignLeft">
	                                <div class="cbp-l-caption-body">
	                                </div>
	                            </div>
	                        </div>
	                    </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<section class="get_in_touch_section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7 col-xs-8 left_col wow slideInLeft">
					Let's see how we can work together.
				</div>

				<div class="col-md-6 col-sm-5 col-xs-4 right_col wow slideInRight">
					<a href="{{ url('/contact') }}" class="dark_btn_link">Contact Us</a>	
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

@section('scripts')
<script src="/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="/plugins/portfolio/js/portfolio.js" type="text/javascript"></script>
@endsection