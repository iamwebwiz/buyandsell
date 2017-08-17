{{-- Fixed navbar --}}
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
	<div class="container">
		<div class="navbar-header">
			<!-- Button for smallest screens -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{ URL::to('images/logo.png') }}" alt="Noticeboard Trading"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
				<li><a class="btn" href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
				{{-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="sidebar-left.html">Left Sidebar</a></li>
						<li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>
					</ul>
				</li> --}}
				<li><a class="btn" href="{{ route('postnewad') }}"><i class="fa fa-plus"></i> New Advert</a></li>
				<li><a class="btn" href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div> 
<!-- /.navbar -->
<header id="head" class="secondary"></header>