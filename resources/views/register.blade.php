@extends('templates.master')

@section('title')
Registration
@endsection

@section('body')

@include('partials.navbar')

<section class="container">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="{{ route('home') }}">Home</a></li>
			<li class="active">Register</li>
		</ol>
		<h1 class="thin">Registration</h1>
		<hr>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					@if(count($errors) > 0)
						@foreach($errors->all() as $error)
							<div class="alert alert-danger">
								{{ $error }}
							</div>
						@endforeach
					@endif
					<p class="text-center" id="information">
						Provide the information required below to have access to more features from Noticeboard Trading.
						<br>
						Already registered? <a href="login" class="btn btn-link">Login here</a>
					</p>
					<form action="{{ route('signup') }}" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" placeholder="Email Address" class="form-control">
						</div>
						<div class="form-group">
							<label for="firstname">First name</label>
							<input type="text" name="firstname" placeholder="First name" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-success submitbtn" type="submit">Register</button>
						</div>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</section>

@endsection
