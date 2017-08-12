@extends('templates.master')

@section('title')
Dashboard
@endsection

@section('body')

@include('partials.navbar')

<section class="container">
	<h1 class="thin">Your Dashboard</h1>
	<hr>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="text-center">
						<a href="{{ route('profile') }}" class="btn btn-primary btn-md">View my profile</a>
						<a href="{{ route('postfreead') }}" class="btn btn-success btn-md">Post new Advert</a>
						<a href="{{ route('signup') }}" class="btn btn-default btn-md">View posted ads</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection