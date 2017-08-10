{{-- Fixed navbar --}}
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
	<div class="container">
		<div class="navbar-header">
			<!-- Button for smallest screens -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="{{ route('home') }}"><img src="{{ URL::to('images/logo.png') }}" alt="Progressus HTML5 template"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
				<li class="active"><a href="{{ route('home') }}">Home</a></li>
				<li><a href="about">About</a></li>
				{{-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="sidebar-left.html">Left Sidebar</a></li>
						<li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>
					</ul>
				</li> --}}
				<li><a href="contact">Contact</a></li>
				<li><a href="{{ route('postfreead') }}">Post a free Ad</a></li>
				<li><a class="btn" href="{{ route('login') }}">SIGN IN / SIGN UP</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div> 
<!-- /.navbar -->
<header id="head" class="secondary"></header>