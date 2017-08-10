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
			<div class="col-md-3 col-sm-3">
				<div class="thumbnail">
					<img src="" alt="">
					<div id="smalldetail">
						<div id="ad-title">Some Laptop</div>
						<div id="ad-price">N30000</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="thumbnail">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, quae itaque in eos odio, officiis modi molestiae dicta cum minus quasi fugit ipsum, totam sapiente dolorum magni architecto nemo repellendus.
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="thumbnail">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, vero, praesentium. Deserunt dignissimos non minima quis, eveniet dolorem rem aliquid totam eaque a ullam temporibus tempora! Hic omnis esse non.
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="thumbnail">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maxime, dolore! Vero nam, necessitatibus repudiandae odit quasi doloremque reiciendis impedit libero consequatur blanditiis voluptatem consectetur eos et. Eligendi, impedit, quos!
				</div>
			</div>
		</div>
	</div>
	<!-- /Intro-->

@endsection
