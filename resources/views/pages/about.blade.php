@extends('pages.templates.master')

@section('page_title')
<title>About Us &#8211; {{ config('app.name', 'CTL') }}</title>
@endsection

@section('page_description')
<meta name="description" content="Campus Technologies Limited is a multi-product consulting firm that provides Information Technology consulting services across various industry sectors">
@endsection

@section('keywords')
<meta name="keywords" content="campus technologies limited, ctl, software development, business management, management consulting, consulting firm in nigeria, ict services in nigeria, ict consulting in nigeria">
@endsection

@section('content')
	<section class="page_banner wow fadeIn paraxify">
		<div class="container">
			<div class="page_heading">
				<span class="banner_title">About Us</span>
			</div>
			
		</div>
	</section>

	<section class="mission_section wow fadeInUp">
		<div class="container mission">
			<h2 class="section_title">Mission Statement</h2>
			<h3>
				To achieve consistent profitable growth through deployment of cutting edge business solutions across industry sectors by innovation, quality and commitment.
			</h3>
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
					Campus Technologies Limited is an indegenous company with international affiliations with world-class Solution &amp; Service providing organizations such as NIIT India. We help our clients identify, implement, and manage modern technologies. We deploy and optimize software solutions which are strategically tailored to meeting specific business needs and dealing with the most common inefficiencies that afflict essential business processes. We deploy products and business solutions that integrate with most enterprise business applications, giving our clients the power to optimize their business processes and to give their staff and Customers 21st century tools and business solutions needful to make them efficient and to make effective business decisions.
				</p>

				Our clients count on our managed training, technology tools, learning delivery and custom content to:
				<ul>
					<li>Deliver on set targets and bridge identified skills gap</li>
					<li>Help achieve real-world hands-on skills to better compete in today's global economy</li>
				</ul>
			</article>
		</div>
	</section>

	<section class="core_value_section wow fadeInUp">
		<div class="container text-center">
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

				<div class="col-md-3 col-sm-3 grid_item">
					<img src="/img/accountability.png" alt="Accountability">
					<h4>Accountability</h4>
				</div>
			</div>
		</div>
	</section>
@endsection