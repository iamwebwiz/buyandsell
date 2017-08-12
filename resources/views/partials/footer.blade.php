	<footer id="footer" class="top-space">

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="{{ route('home') }}">Home</a> | 
								<a href="{{ route('about') }}">About</a> |
								<a href="{{ route('contact') }}">Contact</a> |
								<a href="{{ route('signup') }}">Sign up</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2017, Noticeboard | Developed by <a href="https://iamwebwiz.github.io">Oladejo Ezekiel (Webwiz)</a>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	{{-- Scripts --}}
	<script src="{{ URL::to('js/headroom.min.js') }}"></script>
	<script src="{{ URL::to('/js/html5shiv.js') }}"></script>
	<script src="{{ URL::to('js/respond.min.js') }}"></script>
	<script src="{{ URL::to('js/template.js') }}"></script>
	<script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
	<!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52d8f8d75dfc85f4"></script> -->
</body>
</html>