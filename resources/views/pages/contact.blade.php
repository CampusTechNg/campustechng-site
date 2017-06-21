@extends('pages.templates.master')

@section('page_title')
<title>Contact Us &#8211; {{ config('app.name', 'CTL') }}</title>
@endsection

@section('page_description')
<meta name="description" content="A multi-product consulting firm that provides Information Technology consulting services across various industry sectors">
@endsection

@section('keywords')
<meta name="keywords" content="campus technologies limited, ctl, software development, business management, management consulting, consulting firm in nigeria, ict services in nigeria, ict consulting in nigeria">
@endsection

@section('content')
	<section class="page_banner wow fadeIn paraxify">
		<div class="container">
			<div class="page_heading">
				<span class="banner_title">Contact Us</span>
			</div>
		</div>
	</section>

	<section class="contact_section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 wow slideInLeft">
					<h2 class="section_title">Corporate Offices</h2>
					<div class="col-md-12 col-sm-4 col-xs-6 address_1">
						<h4><i class="fa fa-map-marker"></i> Abuja Office</h4>
						<p>
							8 Sirakoro Street, Off Blantrye Street,<br>
							Wuse II, Abuja.
						</p>
					</div>

					<div class="col-md-12 col-sm-4 col-xs-6 address_2">
						<h4><i class="fa fa-map-marker"></i> Kaduna Office</h4>
						<p>
							Ek House, 5D Kanta Road,<br>
							Kaduna, Nigeria.
						</p>
					</div>
				
					<div class="col-md-12 col-sm-4 col-xs-12 other_contact">
						<span><i class="fa fa-phone"></i> +234-905-509-6016</span><br>
						<span><i class="fa fa-phone"></i> +234-905-509-6019</span><br>
						<span><i class="fa fa-envelope-o"></i> info@campustechng.com</span><br>
						<span><i class="fa fa-globe"></i> www.campustechng.com</span>
				
						<div class="grouped_social">
							<a href=""><span class="social_icons"><i class="fa fa-facebook-square"></i></span></a>
							<a href="https://twitter.com/campustechng" target="_blank"><span class="social_icons"><i class="fa fa-twitter-square"></i></span></a>
							<a href=""><span class="social_icons"><i class="fa fa-linkedin-square"></i></span></a>
						</div>
					</div>
				</div>

				<div class="clearfix hidden-lg hidden-md" style="margin-bottom: 50px;"></div>

				<div class="col-md-7 wow slideInRight">
					<h2 class="section_title">Say Hello</h2>
					@if ( session()->has('message') )
					    <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
					@endif
					<form method="post" autocomplete="off" action="{{ route('send_mail') }}">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}">
									@if ($errors->has('email'))
										<span class="help-block">{{ $errors->first('email') }}</span>
									@endif
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
									<input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
									@if ($errors->has('subject'))
										<span class="help-block">{{ $errors->first('subject') }}</span>
									@endif
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
									<textarea class="form-control" name="message" placeholder="Type your message here">{{ old('message') }}</textarea>
									@if ($errors->has('message'))
										<span class="help-block">{{ $errors->first('message') }}</span>
									@endif
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 col-sm-12">
								<button class="btn" name="send_msg">Send</button>
								{{ csrf_field() }}
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="abuja_map">
		<div class="container">
			<h3>Abuja Office</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.910784683174!2d7.484082814402655!3d9.071892193491113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0a547bc0f99f%3A0xc2529495732e7278!2sSirakoro+St%2C+Abuja!5e0!3m2!1sen!2sng!4v1475077041178" style="width:100%; height:350px;" frameBorder="0" seamless='seamless'></iframe>
		</div>
	</section>

	<section class="kaduna_map">
		<div class="container">
			<h3>Kaduna Office</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.6529083372216!2d7.428681314798585!3d10.527979992490366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104d3553c6881bc3%3A0x43af03a13938034d!2sNIIT+Kaduna+Nig!5e0!3m2!1sen!2sng!4v1483961035725" style="width:100%; height:350px" frameBorder="0" seamless='seamless'></iframe>
		</div>
	</section>
@endsection