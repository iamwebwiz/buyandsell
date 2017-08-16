@extends('templates.master')

@section('title')
Post a free Ad
@endsection

@section('body')

@include('partials.navbar')

<div class="container">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">Post a free Ad</li>
		</ol>
		<h1 class="thin">Post a free Ad</h1>
		<hr>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-success">
				<div class="panel-body">
					<p class="alert alert-info">Post a free advertisement on Noticeboard Trading platform</p>
					<form method="post" action="{{ route('postFreeAd') }}" enctype="multipart/form-data">
						<div class="form-group">
							<label for="firstname">First name</label>
							<input type="text" name="ad_poster" placeholder="Your name" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" name="ad_title" placeholder="Title of Ad" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="price">Price</label>
							<input type="number" name="ad_price" placeholder="Amount" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="description">Description</label>
							<textarea name="ad_longdesc" placeholder="Provide a description for your item" rows="5" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="shortdesc">Short description</label>
							<textarea name="ad_shortdesc" placeholder="Provide a short description for your item (100 characters at most)" rows="3" maxlength="100" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="location">Location</label>
							<input type="text" name="ad_location" placeholder="Your location" class="form-control">
						</div>
						<div class="form-group">
							<label for="phone">Phone</label>
							<input type="tel" name="ad_phone" placeholder="09088382819" class="form-control">
						</div>
						<div class="form-group">
							<label for="ad_image">Image</label>
							<input type="file" name="ad_image" class="form-control" enctype="multipart/form-data">
						</div>
						<div class="form-group">
							<button class="btn btn-success submitbtn" type="submit">Submit Ad !</button>
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
