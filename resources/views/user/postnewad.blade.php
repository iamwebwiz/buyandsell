@extends('templates.master')

@section('title')
Post a new Ad
@endsection

@section('body')

@include('user.navbar')

<section class="container">
	
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard') }}">Home</a></li>
			<li class="active">Post a new advert</li>
		</ol>
		<h1 class="thin">Post a new Ad</h1>
		<hr>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<p class="alert alert-info">Post a new advert on Noticeboard Trading</p>
					@include('partials.messages')
					<form method="post" action="{{ route('post-user-ad') }}" enctype="multipart/form-data">
						<div class="form-group">
							<label for="firstname">First name</label>
							<input type="text" name="ad_poster" placeholder="Your name" class="form-control" value="{{ $user->firstname }}" disabled required>
						</div>
						<div class="form-group">
							<label for="title">Title <span class="text-danger">*</span></label>
							<input type="text" name="ad_title" placeholder="Title of Ad" class="form-control" required value="{{ Request::old('ad_title') }}">
						</div>
						<div class="form-group">
							<label for="price">Price <span class="text-danger">*</span></label>
							<input type="number" name="ad_price" placeholder="Amount" class="form-control" required value="{{ Request::old('ad_price') }}">
						</div>
						<div class="form-group">
							<label for="description">Description <span class="text-danger">*</span></label>
							<textarea name="ad_longdesc" placeholder="Provide a description for your item" rows="5" class="form-control" value="{{ Request::old('ad_longdesc') }}"></textarea>
						</div>
						<div class="form-group">
							<label for="shortdesc">Short description</label>
							<textarea name="ad_shortdesc" placeholder="Provide a short description for your item (100 characters at most)" rows="3" maxlength="100" class="form-control" value="{{ Request::old('ad_shortdesc') }}"></textarea>
						</div>
						<div class="form-group">
							<label for="location">Location <span class="text-danger">*</span></label>
							<input type="text" name="ad_location" placeholder="Your location" class="form-control" value="{{ Request::old('ad_location') }}">
						</div>
						<div class="form-group">
							<label for="phone">Phone <span class="text-danger">*</span></label>
							<input type="tel" name="ad_phone" placeholder="09088382819" class="form-control" value="{{ Request::old('ad_phone') }}">
						</div>
						<div class="form-group">
							<label for="ad_image">Image <span class="text-danger">*</span></label>
							<input type="file" name="ad_image" class="form-control" multiple value="{{ Request::old('ad_image') }}">
						</div>
						<div class="form-group">
							<button class="btn btn-success submitbtn" type="submit">Post Advert</button>
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
