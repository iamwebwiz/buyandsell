@extends('templates.master')

@section('title')
Noticeboard Trading
@endsection

@section('body')

@include('partials.navbar')

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">AWESOME, CUSTOMIZABLE, FREE</h1>
				<p class="tagline">PROGRESSUS: free business bootstrap template by <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus">GetTemplate</a></p>
				<p><a class="btn btn-default btn-lg" role="button">MORE INFO</a> <a class="btn btn-action btn-lg" role="button">DOWNLOAD NOW</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container">
		<br> <br>
		<h2 class="thin text-center">Recently placed Advertisements</h2>
		<hr>
		<div class="row">
		</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div id="ad-image">

							</div>
							<div id="smalldetail">

								<button class="btn btn-success submitbtn"><i class="fa fa-phone"></i> Show phone</button>
							</div>
						</div>
					</div>
				</div>

		</div>
	</div>
	<!-- /Intro-->

@endsection