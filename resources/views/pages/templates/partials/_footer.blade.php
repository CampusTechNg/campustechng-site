
	<footer class="footer_section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 quick_nav">
					<ul class="footer_nav">
						<li><a href="{{ url('/') }}">Home</a></li> 
						<li><a href="{{ url('/services') }}">Services</a></li> 
						<li><a href="{{ url('/about') }}">About Us</a></li> 
						<li><a href="{{ url('/contact') }}">Contact Us</a></li>
						<li><a href="http://www.niitabuja.com" target="_blank"><strong>NIIT Abuja</strong></a></li> 
						<li><a href="http://www.niitkaduna.com" target="_blank"><strong>NIIT Kaduna</strong></a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-12 copyright">
					&copy; 2017 Campus Technologies Limited
				</div>
			</div>	
		</div>
	</footer>
</div>

<script src="/plugins/jquery/js/jquery-3.1.1.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/wow/js/wow.min.js"></script>
<script src="/plugins/paraxify/js/paraxify.min.js"></script>
<script>
	wow = new WOW(
		{
			boxClass:     'wow',
			animateClass: 'animated',
			offset:       0,
			mobile:       true,
			live:         true
		}
    )
    wow.init();
</script>
<script>
	myParaxify = paraxify('.paraxify');
</script>
@yield('scripts')

</body>
</html>