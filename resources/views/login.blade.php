@extends('templates.master')

@section('title')
Login
@endsection

@section('body')

@include('partials.navbar')

<div class="container">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">Login</li>
		</ol>
		<h1 class="thin">Login</h1>
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
					<p class="text-center" id="information">Log into Noticeboard Trading to enjoy more benefits as a user. If you are not registered, <a href="register" class="btn btn-link">Register here</a></p>
					<form action="{{ route('signin') }}" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" placeholder="Username" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control" required>
						</div>
						<div class="form-group">
							<button class="btn btn-success submitbtn" type="submit">Login!</button>
						</div>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

@endsection
